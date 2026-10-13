<?php
/**
 * Enquiry form handler — validates the POST and emails it to CONTACT_EMAIL.
 */

declare(strict_types=1);

session_start();

require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/data.php';

/** Redirect back to the contact section with a flash message. */
function back(string $type, string $message, array $old = []): void
{
    $_SESSION['flash'] = ['type' => $type, 'message' => $message, 'old' => $old];
    header('Location: index.php#contact', true, 303);
    exit;
}

/** Trim, strip control characters and limit length. */
function clean($value, int $max): string
{
    $value = is_string($value) ? trim($value) : '';
    $value = preg_replace('/[^\P{C}\n\r\t]+/u', '', $value) ?? '';

    // UTF-8 safe truncate (no mbstring dependency).
    return preg_match('/^.{0,' . $max . '}/su', $value, $match) ? $match[0] : '';
}

/** Single-line version (header-injection safe). */
function oneLine(string $value): string
{
    return trim(preg_replace('/\s+/', ' ', $value) ?? '');
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: index.php#contact', true, 303);
    exit;
}

// Honeypot: bots fill this in, people never see it.
if (!empty($_POST['website'])) {
    back('success', 'Thank you — your enquiry has been received.');
}

// CSRF check.
$token = (string) ($_POST['csrf'] ?? '');
if ($token === '' || !hash_equals((string) ($_SESSION['csrf'] ?? ''), $token)) {
    back('error', 'Your session expired. Please try sending the enquiry again.');
}

// Basic throttle: one enquiry every 30 seconds per visitor.
$last = (int) ($_SESSION['last_enquiry'] ?? 0);
if ($last && time() - $last < 30) {
    back('error', 'Please wait a moment before sending another enquiry.');
}

$data = [
    'fullName'    => oneLine(clean($_POST['fullName'] ?? '', 120)),
    'email'       => oneLine(clean($_POST['email'] ?? '', 160)),
    'phone'       => oneLine(clean($_POST['phone'] ?? '', 30)),
    'city'        => clean($_POST['city'] ?? '', 60),
    'requestType' => clean($_POST['requestType'] ?? '', 60),
    'aboutHouse'  => clean($_POST['aboutHouse'] ?? '', 3000),
];

$errors = [];
if ($data['fullName'] === '') {
    $errors[] = 'your name';
}
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'a valid email address';
}
if ($data['phone'] !== '' && !preg_match('/^[0-9+()\-\s]{6,30}$/', $data['phone'])) {
    $errors[] = 'a valid phone number';
}
if (!in_array($data['city'], $cities, true)) {
    $errors[] = 'your property city';
}
if (!in_array($data['requestType'], $inquiryTypes, true)) {
    $errors[] = 'how we can help';
}
if ($data['aboutHouse'] === '') {
    $errors[] = 'a few details about the house';
}

if ($errors) {
    back('error', 'Please enter ' . implode(', ', $errors) . '.', $data);
}

// Build the email.
$subject = 'CASA RIVA enquiry — ' . $data['requestType'];
$body = implode("\n", [
    'Name: ' . $data['fullName'],
    'Email: ' . $data['email'],
    'Phone: ' . ($data['phone'] !== '' ? $data['phone'] : 'Not provided'),
    'Property city: ' . $data['city'],
    'Enquiry: ' . $data['requestType'],
    '',
    'About the house:',
    $data['aboutHouse'],
]);

$host = preg_replace('/^www\./', '', (string) ($_SERVER['HTTP_HOST'] ?? 'localhost'));
$host = preg_replace('/:\d+$/', '', $host) ?? 'localhost';
$from = MAIL_FROM !== '' ? MAIL_FROM : 'no-reply@' . $host;

$headers = [
    'From: ' . SITE_NAME . ' Website <' . $from . '>',
    'Reply-To: ' . $data['fullName'] . ' <' . $data['email'] . '>',
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . PHP_VERSION,
];

$encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
$sent = @mail(CONTACT_EMAIL, $encodedSubject, $body, implode("\r\n", $headers));

if ($sent) {
    $_SESSION['last_enquiry'] = time();
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
    back('success', 'Thank you — your enquiry has been sent. We will reply within 24 hours.');
}

back(
    'error',
    'Sorry, we could not send your enquiry right now. Please email ' . CONTACT_EMAIL . ' or call ' . CONTACT_PHONE . '.',
    $data
);

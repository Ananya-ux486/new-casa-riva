<?php
/**
 * CASA RIVA — Architecture & Interiors (single-page site).
 */

declare(strict_types=1);

session_start();

require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/includes/data.php';

// One-time flash message and form values from send-enquiry.php.
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

// CSRF token for the enquiry form.
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf'];

require __DIR__ . '/includes/header.php';
?>
<main>
<?php
require __DIR__ . '/includes/sections/hero.php';
require __DIR__ . '/includes/sections/studio.php';
require __DIR__ . '/includes/sections/offerings.php';
require __DIR__ . '/includes/sections/philosophy.php';
require __DIR__ . '/includes/sections/gallery.php';
require __DIR__ . '/includes/sections/process.php';
require __DIR__ . '/includes/sections/why.php';
require __DIR__ . '/includes/sections/partners.php';
require __DIR__ . '/includes/sections/contact.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

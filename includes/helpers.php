<?php
/**
 * Small view helpers.
 */

declare(strict_types=1);

/** Escape a value for HTML output. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Path to an image inside assets/images. */
function img(string $file): string
{
    return 'assets/images/' . rawurlencode($file);
}

/**
 * Inline SVG icon (Lucide icon set paths).
 */
function icon(string $name, int $size = 16, float $stroke = 2.0, string $class = ''): string
{
    static $paths = [
        'arrow-up-right' => '<path d="M7 7h10v10"/><path d="M7 17 17 7"/>',
        'arrow-right'    => '<path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>',
        'arrow-down'     => '<path d="M12 5v14"/><path d="m19 12-7 7-7-7"/>',
        'check'          => '<path d="M20 6 9 17l-5-5"/>',
        'chevron-down'   => '<path d="m6 9 6 6 6-6"/>',
        'mail'           => '<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
        'map-pin'        => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>',
        'menu'           => '<line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/>',
        'phone'          => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',
        'x'              => '<path d="M18 6 6 18"/><path d="m6 6 12 12"/>',
    ];

    if (!isset($paths[$name])) {
        return '';
    }

    $cls = $class !== '' ? ' class="' . e($class) . '"' : '';

    return sprintf(
        '<svg%s xmlns="http://www.w3.org/2000/svg" width="%d" height="%d" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="%s" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%s</svg>',
        $cls,
        $size,
        $size,
        rtrim(rtrim(number_format($stroke, 2, '.', ''), '0'), '.'),
        $paths[$name]
    );
}

/** Slug for CSS/data attributes. */
function slug(string $value): string
{
    return strtolower(trim(preg_replace('/[^A-Za-z0-9]+/', '-', $value), '-'));
}

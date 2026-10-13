<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(SITE_TITLE) ?></title>
    <meta name="description" content="<?= e(SITE_DESC) ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?= e(SITE_TITLE) ?>">
    <meta property="og:description" content="<?= e(SITE_DESC) ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= e(img('4.jpg')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e(SITE_TITLE) ?>">
    <meta name="twitter:description" content="<?= e(SITE_DESC) ?>">
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&amp;family=Manrope:wght@400;500;600;700&amp;family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>document.documentElement.classList.add('js');</script>
</head>
<body>
<div id="top" class="page noise">
    <header class="site-header">
        <div class="site-header__inner">
            <a href="#top" class="brand" aria-label="CASA RIVA home">
                <span class="brand__dot"></span>
                <span class="brand__name"><?= e(SITE_NAME) ?></span>
            </a>
            <nav class="main-nav" aria-label="Main navigation">
                <?php foreach ($navLinks as [$label, $id]): ?>
                    <a href="#<?= e($id) ?>" class="nav-link"><?= e($label) ?></a>
                <?php endforeach; ?>
                <a href="#contact" class="nav-cta">Get Estimate</a>
            </nav>
            <button type="button" class="menu-toggle" id="menu-toggle" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-nav">
                <span class="menu-toggle__label">Menu</span>
                <span class="menu-toggle__icon menu-toggle__icon--open"><?= icon('menu', 17) ?></span>
                <span class="menu-toggle__icon menu-toggle__icon--close"><?= icon('x', 17) ?></span>
            </button>
        </div>
        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation" hidden>
            <?php foreach ($navLinks as [$label, $id]): ?>
                <a href="#<?= e($id) ?>" class="mobile-nav__link"><?= e($label) ?></a>
            <?php endforeach; ?>
            <a href="#contact" class="mobile-nav__cta">Get Estimate <?= icon('arrow-up-right', 14, 2, 'inline-icon') ?></a>
        </nav>
    </header>

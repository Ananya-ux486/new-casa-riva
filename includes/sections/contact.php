<?php
$old   = is_array($flash['old'] ?? null) ? $flash['old'] : [];
$value = static fn (string $key): string => e((string) ($old[$key] ?? ''));
?>
<section id="contact" class="section section--dark contact">
    <div class="container contact__grid">
        <div>
            <div data-reveal>
                <p class="kicker kicker--light">Begin</p>
                <h2 class="contact__title">Get an estimate.<br><em>Book a 3D session.</em></h2>
                <p class="contact__lead">Tell us about the property, the city, and how you live in the rooms. We will reply with how we would begin — pricing kept transparent, execution held from start to finish.</p>
                <div class="pill">First Session at No Charge</div>
            </div>
            <div data-reveal style="--delay:100ms">
                <div class="contact__details">
                    <a href="tel:<?= e(CONTACT_PHONE_LINK) ?>" class="contact__item">
                        <?= icon('phone', 17, 2, 'accent') ?>
                        <span><span class="contact__item-title">Call Us</span><span class="contact__item-text"><?= e(CONTACT_PHONE) ?> · <?= e(CONTACT_HOURS) ?></span></span>
                    </a>
                    <a href="mailto:<?= e(CONTACT_EMAIL) ?>" class="contact__item">
                        <?= icon('mail', 17, 2, 'accent') ?>
                        <span><span class="contact__item-title">Write to Us</span><span class="contact__item-text"><?= e(CONTACT_EMAIL) ?> · We reply within 24 hours</span></span>
                    </a>
                    <a href="<?= e(CONTACT_MAP_URL) ?>" target="_blank" rel="noopener" class="contact__item">
                        <?= icon('map-pin', 17, 2, 'accent') ?>
                        <span><span class="contact__item-title">Visit Us</span><span class="contact__item-text"><?= e(CONTACT_ADDRESS) ?></span></span>
                    </a>
                </div>
            </div>
        </div>

        <div data-reveal style="--delay:100ms">
            <form class="form" action="send-enquiry.php" method="post" novalidate>
                <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
                <div class="form__trap" aria-hidden="true">
                    <label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
                </div>
                <label class="field">
                    <span class="field__label">Full Name *</span>
                    <input name="fullName" autocomplete="name" required placeholder="Your name" value="<?= $value('fullName') ?>">
                </label>
                <label class="field">
                    <span class="field__label">Email Address *</span>
                    <input name="email" type="email" autocomplete="email" required placeholder="you@example.com" value="<?= $value('email') ?>">
                </label>
                <label class="field">
                    <span class="field__label">Phone Number</span>
                    <input name="phone" type="tel" autocomplete="tel" placeholder="+91" value="<?= $value('phone') ?>">
                </label>
                <label class="field">
                    <span class="field__label">Property City *</span>
                    <select name="city" required>
                        <option value="" disabled<?= $value('city') === '' ? ' selected' : '' ?>>Select a city</option>
                        <?php foreach ($cities as $city): ?>
                            <option value="<?= e($city) ?>"<?= $value('city') === e($city) ? ' selected' : '' ?>><?= e($city) ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label class="field field--wide">
                    <span class="field__label">How Can We Help? *</span>
                    <select name="requestType" required>
                        <option value="" disabled<?= $value('requestType') === '' ? ' selected' : '' ?>>Select a service</option>
                        <?php foreach ($inquiryTypes as $type): ?>
                            <option value="<?= e($type) ?>"<?= $value('requestType') === e($type) ? ' selected' : '' ?>><?= e($type) ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label class="field field--wide">
                    <span class="field__label">About the House *</span>
                    <textarea name="aboutHouse" required rows="4" placeholder="Tell us about the property and the rooms you wish to change."><?= $value('aboutHouse') ?></textarea>
                </label>
                <div class="field--wide">
                    <button type="submit" class="btn btn--primary">Send Enquiry <?= icon('arrow-up-right', 14) ?></button>
                    <?php if ($flash): ?>
                        <p class="form__status form__status--<?= e((string) ($flash['type'] ?? 'info')) ?>" role="status"><?= e((string) ($flash['message'] ?? '')) ?></p>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="process" class="section section--green process">
    <div class="container">
        <div class="process__head">
            <div data-reveal>
                <p class="kicker kicker--light">Our Design Process</p>
                <h2 class="process__title">How we design<br><em>your home.</em></h2>
            </div>
            <div data-reveal style="--delay:100ms">
                <p class="process__intro">From the first conversation to the last object placed in the room, the work is calm, exact and complete.</p>
            </div>
        </div>
        <div class="process__grid">
            <?php foreach ($processSteps as $i => $step): ?>
                <div data-reveal style="--delay:<?= ($i % 2) * 80 ?>ms">
                    <article class="step">
                        <div class="image-wash step__media">
                            <img src="<?= e(img($step['image'])) ?>" alt="<?= e($step['alt']) ?>" loading="lazy">
                        </div>
                        <div class="step__body">
                            <div class="step__top">
                                <p class="kicker kicker--light"><?= e($step['number']) ?> / <?= e($step['name']) ?></p>
                                <?php if ($i === 0): ?><?= icon('chevron-down', 16, 2, 'accent') ?><?php endif; ?>
                            </div>
                            <p class="step__text"><?= e($step['description']) ?></p>
                            <ul class="step__list">
                                <?php foreach ($step['details'] as $detail): ?>
                                    <li><?= icon('check', 13, 2, 'accent') ?><?= e($detail) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

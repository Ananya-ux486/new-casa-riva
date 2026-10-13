<section class="section section--sand philosophy">
    <div class="container philosophy__grid">
        <div class="image-wash philosophy__media" data-reveal>
            <img src="<?= e(img('architecture-02.jpg')) ?>" alt="Sculptural staircase in a double-height plaster hall" loading="lazy">
            <div class="philosophy__shade"></div>
            <div class="philosophy__caption"><p class="kicker kicker--light">Townhouse Ascent · Architecture</p></div>
        </div>
        <div>
            <div data-reveal>
                <p class="kicker">Philosophy</p>
                <h2 class="philosophy__title">What the rooms are asked to hold.</h2>
                <p class="philosophy__lead">Luxury, here, is a matter of spacing, joinery and light — not ornament for its own sake.</p>
            </div>
            <div class="principles">
                <?php foreach ($principles as $i => $principle): ?>
                    <div class="principle" data-reveal style="--delay:<?= 80 + $i * 55 ?>ms">
                        <h3 class="principle__title"><?= e($principle['title']) ?></h3>
                        <p class="principle__text"><?= e($principle['description']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

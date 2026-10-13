<section id="studio" class="section section--sage-light studio">
    <div class="container studio__grid">
        <div data-reveal>
            <p class="kicker">The work</p>
            <h2 class="studio__title">Beautifully designed interiors with smart planning.</h2>
        </div>
        <div data-reveal style="--delay:120ms">
            <p class="studio__text">The studio begins with how a household actually lives: light at different hours, the path from the door to the kitchen, the rooms that need quiet. Planning is exact. Pricing is transparent. Execution is directed until the last fitting is set.</p>
            <div class="stats">
                <?php foreach ($stats as [$value, $label]): ?>
                    <div>
                        <p class="stats__value"><?= e($value) ?></p>
                        <p class="stats__label"><?= e($label) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

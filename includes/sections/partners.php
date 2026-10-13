<section class="section section--cream partners">
    <div class="container">
        <div class="partners__head">
            <div>
                <p class="kicker">Partners</p>
                <h2 class="partners__title">Materials and fittings chosen with care.</h2>
            </div>
            <p class="partners__intro">Kitchens and wardrobes are specified with trusted houses for hardware, laminates, stone and appliances.</p>
        </div>
        <div class="partners__grid">
            <?php foreach ($partners as $partner): ?>
                <div class="partner"><?= e($partner) ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

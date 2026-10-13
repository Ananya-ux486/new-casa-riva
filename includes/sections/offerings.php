<section id="offerings" class="section section--cream offerings">
    <div class="container">
        <div class="offerings__head">
            <div data-reveal>
                <p class="kicker">Services held as architecture</p>
                <h2 class="offerings__title">One house.<br><em>One considered language.</em></h2>
            </div>
            <div data-reveal style="--delay:120ms">
                <p class="offerings__intro">Interior design, kitchens, wardrobes and turnkey work are treated as one house — not a catalogue of disconnected products.</p>
            </div>
        </div>
        <div class="offerings__grid">
            <?php foreach ($services as $i => $service): ?>
                <div class="group" data-reveal style="--delay:<?= ($i % 3) * 70 ?>ms">
                    <article>
                        <div class="image-wash service__media">
                            <img src="<?= e(img($service['image'])) ?>" alt="<?= e($service['alt']) ?>" loading="lazy">
                            <span class="service__label"><?= e($service['label']) ?></span>
                        </div>
                        <div class="service__row">
                            <div>
                                <p class="service__number"><?= e($service['number']) ?></p>
                                <h3 class="service__name"><?= e($service['name']) ?></h3>
                            </div>
                            <a href="#contact" class="service__arrow" aria-label="Enquire about <?= e($service['name']) ?>"><?= icon('arrow-up-right', 15) ?></a>
                        </div>
                        <p class="service__text"><?= e($service['description']) ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

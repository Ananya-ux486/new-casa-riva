<section class="hero">
    <div class="hero__media">
        <img src="<?= e(img('4.jpg')) ?>" alt="Sunlit living room with arched sash window, herringbone floor and sculptural chandelier" fetchpriority="high">
    </div>
    <div class="hero__shade hero__shade--side"></div>
    <div class="hero__shade hero__shade--bottom"></div>
    <div class="hero__content">
        <div class="hero__copy">
            <div data-reveal style="--delay:80ms"><p class="kicker kicker--light">Architecture · Interiors · Construction</p></div>
            <div data-reveal style="--delay:130ms">
                <h1 class="hero__title">Rooms composed<br><em>with care.</em></h1>
            </div>
            <div data-reveal style="--delay:200ms">
                <p class="hero__lead">Get beautifully designed interiors with smart planning, transparent pricing, and expert execution from start to finish.</p>
            </div>
            <div data-reveal style="--delay:260ms">
                <div class="hero__actions">
                    <a href="#contact" class="btn btn--primary">Book 3D Design Session <?= icon('arrow-up-right', 14) ?></a>
                    <a href="#gallery" class="btn-line">Design Gallery <?= icon('arrow-right', 14) ?></a>
                </div>
            </div>
        </div>
        <a href="#studio" class="hero__discover">
            <span>Discover CASA RIVA</span>
            <?= icon('arrow-down', 15, 1.2) ?>
        </a>
    </div>
</section>

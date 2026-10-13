<section id="gallery" class="section section--cream gallery">
    <div class="container">
        <div class="gallery__head">
            <div data-reveal>
                <p class="kicker">Design Gallery</p>
                <h2 id="projects" class="gallery__title">Projects.</h2>
            </div>
            <div data-reveal style="--delay:100ms">
                <p class="gallery__intro">Spaces across living, bedroom, kitchen, wardrobe, dining and architecture.</p>
            </div>
        </div>
        <div class="filters" role="group" aria-label="Filter projects">
            <?php foreach ($categories as $i => $category): ?>
                <button type="button" class="filter<?= $i === 0 ? ' is-active' : '' ?>" data-filter="<?= e($category) ?>" aria-pressed="<?= $i === 0 ? 'true' : 'false' ?>"><?= e($category) ?></button>
            <?php endforeach; ?>
        </div>
        <div class="gallery__grid" id="project-grid">
            <?php foreach ($projects as $i => $project): ?>
                <div class="group" data-category="<?= e($project['category']) ?>" data-reveal style="--delay:<?= ($i % 4) * 50 ?>ms">
                    <article>
                        <div class="image-wash project__media">
                            <img src="<?= e(img($project['image'])) ?>" alt="<?= e($project['alt']) ?>" loading="lazy">
                            <span class="project__badge"><?= e($project['category']) ?></span>
                        </div>
                        <h3 class="project__name"><?= e($project['name']) ?></h3>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

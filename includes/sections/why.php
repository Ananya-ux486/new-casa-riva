<section class="section section--sage-light why">
    <div class="container">
        <div data-reveal>
            <p class="kicker">Why CASA RIVA</p>
            <h2 class="why__title">Design that works for you.</h2>
        </div>
        <div class="why__grid">
            <?php foreach ($reasons as $i => $reason): ?>
                <div data-reveal style="--delay:<?= $i * 60 ?>ms">
                    <article class="reason">
                        <p class="kicker"><?= e($reason['number']) ?></p>
                        <h3 class="reason__title"><?= e($reason['title']) ?></h3>
                        <p class="reason__text"><?= e($reason['description']) ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

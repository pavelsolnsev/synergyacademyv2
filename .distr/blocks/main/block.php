<section class="main">
    <div class="container">
        <div class="main__content">

            <?php if (!empty($_REQUEST['h1'])) { ?>
                <h1 class="main__title"><?= $title_podmena ?></h1>
			<?php } ?>
			<?php if (!empty($_REQUEST['h2'])) {  ?>
                <div class="main__subtitle"><?= $title_podmena_2 ?></div>
            <?php } ?>
			<?php if ($h1) { ?>
                <h1 class="main__title"><?=$h1?></h1>
                <div class="main__subtitle">Стань востребованным специалистом<br> Начни зарабатывать уже сейчас</div>
            <?php } ?>
                <ul class="main__list">
                  <li class="main__item">Гарантированное <br> содействие <br> в трудоустройстве</li>
                  <li class="main__item">Первый платеж <br> через 6 месяцев</li>
                  <li class="main__item">13% налоговый вычет</li>
                </ul>

            <a href="#popup-reg" class="main__button button" data-fancybox>Записаться</a>
        </div>
    </div>
</section>
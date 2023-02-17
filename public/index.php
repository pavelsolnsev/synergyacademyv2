<!DOCTYPE html>
<html lang="ru">
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : 'v2';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
include_once $ROOT . 'version.php';
?>
<head>
	<base href="<?= $BASE_HREF ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-<?= $gtm ?>');
	</script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2487426621502508');
    fbq('track', 'PageView');
    </script>
</head>

<body class="<?= $version ? 'version-' . $version : '' ?> ">
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1"
    /></noscript>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	
	<div class="wrapper">
		
			<header class="header">
	<div class="container">
		<div class="header__content">
			<div class="header__logo">
				<img data-src="img/header/logo.svg" alt="Synergy university" class="lazy">
			</div>
			<nav class="header__menu">
				<ul class="header__list">
					<li class="header__item">
						<a href="#info" class="header__link scroll">Направления</a>
					</li>
					<li class="header__item">
						<a href="#career" class="header__link scroll">Центр карьеры</a>
					</li>
					<li class="header__item">
						<a href="#partner" class="header__link scroll">Партнеры</a>
					</li>
					<li class="header__item">
						<a href="#faq" class="header__link scroll">FAQ</a>
					</li>
				</ul>
			</nav>
			<div class="header__wrapper">
				<div class="header__contacts">
					<a class="header__phone" href="tel:<?= $phone_link ?>"><span><?= $phone ?></span></a>
					<a class="header__button button" href="#popup-reg" data-fancybox>Отправить заявку</a>
					
				</div>
				<a href="#popup-menu" data-fancybox class="header__hamburger">
					<svg width="41" height="28" viewBox="0 0 41 28" fill="none" xmlns="http://www.w3.org/2000/svg">
						<line y1="1.5" x2="41" y2="1.5" stroke="#FF015C" stroke-width="3" />
						<line y1="13.5" x2="41" y2="13.5" stroke="#FF015C" stroke-width="3" />
						<line y1="26.5" x2="41" y2="26.5" stroke="#FF015C" stroke-width="3" />
					</svg>
				</a>
			</div>
		</div>
	</div>
</header>

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
			
<section class="program lazy" id="info">
    <div class="container program__container">
        <h2 class="program__title title">Выбери свое направление</h2>
        <div class="program__block">
            <div class="program__block-wrapper">
                <div class="program__block-select">
                    <div class="program__block-sub">
                        
                        <div class="program__block-sub-link  active program__block-sub-link-active" data-identification="block_course">Курсы</div>
                        
                        <div class="program__block-sub-link  active " data-identification="block_profession">Профессии</div>
                        
                        <div class="program__block-sub-link  active " data-identification="block_college">Колледж</div>
                        
                        <div class="program__block-sub-link  active " data-identification="block_undergraduate">Бакалавриат</div>
                        
                        <div class="program__block-sub-link  active " data-identification="block_magistracy">Магистратура</div>
                        
                    </div>
                </div>
            </div>

            <div class="program__block-content">
                
                
                <div class="program__item active" data-target="block_course">
                    <div class="program__item-main">
                        
                        <p class="program__item-text">Курсы&nbsp;&mdash; на&nbsp;курсах длительностью от&nbsp;1&nbsp;до&nbsp;3&nbsp;месяцев вы&nbsp;получаете необходимые навыки, которые позволяют развиваться в&nbsp;рамках вашей профессии.</p>
                        
                    </div>
                    <div class="program__item-title ">Веб-разработка</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/python.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Python для начинающих</p>
                            
                            <p class="program__card-text">Изучите язык программирования Python с&nbsp;нуля и&nbsp;сможете начать создавать свои первые компьютерные и&nbsp;мобильные приложения.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/java.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Java для начинающих</p>
                            
                            <p class="program__card-text">Научитесь основам программирования на&nbsp;Java, научитесь прописывать алгоритмы и&nbsp;структуры данных, а&nbsp;также создавать Telegram-ботов и&nbsp;пользовательский интерфейс.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/php.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>PHP для начинающих</p>
                            
                            <p class="program__card-text">Изучите важные основы языка программирования РНР и&nbsp;сможете самостоятельно создавать веб-приложения и&nbsp;сайты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/web.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Основы верстки HTML и CSS</p>
                            
                            <p class="program__card-text">В&nbsp;данном курсе&nbsp;вы научитесь верстать сайты, работать с&nbsp;макетами и&nbsp;адаптивной версткой. Изучите принципы дизайна сайтов, создадите свои первые проекты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/js.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>JavaScript для начинающих</p>
                            
                            <p class="program__card-text">Освоите язык JavaScript, разберетесь в&nbsp;теории и&nbsp;сможете знания применить на&nbsp;практике, создавая свои первые сайты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/php.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Flutter</p>
                            
                            <p class="program__card-text">Научитесь создавать кроссплатформенные мобильные приложения для iOS и&nbsp;Android, освоите язык Dart и&nbsp;сможете создавать интерфейсы, продумывать логику приложения и&nbsp;добавлять различные виджеты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webc.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>C# для начинающих</p>
                            
                            <p class="program__card-text">Получите навыки для работы с&nbsp;языком программирования С# и&nbsp;сможете создавать различные приложения как для мобильных устройств, так и&nbsp;для компьютера.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webcp.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>C++ для начинающих</p>
                            
                            <p class="program__card-text">В&nbsp;данном курсе вы&nbsp;научитесь программировать на&nbsp;языке&nbsp;C++, а&nbsp;также создавать веб-приложения и&nbsp;решать математические задачи при помощи языка программирования, а&nbsp;также работать с&nbsp;SQL-запросами.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mobdesign.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Дизайн мобильных приложений</p>
                            
                            <p class="program__card-text">В&nbsp;данном курсе&nbsp;вы научитесь всем современным инструментам дизайнеров и&nbsp;сможете создавать макеты для приложений на&nbsp;базе iOS и&nbsp;Android.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_profession">
                    <div class="program__item-main">
                        
                        <p class="program__item-text">Профессии&nbsp;&mdash; программы обучения длительностью от&nbsp;6&nbsp;месяцев. Вы&nbsp;получаете необходимые навыки для старта в&nbsp;новом направлении, а&nbsp;также резюме с&nbsp;портфолио и&nbsp;возможность трудоустройства по&nbsp;новой специальности.</p>
                        
                    </div>
                    <div class="program__item-title ">Веб-разработка</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/python.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Python-разработчик</p>
                            
                            <p class="program__card-text">Изучите язык программирования Python и&nbsp;сможете заниматься разработкой серверной части веб-приложений, а&nbsp;также созданием мобильных приложений.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/java.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Java-разработчик</p>
                            
                            <p class="program__card-text">Научитесь создавать программы на&nbsp;языке Java, работать с&nbsp;системами контроля версий Git и&nbsp;GitHub, языком запросов SQL и&nbsp;фреймворком Spring.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/frontend.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Frontend-разработчик</p>
                            
                            <p class="program__card-text">Научитесь создавать сайты и&nbsp;приложения, проектировать интерфейсы. Вы&nbsp;сможете разрабатывать на&nbsp;языке программирования JavaScript, работать с&nbsp;Flexbox и&nbsp;профессиональной версткой.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/fullstaсk.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Fullstaсk-разработчик</p>
                            
                            <p class="program__card-text">Изучите языки программирования для разработки серверной и&nbsp;клиентской частей сайта, поработаете с&nbsp;различными видами баз данных и&nbsp;библиотеками, а&nbsp;также системой контроля версий Git.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/backend.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Backend-разработчик</p>
                            
                            <p class="program__card-text">Освоите языки серверного программирования, изучите язык SQL, чтобы управлять базами данных для создания высоконагруженных проектов, научитесь работать с&nbsp;большими данными.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mob.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Android-разработчик</p>
                            
                            <p class="program__card-text">В&nbsp;данной профессии вы&nbsp;научитесь создавать мобильные приложения для ОС&nbsp;Android при помощи языка программирования Java и&nbsp;Kotlin. А&nbsp;также изучите средство разработки Flutter и&nbsp;дизайн для мобильных приложений.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webc.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>С#-разработчик</p>
                            
                            <p class="program__card-text">Изучите язык программирования С# и&nbsp;сможете создавать веб-приложения, десктопные приложения и&nbsp;игры, обучающий искусственный интеллект.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webcp.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Разработчик на С++</p>
                            
                            <p class="program__card-text">Разработчик на&nbsp;С++&nbsp;&mdash; Освоите работу с&nbsp;базами данных, BOOST, Docker и&nbsp;Linux. Вы&nbsp;сможете программировать на&nbsp;языке&nbsp;С++ и&nbsp;использовать системы контроля версий Git.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/php.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>PHP-разработчик</p>
                            
                            <p class="program__card-text">Изучите язык программирования PHP и&nbsp;будете заниматься написанием скриптов для серверной части, а&nbsp;также созданием сайтов и&nbsp;веб-приложений.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/analitic.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Аналитик данных</p>
                            
                            <p class="program__card-text">Научитесь собирать, обрабатывать, изучать и&nbsp;интерпретировать данные, проводить А/B-тесты и&nbsp;оценивать стратегию развития проекта, чтобы помогать принимать грамотные бизнес-решения.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="program__item active" data-target="block_course">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">Дизайн</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ui.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>UX/UI-дизайн</p>
                            
                            <p class="program__card-text">Освоите специальные программы для дизайна и научитесь создавать уникальные и опциональные интерфейсы для сайтов и веб-приложений.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/dis.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Веб-дизайн и&nbsp;оптимизация сайтов</p>
                            
                            <p class="program__card-text">Научитесь создавать визуальное оформление сайтов, которое будет не&nbsp;только привлекательным эстетически, но&nbsp;и&nbsp;функциональным.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/designerpro.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Дизайнер интерьеров с&nbsp;0&nbsp;до&nbsp;PRO</p>
                            
                            <p class="program__card-text">Научитесь составлять дизайн-концепцию интерьеров, подбирать материалы для ее&nbsp;реализации и&nbsp;контролировать работу подрядчиков.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/prod.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Дизайн рекламы и&nbsp;сайтов</p>
                            
                            <p class="program__card-text">Научитесь создавать прототипы и&nbsp;макеты лендингов, многостраничных сайтов, интернет-магазинов, освоите навыки создания рекламных креативов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/dis.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Figma</p>
                            
                            <p class="program__card-text">Освоите интерфейс графического редактора, сможете создавать макеты сайтов и&nbsp;веб-страниц, презентации и&nbsp;рассылки, применять визуальные элементы, работать с&nbsp;изображениями и&nbsp;плагинами.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/adobe.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Adobe Illustrator</p>
                            
                            <p class="program__card-text">Вы&nbsp;научитесь использовать разные инструменты Adobe Illustrator. Сможете быстро принимать решения и&nbsp;выполнять свои дизайн-проекты на&nbsp;высоком уровне.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/shrift.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Шрифт и&nbsp;леттеринг</p>
                            
                            <p class="program__card-text">Научитесь создавать уникальные шрифты и&nbsp;рисовать иллюстрации с&nbsp;помощью слов и&nbsp;линий, а&nbsp;также создавать графические элементы айдентики брендов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/scetch.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Скетчинг</p>
                            
                            <p class="program__card-text">Освоите редакторы, научитесь быстро создавать графические элементы, зарисовки и&nbsp;начнете развиваться в&nbsp;digital-сфере как дизайнер.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/info.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Инфографика</p>
                            
                            <p class="program__card-text">Научитесь оформлять неструктурированную информацию в&nbsp;интересном формате, который облегчает восприятие большого объема данных.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/adobe.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Adobe Photoshop для дизайнеров</p>
                            
                            <p class="program__card-text">Научитесь создавать любые графические элементы в&nbsp;программе Adobe Photoshop, например, логотипы, 3D-модели, макеты веб-сайтов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/type.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Типографика и&nbsp;дизайн многостраничных изданий</p>
                            
                            <p class="program__card-text">Изучите основы композиции, графические редакторы и сможете заниматься версткой и дизайном различных изданий.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/dis.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Web-дизайн с&nbsp;0&nbsp;до&nbsp;PRO</p>
                            
                            <p class="program__card-text">Научитесь разрабатывать прототипы и&nbsp;дизайн-макеты сайтов, адаптировать их&nbsp;под любые устройства, визуально оформлять страницы и&nbsp;занматься версткой.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>5&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ui.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Графический дизайн с&nbsp;0&nbsp;до&nbsp;PRO</p>
                            
                            <p class="program__card-text">Получите фундаментальные знания по&nbsp;графическому дизайну, освоите основные инструменты для создания элементов графического дизайна и&nbsp;научитесь разрабатывать коммерческие дизайн-проекты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>5&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/designerpro.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>UX-дизайн с 0 до PRO</p>
                            
                            <p class="program__card-text">Научитесь проводить UX-исследования, интерпретировать и&nbsp;анализировать их&nbsp;результаты, чтобы разрабатывать UX-прототипы сайтов и&nbsp;мобильных приложений.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/scetch.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>ArchiСad с&nbsp;0&nbsp;до&nbsp;PRO</p>
                            
                            <p class="program__card-text">Освоите разработку рабочей документации по&nbsp;жилому помещению, научитесь создавать чертежи, планы и&nbsp;развертки, необходимые для реализации дизайн-проекта.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>1&nbsp;месяц</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ui.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Моушн-дизайн в Adobe After Effects</p>
                            
                            <p class="program__card-text">Освоите Adobe After Effects и&nbsp;научитесь создавать анимационную графику и&nbsp;GIF, рендерить и&nbsp;экспортировать проекты, работать с&nbsp;текстом и&nbsp;анимировать его</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/designerpro.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Визуализация интерьеров в 3D Max</p>
                            
                            <p class="program__card-text">Освоите программу 3Ds MAX и&nbsp;научитесь подготавливать чертежи, создавать и&nbsp;рендерить 3D-модели будущего интерьера, а&nbsp;также работать в&nbsp;Photoshop и&nbsp;Corona Render</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_profession">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">Дизайн</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/graf.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Графический дизайнер </p>
                            
                            <p class="program__card-text">Вы&nbsp;освоите все базовые инструменты для создания графических элементов любой сложности и&nbsp;сможете самостоятельно разрабатывать визуальную айдентику бренда.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webd.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Веб-дизайн </p>
                            
                            <p class="program__card-text">Научитесь создавать дизайн для сайтов, веб-страниц и&nbsp;различных приложений, а&nbsp;также работать с&nbsp;типографикой и&nbsp;разрабатывать логическую структуру сайтов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/diz.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Цифровой дизайнер</p>
                            
                            <p class="program__card-text">Научитесь создавать дизайн цифровых продуктов, продумывать айдентику, фирменный стиль и&nbsp;рекламные креативы, применять в&nbsp;работе инструменты разных графических редакторов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/disigninterier.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Дизайнер интерьеров</p>
                            
                            <p class="program__card-text">Научитесь разрабатывать дизайн-проекты любой сложности, подбирать материалы составлять техническую документацию и&nbsp;контролировать реализацию проекта подрядчиками.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webd.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>UX/UI-дизайнер</p>
                            
                            <p class="program__card-text">Научитесь проектировать пользовательские интерфейсы на&nbsp;основе UX-исследований, разрабатывать макеты сайтов и&nbsp;адаптировать проекты под различные платформы</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>8&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="program__item active" data-target="block_course">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">Управление</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/prodan.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Продуктовая аналитика</p>
                            
                            <p class="program__card-text">Научитесь проводить анализ конкурентной среды и&nbsp;рынка digital-продуктов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/b2b.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Развитие B2B-продаж</p>
                            
                            <p class="program__card-text">Научитесь правильно позиционировать свою компанию перед клиентами на&nbsp;рынке, выстраивать стратегию и&nbsp;алгоритм продаж, а&nbsp;также контролировать циклы продаж и&nbsp;правильно вести CRM-системы.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/fundraiser.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Fundraiser</p>
                            
                            <p class="program__card-text">Научитесь разрабатывать привлекательные для спонсоров проекты, создавать коммерческие предложения и&nbsp;презентации, а&nbsp;также коммуницировать с&nbsp;потенциальными инвесторами.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/crypto.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Как вывести бизнес на рынок цифровых активов и криптовалют?</p>
                            
                            <p class="program__card-text">Научитесь принципам работы рынка блокчейн и&nbsp;криптовалют, научитесь находить применение блокчейн-технологиям в&nbsp;своем бизнесе, а&nbsp;также составлять пошаговый план внедрения блокчейна в&nbsp;бизнес.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_profession">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">Управление</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/otdel.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Руководитель отдела логистики</p>
                            
                            <p class="program__card-text">Научитесь планировать структуру и&nbsp;содержание логистических процессов компании, а&nbsp;также грамотно выстраивать работу всего отдела.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ryk.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Руководитель отдела маркетинга</p>
                            
                            <p class="program__card-text">Вы&nbsp;научитесь проводить маркетинговые исследования для изучения товарного рынка.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mang.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Менеджер по&nbsp;развитию</p>
                            
                            <p class="program__card-text">Научитесь организовывать бизнес-процессы и&nbsp;эффективно управлять коллективом сотрудников.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ryk2.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Руководитель проекта</p>
                            
                            <p class="program__card-text">Научитесь реализовывать любой проект от&nbsp;идеи до&nbsp;финального результата и&nbsp;эффективно управлять командой.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/inven.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Менеджер по&nbsp;инвестициям</p>
                            
                            <p class="program__card-text">Научитесь производить подбор выгодных объектов инвестирования, а&nbsp;также формировать инвестиционный портфель и&nbsp;грамотно управлять финансами.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/fin.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Финансовый менеджер</p>
                            
                            <p class="program__card-text">Научитесь грамотно управлять финансами и&nbsp;анализировать инвестиционные риски.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/oper.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Операционный менеджер</p>
                            
                            <p class="program__card-text">Научитесь планировать и&nbsp;управлять проектом оптимизации бизнес-процессов и&nbsp;измерять эффективность управленческой деятельности.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/buy.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Менеджер по&nbsp;продажам</p>
                            
                            <p class="program__card-text">Научитесь выстраивать эффективную систему общения с&nbsp;клиентом и&nbsp;выводить компанию на&nbsp;высокие показатели прибыли.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/hr.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Руководитель отдела&nbsp;HR</p>
                            
                            <p class="program__card-text">Научитесь принимать кадровые решения с&nbsp;учетом стратегии развития компании и&nbsp;грамотно управлять всем отделом кадров.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ryk3.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Руководитель отдела продаж</p>
                            
                            <p class="program__card-text">Научитесь грамотно выстраивать работу в&nbsp;команде, планировать организационную структуру отдела продаж и&nbsp;доводить компанию до&nbsp;максимальных показателей прибыли.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/prodan.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Продуктовый аналитик</p>
                            
                            <p class="program__card-text">Научитесь проводить исследования и&nbsp;выводить продукты на&nbsp;рынки, сможете решать задачи бизнеса с&nbsp;помощью аналитики.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/productmanager.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Product-менеджер</p>
                            
                            <p class="program__card-text">Научитесь создавать, улучшать и&nbsp;продвигать продукты компаний на&nbsp;рынке, анализировать конкурентов и&nbsp;потребителей и&nbsp;формировать стратегию развития продукта.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="program__item active" data-target="block_course">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">E-commerce</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/prodan.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Excel для эффективной работы</p>
                            
                            <p class="program__card-text">Изучите интерфейс программы Microsoft Excel, научитесь делать графики и спарклайны, создавать сводные таблицы, а также подключаться к источникам данных.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mark.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Как продавать на&nbsp;маркетплейсах</p>
                            
                            <p class="program__card-text">Научитесь анализировать спрос и&nbsp;деятельность конкурентов, а&nbsp;также изучите все аспекты продажи своего товара на&nbsp;маркетплейсах.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Запуск интернет-магазина с&nbsp;нуля до&nbsp;прибыли</p>
                            
                            <p class="program__card-text">Научитесь запускать интернет-магазин через специализированные сервисы и&nbsp;настраивать таргетированную рекламу для своего бизнеса.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/texn.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Торговый бизнес в&nbsp;e-commerce</p>
                            
                            <p class="program__card-text">Научитесь организовывать торговый бизнес: искать поставщиков, настраивать рекламу и работать с контентом.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/vkmag.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Как запустить интернет-магазин во&nbsp;ВКонтакте</p>
                            
                            <p class="program__card-text">Узнаете, как реализовывать продажу товаров и&nbsp;услуг через интернет-магазин во&nbsp;ВКонтакте, научитесь разрабатывать стратегии по&nbsp;продвижению аккаунта и&nbsp;анализировать эффективность, оформлять контент и&nbsp;коммуницировать с&nbsp;подписчиками.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/cripto.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Как устроена криптовалюта</p>
                            
                            <p class="program__card-text">Познакомитесь с&nbsp;ключевыми терминами и&nbsp;концепциями криптовалюты и&nbsp;блокчейна, научитесь работать с&nbsp;криптовалютными кошельками и&nbsp;биржами, а&nbsp;также внедрять криптовалюту в&nbsp;бизнес.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/fashion.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Продвижение Fashion-бренда на&nbsp;маркетплейсах</p>
                            
                            <p class="program__card-text">Научитесь продвигать бренды fashion-категории на&nbsp;известных маркетплейсах, управлять ассортиментом, оформлять карточки товаров и&nbsp;составлять отчетность, чтобы увеличить количество продаж.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/system.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Внедрение ERP-системы в E-commerce</p>
                            
                            <p class="program__card-text">Узнаете, как устроены ERP-системы, какие бизнес-процессы и как можно оптимизировать с их помощью, научитесь внедрять ERP-систему в бизнес.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_profession">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">E-commerce</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mark.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Менеджер по&nbsp;работе с&nbsp;маркетплейсами</p>
                            
                            <p class="program__card-text">Научитесь оптимизировать и&nbsp;выстраивать работу по&nbsp;продаже товаров на&nbsp;маркетплейсах, а&nbsp;также настраивать рекламу и&nbsp;анализировать результаты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ryk2.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Руководитель интернет-магазина</p>
                            
                            <p class="program__card-text">Научитесь выстраивать все организационные процессы торговли и&nbsp;выведете бизнес к&nbsp;максимальной прибыли.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/prof1.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>E-commerce директор</p>
                            
                            <p class="program__card-text">Научитесь управлять маркетингом и продажами, планировать рекламные кампании, выстраивать стратегию продвижения. Поймете, как планировать прибыль и анализировать расходы.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/intmark.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Интернет-маркетолог в&nbsp;E-commerce</p>
                            
                            <p class="program__card-text">Получите знания и&nbsp;навыки по&nbsp;продвижению товаров и&nbsp;услуг бизнеса в&nbsp;интернете, научитесь разрабатывать маркетинговую стратегию, управлять каналами продаж, а&nbsp;также настраивать рекламу и&nbsp;вести CRM-менеджмент.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/prof1.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Руководитель направления E-commerce</p>
                            
                            <p class="program__card-text">Сформируете навык управления рабочими процессами интернет-магазина, узнаете, как анализировать финансовые показатели, контролировать работу клиентского отдела и&nbsp;маркетинга.</p>
                            
                            <p class="program__card-description">Срок обучения - 9&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="program__item active" data-target="block_course">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title program__item-title-dnone">Интернет-маркетинг</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/weban.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Веб-аналитика</p>
                            
                            <p class="program__card-text">Научитесь собирать и&nbsp;анализировать информацию о&nbsp;посетителях сайта и&nbsp;их&nbsp;поведении для увеличения эффективности веб-платформы.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/cop.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Копирайтинг</p>
                            
                            <p class="program__card-text">Научитесь писать тексты, которые будут отвечать запросам целевой аудитории и&nbsp;повышать лояльность к&nbsp;бренду.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/vk.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Продвижение во&nbsp;&laquo;ВКонтакте&raquo;</p>
                            
                            <p class="program__card-text">Научитесь управлять рекламным кабинетом создавать эффективные рекламные кампании в&nbsp;социальной сети &laquo;ВКонтакте&raquo;.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/smm.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>SMM-маркетинг </p>
                            
                            <p class="program__card-text">Научитесь прописывать и&nbsp;реализовывать стратегии продвижения в&nbsp;социальных сетях для коммерческих аккаунтов, а&nbsp;также анализировать их&nbsp;результаты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Интернет-маркетинг</p>
                            
                            <p class="program__card-text">Научитесь продвигать бренды в&nbsp;интернет-пространстве, используя разнообразные каналы рекламной коммуникации.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/targ.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Таргетированная реклама</p>
                            
                            <p class="program__card-text">Научитесь грамотно настраивать рекламу в&nbsp;соцсетях, создавать продающие креативы и&nbsp;анализировать результаты кампании.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/context.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Контекстная реклама</p>
                            
                            <p class="program__card-text">Научитесь формировать уникальные торговые предложения, используя маркетинговые стратегии, настраивать и&nbsp;запускать контекстную рекламу, а&nbsp;также анализировать эффективность рекламных кампаний.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/fil.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Воронки продаж и чат-боты</p>
                            
                            <p class="program__card-text">Научитесь выстраивать стратегию продвижения бренда с&nbsp;помощью инструментов анализа потенциальных потребителей, увеличивать продажи и&nbsp;взаимодействовать с&nbsp;клиентами, используя чат-боты.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/tg.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Продвижение в Telegram Messenger</p>
                            
                            <p class="program__card-text">Научитесь создавать и оформлять коммерческий канал и чат-ботов в Telegram, составлять контент-план, писать тексты для постов и запускать рекламу.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2 месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/python.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Python для анализа данных</p>
                            
                            <p class="program__card-text">Приобретете знания и&nbsp;навыки для работы с&nbsp;базами данных в&nbsp;Python, научитесь работать с&nbsp;большими объемами данных и&nbsp;автоматизировать их&nbsp;сбор и&nbsp;анализ.
                        </p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2 месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/context.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Продвижение в&nbsp;TikTok</p>
                            
                            <p class="program__card-text">Научитесь продвигать коммерческий проект через вовлекающий контент в&nbsp;соцсети TikTok, создавать и&nbsp;грамотно оформлять аккаунт бренда, снимать качественные видео.
                        </p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2 месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Комьюнити-менеджмент</p>
                            
                            <p class="program__card-text">Научитесь создавать сообщества единомышленников вокруг бренда, повышать лояльности клиентов, привлекать новую целевую аудиторию и&nbsp;достигать другие цели бизнеса.
                        </p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2 месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/weban.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Цифровые технологии в&nbsp;бизнесе</p>
                            
                            <p class="program__card-text">Научитесь оптимизировать бизнес-процессы через внедрение цифровых технологий и&nbsp;автоматизацию с&nbsp;помощью инструментов для увеличения эффективности работы и&nbsp;дохода компании.
                        </p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2 месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Influence-маркетинг</p>
                            
                            <p class="program__card-text">Научитесь продвигать коммерческий проект через лидеров мнений, находить блогеров с&nbsp;необходимой целевой аудиторией и&nbsp;повышать эффективность рекламной интеграции.
                        </p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2 месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_profession">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title program__item-title-dnone">Интернет-маркетинг</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/smm.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>SMM-маркетолог</p>
                            
                            <p class="program__card-text">Научитесь прописывать самые продающие стратегии продвижения. Будете знать, как правильно общаться с&nbsp;целевой аудиторией и&nbsp;оформлять аккаунты в&nbsp;социальных сетях.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/cop.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Копирайтер</p>
                            
                            <p class="program__card-text">Научитесь прописывать tone of&nbsp;voice, писать продающие и&nbsp;интересные тексты, выстраивать успешную коммуникацию с&nbsp;целевой аудиторией бренда с&nbsp;помощью текстов.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/targ.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Таргетолог</p>
                            
                            <p class="program__card-text">Научитесь настраивать эффективную рекламу в&nbsp;социальных сетях, создавать креативы и&nbsp;анализировать рекламные кампании.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/seo.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>SEO-специалист</p>
                            
                            <p class="program__card-text">Научитесь оптимизировать работу сайта, корректировать контентное наполнение и&nbsp;выводить его на&nbsp;первые строчки поисковиков.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Интернет-маркетинг</p>
                            
                            <p class="program__card-text">Научитесь эффективно использовать различные рекламные каналы для успешного продвижения бренда, привлечения новых клиентов и&nbsp;повышения лояльности аудитории.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Интернет-маркетинг PRO</p>
                            
                            <p class="program__card-text">Научитесь создавать сайты, повышать юзабилити и&nbsp;настраивать SEO-оптимизацию. Узнаете, как собирать базу контактов, писать продающие тексты и&nbsp;настраивать рассылку писем. Запустите таргетированную и&nbsp;контекстную рекламу.</p>
                            
                            <p class="program__card-description">Срок обучения - 9&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/vkmanager.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Менеджер по&nbsp;интернет-маркетингу во&nbsp;Вконтакте</p>
                            
                            <p class="program__card-text">Научитесь создавать и&nbsp;оформлять коммерческий аккаунт во&nbsp;ВКонтакте для бизнеса, формировать стратегию продвижения и&nbsp;проводить рекламные кампании.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/brandmanager.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Бренд-менеджер</p>
                            
                            <p class="program__card-text">Научитесь разрабатывать брендбук и&nbsp;создавать фирменный бренд компании, а&nbsp;также продвигать его на&nbsp;рынке, повышая уровень узнаваемости и&nbsp;лояльности у&nbsp;потребителей.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/contentmanager.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Контент-менеджер</p>
                            
                            <p class="program__card-text">Научитесь создавать и&nbsp;оформлять контент различного формата для продвижения бизнеса, вести блоги, применять навыки копирайтинга, работать с&nbsp;фото- и&nbsp;видеоконтентом.</p>
                            
                            <p class="program__card-description">Срок обучения - 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_college">
                    <div class="program__item-main">
                        
                        <p class="program__item-text">Колледж&nbsp;&mdash; это средний уровень профессионального образования, который даёт возможность стать дипломированным специалистом на&nbsp;базе 9&nbsp;классов.</p>
                        
                    </div>
                    <div class="program__item-title program__item-title-dnone">Интернет-маркетинг</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/gem.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайн и&nbsp;разработка мобильных игр</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;года 10&nbsp;месяцев (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Интернет-маркетинг</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года 10 месяцев (очная форма) <br> 3 года 10 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/web.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Веб-разработка</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 10&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/elcom.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Электронная коммерция</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;года 10&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/game.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайн и&nbsp;дизайн игр</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 10&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/gem.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайн и&nbsp;разработка игр</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 10&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/project.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Право и организация социального обеспечения</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года 10 месяцев (очная форма) <br> 3 года 10 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/inf.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Информационные системы и программирование</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 3 года 10 месяцев (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/sport.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Спортивный менеджмент</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года 10 месяцев (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/med1.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Лечебное дело</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 3 года 10 месяцев (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/farm.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Фармация</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года 10 месяцев (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_college">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_undergraduate">
                    <div class="program__item-main">
                        
                        <p class="program__item-text">Бакалавриат&nbsp;&mdash; первая ступень высшего образования и&nbsp;вашего становления как профессионала.</p>
                        
                    </div>
                    <div class="program__item-title program__item-title-dnone">Интернет-маркетинг</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Интернет-маркетинг</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4 года 6 месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/web.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Веб-разработка</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webd.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Веб-дизайн</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/elcom.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Электронная коммерция</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/game.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайн и&nbsp;дизайн игр</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/gem.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайн и&nbsp;разработка игр</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;года 6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/project.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Гражданское право</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>
                                4 года (очная форма)<br>
                                4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/project.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Уголовное право</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>
                                4 года (очная форма)<br>
                                4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/project.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Международные организации  и  международное сотрудничество</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>
                                4 года (очная форма)<br>
                                4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/bez.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Разработка, сопровождение и обеспечение безопасности</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/ril.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Разработка компьютерных игр, дополненной и виртуальной реальности</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/pri.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Разработка интернет-приложений</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/pri1.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Прикладная информатика в экономике</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/biz.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>ИТ-менеджмент в бизнесе</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/men.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Спортивный менеджмент</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/kul.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Физическая культура</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/obs.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Общий менеджмент</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/gos.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Государственная муниципальная служба</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года (очная форма) <br> 4 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/log.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Логистика</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 4 года 6 месяцев (очная форма) <br> 3 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/lee.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Лечебное дело</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 6 лет (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_undergraduate">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_magistracy">
                    <div class="program__item-main">
                        
                        <p class="program__item-text">Магистратура&nbsp;&mdash; вторая ступень высшего образования. Вы&nbsp;сможете углубить ваши знания по&nbsp;полученной профессии или получить еще одну квалификацию.</p>
                        
                    </div>
                    <div class="program__item-title program__item-title-dnone">Интернет-маркетинг</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/marketing.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Интернет-маркетинг</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;года 5&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/project.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Магистр уголовного, гражданского и административного судопроизводства</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>
                                2 года (очная форма) <br>
                                2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/project.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Цифровое право</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>
                                2 года (очная форма) <br>
                                2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/project.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Корпоративный юрист</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>
                                2 года (очная форма) <br>
                                2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag1.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Управление цифровыми проектами, продуктами и инновациями</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма) <br> 2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag2.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Управление информационными технологиями в организации</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма) <br> 2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag3.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Управление спортивной организацией</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag4.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Спортивный менеджмент</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag5.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Система государственного и муниципального управления</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма) <br> 2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag6.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Project management</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag7.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Стратегический менеджмент</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма) <br> 2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mag8.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>HR-менеджмент</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br> 2 года (очная форма) <br> 2 года 6 месяцев (заочная форма)</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_magistracy">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="program__item active" data-target="block_course">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">Геймдизайн</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mob.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Мобильная игра за&nbsp;24&nbsp;часа</p>
                            
                            <p class="program__card-text">Овладеете основными навыками разработчика и&nbsp;самостоятельно начнете создавать свои первые мобильные игры.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webc.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Основы C#</p>
                            
                            <p class="program__card-text">Изучите базу языка программирования С# и&nbsp;сможете начать развиваться как специалист по&nbsp;созданию игр.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/unit.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Unity-разработчик Lite</p>
                            
                            <p class="program__card-text">Познакомитесь с основами геймдизайна, научитесь программировать на языке C#, освоите работу в игровом движке Unity и создадите собственную серию игр для смартфонов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>5&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/lite.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Дизайн персонажей Lite</p>
                            
                            <p class="program__card-text">Научитесь создавать своего персонажа, передавать его характер. Освоите разные этапы разработки с использованием различных техник и стилей.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/scengame.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Сценарист игр</p>
                            
                            <p class="program__card-text">Научитесь продумывать место действия и персонажей с их характерами, прописывать диалоги и сюжетную линию каждого героя, применять техники влияния на психологию игрока, прорабатывать объем и технические ограничения сценария.</p>
                            
                            <p class="program__card-description">Срок обучения - <br>3&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/abl.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Sound-дизайнер Lite</p>
                            
                            <p class="program__card-text">Освоите азы звукорежиссуры, научитесь создавать озвучку игровых продуктов и&nbsp;персонажей, прописывать звуковые эффекты для окружения в&nbsp;игре и&nbsp;работать в&nbsp;DAW-системах.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/3d.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Моделирование игрового оружия</p>
                            
                            <p class="program__card-text">Научитесь создавать игровое оружие и&nbsp;пропсы, с&nbsp;нуля прорисовывать модели, текстурировать и&nbsp;запекать&nbsp;их.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mod.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Основы 3D-моделирования</p>
                            
                            <p class="program__card-text">Научитесь понимать механику модели, как правильно построить силуэт. Создавать набросок 3D-модели, который будет передавать характер и формы будущей модели.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/abl.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Ableton Live и&nbsp;озвучка игровых роликов</p>
                            
                            <p class="program__card-text">Освоите программу Ableton Live, овладеете основными инструментами звукорежиссуры и&nbsp;сможете самостоятельно создавать звуковые дорожки.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/games.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Разработчик настольных игр PRO</p>
                            
                            <p class="program__card-text">Вы освоите базовые навыки создания настольных игр и сможете стать автором игровых продуктов. Изучите теорию игр, этапы разработки и принципы написания правил. Узнаете о том, где и когда искать издателя, как демонстрировать свою игру и юридически правильно заключить договор с заказчиком.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>5&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/oc.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Основы С++</p>
                            
                            <p class="program__card-text">Изучите основы синтаксиса языка программирования C++ для создания игр и приложений, операционных и поисковых систем и разработки браузеров.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>2&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/games.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайн с&nbsp;0&nbsp;до&nbsp;PRO</p>
                            
                            <p class="program__card-text">Научитесь самостоятельно разрабатывать и&nbsp;анализировать методы создания и&nbsp;продвижения игрового продукта, выстраивать его баланс и&nbsp;монетизацию.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mob.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Мобильные игры с&nbsp;0&nbsp;до&nbsp;PRO</p>
                            
                            <p class="program__card-text">Научитесь создавать игровые продукты, использовать язык C#, а&nbsp;также работать с&nbsp;формами и&nbsp;объектами в&nbsp;игровом движке Unity.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>4&nbsp;месяца</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="program__item " data-target="block_profession">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">Геймдизайн</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/mob.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Разработчик мобильных игр на&nbsp;Unity</p>
                            
                            <p class="program__card-text">Погрузитесь в&nbsp;язык программирования C#, окунитесь в&nbsp;игровой движок Unity и&nbsp;создайте 3&nbsp;своих независимых продукта с&nbsp;возможностью продвижения на&nbsp;всех площадках.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/bug.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайнер</p>
                            
                            <p class="program__card-text">Научитесь работать с&nbsp;прототипированием персонажей, создавать структуру и&nbsp;динамику игры и&nbsp;управлять процессом её&nbsp;производства.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/bug.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайнер и&nbsp;разработчик игр</p>
                            
                            <p class="program__card-text">Освоите все необходимые навыки для геймдизайна и&nbsp;разработки мобильных игр и&nbsp;сможете сочетать в&nbsp;себе функционал сразу двух специалистов.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/herodesigner.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Дизайнер персонажей</p>
                            
                            <p class="program__card-text">Освоите азы трехмерного моделирования, научитесь работать с&nbsp;органическими и&nbsp;неорганическими моделями, а&nbsp;также стилизовать и&nbsp;анимировать игрового персонажа.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>12&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/bug2.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Геймдизайнер и&nbsp;3D-моделлер</p>
                            
                            <p class="program__card-text">Освоите необходимые навыки для работы геймдизайнером и&nbsp;сможете все свои идеи реализовать в&nbsp;трехмерном пространстве.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/webc.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Разработчик на&nbsp;C#</p>
                            
                            <p class="program__card-text">Изучите язык программирования С# и&nbsp;сможете заниматься созданием игр и&nbsp;активно развиваться в&nbsp;игровой индустрии.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/3d.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>3D-моделлер</p>
                            
                            <p class="program__card-text">Научитесь создавать графические элементы в&nbsp;трехмерном пространстве и&nbsp;работать с&nbsp;анимацией.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/sound.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Саунд-дизайнер</p>
                            
                            <p class="program__card-text">Изучите звуковую режиссуру и&nbsp;сможете создавать звуковое оформление в&nbsp;сфере кино, видеоигр, рекламы, а&nbsp;также записывать и&nbsp;обрабатывать голосовую озвучку персонажей.</p>
                            
                            <p class="program__card-description">Срок обучения&nbsp;&mdash; <br>6&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_profession">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="program__item active" data-target="block_course">
                    <div class="program__item-main">
                        
                    </div>
                    <div class="program__item-title ">Театральная Школа</div>
                    <div class="program__item-slider">
                        
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/theater.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>Новая Театральная Школа</p>
                            
                            <p class="program__card-text">Приобретете навык выступления перед большой аудиторией без страха и&nbsp;стресса, изучите техники успешного выступления и&nbsp;взаимодействия с&nbsp;публикой, обретете уверенность в&nbsp;себе, избавитесь от&nbsp;стеснительности.</p>
                            
                            <p class="program__card-description">Формат – очный <br> Срок обучения&nbsp;&mdash; <br>5&nbsp;месяцев</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="block_course">Узнать больше</a>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</section>
			<section class="services" id="services">
    <div class="container">
        <div class="services__box">
            <div class="services__content">
                <h2 class="services__title title">Не&nbsp;знаете, с&nbsp;чего начать? Подберите профессию</h2>
                <p class="services__text">Поможем определиться с&nbsp;выбором и&nbsp;подберем подходящую программу обучения</p>
                <a href="#popup-reg" class="button services__button" data-fancybox>Подобрать программу</a>
            </div>
            <picture class="services__img">
                <source media="(max-width: 1199px)" srcset="img/services/services-tab.png">
                <img data-src="img/services/services.png" alt="" class="lazy">
            </picture>
        </div>
    </div>
</section>
			<section class="mission" id="mission">
    <div class="container">
        <div class="mission__box">
            <div class="mission__content">
                <h2 class="mission__title title">Миссия Университета<br> &laquo;Синергия&raquo;</h2>
                <div class="mission__text">
                    <p>Наша миссия&nbsp;&mdash; синергия многолетних академических традиций и&nbsp;современных образовательных технологий.</p>
                    <p>Уже более 30&nbsp;лет мы&nbsp;готовим профессионалов, обладающих набором практических знаний и&nbsp;навыков как для запуска и&nbsp;развития собственного бизнеса, так и&nbsp;для работы на&nbsp;управленческих должностях в&nbsp;крупных компаниях.</p>
                    <p>Наша цель&nbsp;&mdash; сделать качественное образование доступным каждому.</p>
                </div>
            </div>
            <div class="mission__img">
                <img data-src="img/mission/mission.png" alt="" class="lazy">
            </div>
        </div>
    </div>
</section>
			<section class="career" id="career">
    <div class="container">
        <div class="career__box">
            <h2 class="career__title title">Центр карьеры</h2>
            <h2 class="career__subtitle">Центр карьеры помогает выпускникам Synergy University с&nbsp;поиском работы и&nbsp;трудоустройством. Мы&nbsp;предлагаем:</h2>
            <div class="career__content">
                <div class="career__content-item">
                    <div>Составление резюме</div>
                    <p>Мы&nbsp;гарантируем качественное составление резюме. Расскажем, как правильно демонстрировать проекты. Научим наполнять портфолио реальными кейсами.</p>
                </div>
                <div class="career__content-item">
                    <div>Помощь в&nbsp;подготовке к&nbsp;собеседованию</div>
                    <p>Мы&nbsp;предоставляем квалифицированную помощь в&nbsp;подготовке к&nbsp;собеседованию. Вы&nbsp;пройдете тестовое собеседование с&nbsp;экспертами, разберете ошибки и&nbsp;прокачаете soft skills.</p>
                </div>
                <div class="career__content-item">
                    <div>Доступ к&nbsp;вакансиям компаний-партнеров</div>
                    <p>Мы&nbsp;регулярно обновляем подборку вакансий компаний.</p>
                </div>
                <div class="career__content-item">
                    <div></div>
                    <p></p>
                </div>
                <!-- <div class="career__content-item">
                    <div>Поддержка на&nbsp;протяжении адаптационного периода</div>
                    <p>Мы&nbsp;не&nbsp;бросаем наших выпускников сразу после трудоустройства, а&nbsp;продолжаем вести их&nbsp;и&nbsp;оказывать поддержку на&nbsp;протяжении всего адаптационного периода на&nbsp;новом месте работы.</p>
                </div> -->
            </div>
        </div>
        <picture class="career__img-tab">
            <source media="(max-width: 767px)" srcset="img/career/woman-mob.png">
            <img data-src="img/career/woman-tab.png" alt="" class="lazy">
        </picture>
    </div>
    <img data-src="img/career/woman.png" alt="" class="lazy career__img">
</section>
			<section class="education" id="education">
    <div class="container">
        <h2 class="education__title title">Как проходит обучение?</h2>
        <div class="education__box">
            <div class="education__item">
                <div class="education__item-number">
                    <div></div>
                    <span>1</span>
                </div>
                <div>
                    <h3>Изучение темы</h3>
                    <p>Обучение проходит на&nbsp;специальной онлайн-платформе, где вы&nbsp;просматриваете видеоролики, а&nbsp;также материалы по&nbsp;каждой из&nbsp;предложенных тем</p>
                </div>
            </div>
            <div class="education__item">
                <div class="education__item-number">
                    <div></div>
                    <span>2</span>
                </div>
                <div>
                    <h3>Домашние задания</h3>
                    <p>Выполняете практические задания по&nbsp;пройденной теме, из&nbsp;которых формируется ваше портфолио</p>
                </div>
            </div>
            <div class="education__item">
                <div class="education__item-number">
                    <div></div>
                    <span>3</span>
                </div>
                <div>
                    <h3>Обратная связь</h3>
                    <p>Получаете обратную связь от&nbsp;тьюторов по&nbsp;итогам выполнения домашних заданий</p>
                </div>
            </div>
            <div class="education__item">
                <div class="education__item-number">
                    <div></div>
                    <span>4</span>
                </div>
                <div>
                    <h3>Защита выпускного проекта</h3>
                    <p>Пишете и&nbsp;защищаете итоговую выпускную работу</p>
                </div>
            </div>
        </div>
    </div>
</section>
			<section class="document" id="document">
    <div class="container">
        <div class="document__box">
            <div class="document__content">
                <h2 class="document__title title">Выпускные документы</h2>
                <div class="document__subtitle">По&nbsp;окончании обучения выпускники получают один из&nbsp;выпускных документов:</div>
                <ul class="document__list">
                    <li>Диплом о высшем образовании</li>
                    <li>Диплом о&nbsp;профессиональной переподготовке</li>
                    <li>Сертификат об&nbsp;успешном прохождении обучения</li>
                </ul>
            </div>
            <div class="document__img">
                <img data-src="img/document/document.png" alt="" class="lazy">
            </div>
        </div>
    </div>
</section>
			<section class="reviews" id="reviews">
    <div class="container">

        <div class="reviews__content current" id="tab-1">
            <p>Я&nbsp;выбрал для себя курсы таргетолога, потому что хотел быстро научиться настраивать рекламу в&nbsp;соцсетях. Мне это нужно было для своего небольшого бизнеса, чтобы минимизировать затраты на&nbsp;продвижение. Теперь я&nbsp;могу самостоятельно работать в&nbsp;рекламном кабинете. Это очень выручает!</p>
        </div>
        <div class="reviews__content" id="tab-2">
            <p>Мне было учиться достаточно просто, это даже занимало не&nbsp;так много времени, как я&nbsp;думала. Делала все&nbsp;ДЗ, в&nbsp;конце&nbsp;&mdash; большой проект. У&nbsp;меня еще во&nbsp;время обучения появилось портфолио, которое я&nbsp;сейчас дополняю своими кейсами. Работу по&nbsp;новой профессии тоже нашла быстро&nbsp;&mdash; работаю графическим дизайнером.</p>
        </div>
        <div class="reviews__content" id="tab-3">
            <p>Я&nbsp;сама изучала SMM, когда это еще не&nbsp;было так популярно. Но&nbsp;понимала, что мои знания, которые я&nbsp;сама наработала на&nbsp;практике, нужно было в&nbsp;некоторых местах подкрепить теорией. Поэтому я&nbsp;выбрала курс SMM-маркетолога. В&nbsp;целом было полезно. Я&nbsp;и&nbsp;так много знала, но&nbsp;некоторые актуальные тренды, на&nbsp;которых часто делают акцент спикеры, помогли мне в текущих проектах.</p>
        </div>
        <div class="reviews__content" id="tab-4">
            <p>Учусь на&nbsp;гуманитарном факультете, но&nbsp;всегда разбирался в&nbsp;компьютерах, поэтому захотел для работы на&nbsp;фрилансе предметно изучить какой-нибудь язык. Остановился на&nbsp;РНР. Обучение прошло нормально, учился 6&nbsp;месяцев, в&nbsp;конце защитил проект. В&nbsp;целом сейчас обладаю достаточными знаниями, чтобы начинать работать.</p>
        </div>
        <div class="reviews__content" id="tab-5">
            <p>Я&nbsp;была в&nbsp;декрете, хотела не&nbsp;терять времени зря, освоить новые навыки, а&nbsp;получилось, что освоила целую профессию! Теперь я&nbsp;копирайтер. Учиться было не&nbsp;сложно, даже учитывая ограниченное свободное время. Слушала лекции, делала домашние задания. Сейчас уже работаю как фрилансер, в&nbsp;дальнейшем планирую развиваться как SMM-специалист. Но&nbsp;пока работаю только с&nbsp;текстами.</p>
        </div>
        <ul class="reviews__list reviews__slider">
            <li class="reviews__item current" data-tab="#tab-1">
                <div class="reviews__item-content">
                    <p>Я&nbsp;выбрал для себя курсы таргетолога, потому что хотел быстро научиться настраивать рекламу в&nbsp;соцсетях. Мне это нужно было для своего небольшого бизнеса, чтобы минимизировать затраты на&nbsp;продвижение. Теперь я&nbsp;могу самостоятельно работать в&nbsp;рекламном кабинете. Это очень выручает!</p>
                </div>
                <div>
                    <img src="img/reviews/icon-1.png" alt="">
                    <div class="reviews__item-title">Олег Красильников</div>
                    <div class="reviews__item-subtitle">Курс &laquo;Таргетированная реклама&raquo;</div>
                </div>
            </li>
            <li class="reviews__item" data-tab="#tab-2">
                <div class="reviews__item-content">
                    <p>Мне было учиться достаточно просто, это даже занимало не&nbsp;так много времени, как я&nbsp;думала. Делала все&nbsp;ДЗ, в&nbsp;конце&nbsp;&mdash; большой проект. У&nbsp;меня еще во&nbsp;время обучения появилось портфолио, которое я&nbsp;сейчас дополняю своими кейсами. Работу по&nbsp;новой профессии тоже нашла быстро&nbsp;&mdash; работаю графическим дизайнером.</p>
                </div>
                <div>
                    <img src="img/reviews/icon-2.png" alt="">
                    <div class="reviews__item-title">Анна Артемьева</div>
                    <div class="reviews__item-subtitle">Курс &laquo;Скетчинг&raquo;</div>
                </div>
            </li>
            <li class="reviews__item" data-tab="#tab-3">
                <div class="reviews__item-content">
                    <p>Я&nbsp;сама изучала SMM, когда это еще не&nbsp;было так популярно. Но&nbsp;понимала, что мои знания, которые я&nbsp;сама наработала на&nbsp;практике, нужно было в&nbsp;некоторых местах подкрепить теорией. Поэтому я&nbsp;выбрала курс SMM-маркетолога. В&nbsp;целом было полезно. Я&nbsp;и&nbsp;так много знала, но&nbsp;некоторые актуальные тренды, на&nbsp;которых часто делают акцент спикеры, помогли мне в текущих проектах.</p>
                </div>
                <div>
                    <img src="img/reviews/icon-3.png" alt="">
                    <div class="reviews__item-title">Юлия Ким</div>
                    <div class="reviews__item-subtitle">Курс &laquo;SMM-маркетинг&raquo;</div>
                </div>
            </li>
            <li class="reviews__item" data-tab="#tab-4">
                <div class="reviews__item-content">
                    <p>Учусь на&nbsp;гуманитарном факультете, но&nbsp;всегда разбирался в&nbsp;компьютерах, поэтому захотел для работы на&nbsp;фрилансе предметно изучить какой-нибудь язык. Остановился на&nbsp;РНР. Обучение прошло нормально, учился 6&nbsp;месяцев, в&nbsp;конце защитил проект. В&nbsp;целом сейчас обладаю достаточными знаниями, чтобы начинать работать.</p>
                </div>
                <div>
                    <img src="img/reviews/icon-4.png" alt="">
                    <div class="reviews__item-title">Максим Подрезов</div>
                    <div class="reviews__item-subtitle">Профессия &laquo;РНР-разработчик&raquo;</div>
                </div>
            </li>
            <li class="reviews__item" data-tab="#tab-5">
                <div class="reviews__item-content">
                    <p>Я&nbsp;была в&nbsp;декрете, хотела не&nbsp;терять времени зря, освоить новые навыки, а&nbsp;получилось, что освоила целую профессию! Теперь я&nbsp;копирайтер. Учиться было не&nbsp;сложно, даже учитывая ограниченное свободное время. Слушала лекции, делала домашние задания. Сейчас уже работаю как фрилансер, в&nbsp;дальнейшем планирую развиваться как SMM-специалист. Но&nbsp;пока работаю только с&nbsp;текстами.</p>
                </div>
                <div>
                    <img src="img/reviews/icon-5.png" alt="">
                    <div class="reviews__item-title">Светлана Колесникова</div>
                    <div class="reviews__item-subtitle">Профессия &laquo;Копирайтер&raquo;</div>
                </div>
            </li>
        </ul>
    </div>
</section>
			<section class="synergy" id="synergy">
    <div class="container">
        <h2 class="synergy__title title">Корпоративное обучение от Synergy University</h2>
        <div class="synergy__subtitle">Мы&nbsp;повышаем эффективность сотрудников&nbsp;&mdash; вы&nbsp;ускоряете развитие бизнеса</div>
        <div class="synergy__box">
            <ul class="synergy__content">
                <li>   Мы учтем все особенности компании, специфику работы сотрудников, пригласим спикеров-экспертов по нужному направлению, чтобы разработать оптимальную учебную программу и сформировать курс специально для вас.</li>
                <li>   Вы можете не только обучать у нас своих сотрудников, но и мотивировать их тем, что обучаете их детей. Оставьте заявку, и мы подробно расскажем вам об условиях данной программы.</li>
            </ul>
        </div>
        <div class="synergy__form form-reg">
        
<form action="<?= $action ?>&form=reg&amp;lidforma=Корпоративное обучение" class="form form_horizontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Если вы&nbsp;не&nbsp;нашли&nbsp;то, что вам подойдет, оставьте заявку, и&nbsp;мы&nbsp;разработаем для вас индивидуальную программу обучения любого формата</h3>
        
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Отправить</button>
    </div>
</form>

        </div>
    </div>
</section>
<!-- &land=corp_education -->
			<section class="partner" id="partner">
    <div class="container">
        <h2 class="partner__title title">Наши партнеры</h2>
        <div class="partner__box">
            <div class="partner__item">
                <img data-src="img/partner/icon-1.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-2.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-3.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-4.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-5.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-6.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-7.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-8.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-9.png" alt="" class="lazy">
            </div>
            <div class="partner__item">
                <img data-src="img/partner/icon-10.png" alt="" class="lazy">
            </div>
        </div>
    </div>
</section>
			
			
<section class="form-reg section_1">
    <div class="container">
    
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Получи востребованную профессию</h3>
        
        
        <p class="form__text ">Начни зарабатывать в&nbsp;два раза больше!</p>
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Оставить заявку</button>
    </div>
</form>

    </div>
</section>


 


			
<section class="faq" id="faq">
    <div class="container">
        <h2 class="faq__title title">Часто задаваемые вопросы</h2>
        <ul class="faq__acco">
            
            <li class="faq__acco-item">
                <div class="faq__acco-trigger">
                    <div class="faq__acco-title"><span>Что делать, если у&nbsp;меня проблема или срочный вопрос?</span>
                        <div class="faq__acco-img"><img src="img/faq/theme.svg" alt=""></div>
                    </div>
                </div>
                <p class="faq__acco-text">Весь период обучения вы&nbsp;сможете обращаться за&nbsp;помощью к&nbsp;куратору по&nbsp;организационным вопросам и&nbsp;к&nbsp;тьюторам по&nbsp;вопросам образовательной программы. Мы&nbsp;даем вам поддержку, чтобы учёба была комфортной и&nbsp;эффективной.</p>
            </li>
            
            <li class="faq__acco-item">
                <div class="faq__acco-trigger">
                    <div class="faq__acco-title"><span>Сколько часов в&nbsp;неделю нужно уделять учебе?</span>
                        <div class="faq__acco-img"><img src="img/faq/theme.svg" alt=""></div>
                    </div>
                </div>
                <p class="faq__acco-text">В&nbsp;среднем на&nbsp;обучение уходит порядка 4-5 часов в&nbsp;неделю, что позволит вам совмещать учебу с&nbsp;текущей работой и&nbsp;личными делами.</p>
            </li>
            
            <li class="faq__acco-item">
                <div class="faq__acco-trigger">
                    <div class="faq__acco-title"><span>Вы&nbsp;гарантируете трудоустройство?</span>
                        <div class="faq__acco-img"><img src="img/faq/theme.svg" alt=""></div>
                    </div>
                </div>
                <p class="faq__acco-text">Мы&nbsp;гарантируем содействие в&nbsp;трудоустройстве. В&nbsp;любом деле важны инициативность и&nbsp;усердие, но&nbsp;мы&nbsp;не&nbsp;бросаем своих студентов после обучения! Мы&nbsp;заинтересованы в&nbsp;вашем результате. Вы&nbsp;сможете обратиться за&nbsp;помощью к&nbsp;нашим HR-специалистам из&nbsp;Центра Карьеры. Они помогут вам грамотно составить резюме для работодателя, подготовят к&nbsp;собеседованию на&nbsp;необходимую вакансию. Благодаря этому ваши шансы на&nbsp;трудоустройство значительно возрастут.</p>
            </li>
            
            <li class="faq__acco-item">
                <div class="faq__acco-trigger">
                    <div class="faq__acco-title"><span>Можно&nbsp;ли приобрести обучение в&nbsp;рассрочку?</span>
                        <div class="faq__acco-img"><img src="img/faq/theme.svg" alt=""></div>
                    </div>
                </div>
                <p class="faq__acco-text">Университет &laquo;Синергия&raquo; предлагает образовательный кредит от&nbsp;банков-партнеров. Также на&nbsp;некоторые виды программ действует банковская рассрочка, по&nbsp;условиям которой первый платёж вы&nbsp;вносите через 6&nbsp;месяцев.</p>
            </li>
            
            <li class="faq__acco-item">
                <div class="faq__acco-trigger">
                    <div class="faq__acco-title"><span>Что такое лицензия? Есть&nbsp;ли у&nbsp;вас лицензия? Как долго она действует?</span>
                        <div class="faq__acco-img"><img src="img/faq/theme.svg" alt=""></div>
                    </div>
                </div>
                <p class="faq__acco-text">Образовательная лицензия дает право на&nbsp;ведение образовательной деятельности. Университет &laquo;Синергия&raquo; имеет лицензию, выданную Федеральной службой по&nbsp;надзору в&nbsp;сфере образования и&nbsp;науки &#8470;&nbsp;1015 от&nbsp;02.06.2014 (с&nbsp;приложениями), действующую бессрочно.</p>
            </li>
            
            <li class="faq__acco-item">
                <div class="faq__acco-trigger">
                    <div class="faq__acco-title"><span>Каковы технические требования, предъявляемые к&nbsp;компьютеру?</span>
                        <div class="faq__acco-img"><img src="img/faq/theme.svg" alt=""></div>
                    </div>
                </div>
                <p class="faq__acco-text"><b>Операционная система:</b> Windows 7/8/8.1/10, macOS 10.12 и&nbsp;новее<br>
							<b>Оперативная память:</b> от&nbsp;4&nbsp;ГБ или больше<br>
							<b>Процессор:</b> 2&nbsp;ГГц или мощнее<br>
							<b>Интернет-соединение:</b> от&nbsp;6&nbsp;Мбит/с</p>
            </li>
            
        </ul>
        <a href="#popup-reg" class="faq__button button" data-fancybox>Задать свой вопрос</a>
    </div>
</section>
			
			
			
<section class="form-reg section_2">
    <div class="container">
    
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Не&nbsp;определились с&nbsp;программой? Поможем в&nbsp;выборе</h3>
        
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Отправить</button>
    </div>
</form>

    </div>
</section>


 


			<footer class="footer ">
    <div class="container">
        <div class="footer__box">
            <div class="footer__top ">
                <div class="footer__wrap">
                    <div class="footer__logo">
                        <img data-src="img/footer/logo.svg" alt="" class="lazy">
                    </div>
                    <div class="footer__contacts">
                        <a href="tel:<?= $phone_link ?>"><img src="img/footer/phone.svg" alt=""><?= $phone ?></a>
                        <!-- <a href="mailto:<?= $mail ?>"><img src="img/footer/mail.svg" alt=""><?= $mail ?></a> -->
                    </div>
                </div>
                <div class="footer__menu">
                    <div>
                        <a href="#info" class="scroll footer__menu-link">Направления</a>
                        <a href="#partner" class="scroll">Партнеры</a>
                    </div>
                    <div>
                        <a href="#career" class="scroll footer__menu-link">Центр карьеры</a>
                        <a href="#faq" class="scroll">FAQ</a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div>&copy;&nbsp;2022&nbsp;Synergy. Все права защищены</div>
                
                <div class=""><a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a></div>
            </div>
        </div>
</footer>
		
	</div>

	
	<div class="fixed">
		<!-- <a href="tel:<?= $phone_link ?>" class="fixed__link"> <img src="img/common/phone.svg" alt=""></a> -->
		<a href="#popup-reg" class="fixed__button button" data-fancybox>Записаться</a>
	</div>
	

	<div class="popup-trigger" hidden>
		
		<div class="popup-reg" id="popup-reg">
    
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставь заявку и&nbsp;начни обучение прямо сейчас</h3>
        
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Отправить</button>
    </div>
</form>

</div>
<div class="popup-reg" id="popup-bakalavar">
    
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставь заявку и&nbsp;начни обучение прямо сейчас со&nbsp;стоимостью от&nbsp;4&nbsp;499 рублей в&nbsp;месяц</h3>
        
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Отправить</button>
    </div>
</form>

</div>

<div class="popup-reg" id="popup-prof">
    
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставь заявку и&nbsp;начни обучение прямо сейчас со&nbsp;стоимостью от&nbsp;2&nbsp;099 рублей в&nbsp;месяц</h3>
        
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Отправить</button>
    </div>
</form>

</div>

<div class="popup-reg" id="popup-course">
    
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставь заявку и&nbsp;начни обучение прямо сейчас со&nbsp;стоимостью от&nbsp;2&nbsp;399 рублей в&nbsp;месяц</h3>
        
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Отправить</button>
    </div>
</form>

</div>

<div class="popup-reg" id="popup-info">
    
    
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставь заявку и&nbsp;начни обучение прямо сейчас</h3>
        
        
        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="form" type="hidden" placeholder="" class="form__input"    value="form">
    
</div><!-- form__item -->

            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="lidforma" type="hidden" placeholder="" class="form__input"    value="">
    
</div><!-- form__item -->

            
            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">Отправить</button>
    </div>
</form>

</div>


<div class="popup-menu" id="popup-menu">
    <ul class="popup-menu__menu">
        <li>
            <a href="#info" class="scroll">Направления</a>
        </li>
        <li>
            <a href="#career" class="scroll">Центр карьеры</a>
        </li>
        <li>
            <a href="#partner" class="scroll">Партнеры</a>
        </li>
        <li>
            <a href="#faq" class="scroll">FAQ</a>
        </li>
    </ul>
    <a href="#popup-reg" data-fancybox class="button popup-menu__button">Записаться</a>
    
</div>



		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>
	<script src="js/script.js"></script>
</body>

</html>
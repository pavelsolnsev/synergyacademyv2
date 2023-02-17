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

<body class="<?= $version ? 'version-' . $version : '' ?> page-thanks">
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

	<section class="thanks">
    <div class="container">
        <div class="thanks__box">
            <h2 class="thanks__title title">Спасибо за заявку!</h2>
            <div class="thanks__desc">В ближайшее время наш менеджер<br> свяжется с вами</div>
            <div class="thanks__links">
                <a href="<?= $BASE_HREF ?>" class="thanks__button button">На главную</a>
                <a href="https://wa.me/+74952252326" class="thanks__button button _green"><img src="img/thanks/wa.svg" alt="">Написать в чат</a>
            </div>
            
        </div>
    </div>
</section>
	
	<footer class="footer blockThanks">
    <div class="container">
        <div class="footer__box">
            <div class="footer__top blockThanks">
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
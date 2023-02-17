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
					{#<a class="header__button button" href="#popup-online_schol" style="margin-left: 10px" data-fancybox>Онлайн-школа</a>#}
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

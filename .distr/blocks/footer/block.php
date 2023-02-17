<footer class="footer {{class}}">
    <div class="container">
        <div class="footer__box">
            <div class="footer__top {{class}}">
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
                {#<!-- <div class=""><a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Пользовательское соглашение</a></div> -->#}
                <div class=""><a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a></div>
            </div>
        </div>
</footer>
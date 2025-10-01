<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<footer class="footer">
    <div class="footer__top">
        <div class="container footer__main">
            <div class="footer__col footer__col--logo">
                <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/logo/logo.svg" ?>" alt="Olimp" class="footer__logo">
                <div class="footer__map">
                    <iframe src="https://yandex.ru/map-widget/v1/-/CLufyGPb?z=13" width="173" height="81"></iframe>
                </div>
            </div>
            <div class="footer__col footer__col--nav">
                <nav class="footer__nav">
                    <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_left",
                            Array(
                                    "ROOT_MENU_TYPE" => "footer_left",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "3600",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N"
                            )
                    );?>
                    <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_right",
                            Array(
                                    "ROOT_MENU_TYPE" => "footer_right",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "3600",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N"
                            )
                    );?>
                </nav>
            </div>
            <div class="footer__col footer__col--actions">
                <div class="footer__inline-actions">
                    <button class="button">
                        Запись на прием <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="footer__socials">
                        <a href="#" class="footer__social">
                            <img src="<?= SITE_TEMPLATE_PATH . "/assets/img/footer/footer-1.svg" ?>" alt="VK">
                        </a>
                        <a href="#" class="footer__social">
                            <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/footer/footer-2.svg" ?>" alt="WhatsApp">
                        </a>
                        <a href="#" class="footer__social">
                            <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/footer/footer-3.svg" ?>" alt="Telegram">
                        </a>
                    </div>
                </div>
                <ul class="footer__contacts">
                    <li class="footer__contacts-item"><span class="footer__contact-label">Адрес:</span> Ул. Красный
                        Путь, 70; ул. Жукова, 78
                    </li>
                    <li class="footer__contacts-item"><span class="footer__contact-label">Телефон:</span> <a
                                href="tel:+73812475574" class="footer__contact-link">+7 (3812)
                            47-55-74</a></li>
                    <li class="footer__contacts-item"><span class="footer__contact-label">Режим:</span> Пн-Сб:
                        08:00-20:00, Вс: 09:00-18:00
                    </li>
                    <li class="footer__contacts-item"><span class="footer__contact-label">Почта:</span> <a
                                href="mailto:stomolimp55@mail.ru"
                                class="footer__contact-link">stomolimp55@mail.ru</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container footer__bottom-content">
            <div class="footer__copy text--size-small">
                © 2025. Стоматологическая клиника ОЛИМП
            </div>
            <div class="footer__policy text--size-small">
                <a href="#">Политика конфиденциальности</a>
            </div>
            <div class="footer__dev text--size-small">
                Сайт разработан в <a href="#">IT Company Asmart</a>
            </div>
            <div class="footer__vision">
                <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/vision.svg" ?>" alt="Версия для слабовидящих">
            </div>
        </div>
    </div>
</footer>
</body>
</html>
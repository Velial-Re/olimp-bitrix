<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../../../bitrix/urlrewrite.php"/>
</head>
<body>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon"
          href="<?= SITE_TEMPLATE_PATH ?>./assets/img/favicon/favicon-dark.svg">

    <?php
    Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/style.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/animations.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets//js/stars.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/swiper-bundle.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/sliders.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/header-mobile.js");
    ?>

    <? $APPLICATION->ShowHead(); ?>
</head>
<body>

<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<!-- Шапка сайта -->
<header class="header" id="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-content">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/logo/logo.svg" ?>" alt="Olimp"
                             class="header__logo-icon">
                    </a>
                </div>

                <div class="header__contacts">
                    <div class="header__contact-group">
                        <div class="header__contact-item">
                            <span class="header__contact-label text--numeric">Адрес:</span>
                            <div class="header__contact-value text--numeric">
                                <div>Ул. Красный Путь, 70</div>
                                <div>Ул. Жукова, 78</div>
                            </div>
                        </div>
                    </div>

                    <div class="header__contact-group">
                        <div class="header__contact-item">
                            <span class="header__contact-label text--numeric">Режим:</span>
                            <div class="header__contact-value text--numeric">
                                <div>Пн-Сб — 08:00-20:00</div>
                                <div>Вс — 09:00-18:00</div>
                            </div>
                        </div>
                    </div>

                    <div class="header__contact-group">
                        <div class="header__contact-item">
                            <span class="header__contact-label text--numeric">Телефон:</span>
                            <a href="tel:+73812475574" class="header__phone text--numeric">+7 (3812) 47-55-74</a>
                        </div>

                        <div class="header__contact-item">
                            <span class="header__contact-label text--numeric">Почта:</span>
                            <a href="mailto:stomolomp55@mail.ru"
                               class="header__email text--numeric">stomolomp55@mail.ru</a>
                        </div>
                    </div>
                </div>

                <div class="header__badges">
                    <div class="header__badge">
                        <div class="header__badge-icon">
                            <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/header/header-1.png" ?>"
                                 alt="Стоматологическая ассоциация России">
                        </div>
                        <span class="text--size-xs">Стоматологическая ассоциация России</span>
                    </div>

                    <div class="header__quality">
                        <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/vision.svg" ?>" alt="quality">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__main">
        <div class="container">
            <div class="header__main-content">

                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Главная</a>
                        </li>
                        <li class="header__nav-item header__nav-item--dropdown">
                            <a href="#" class="header__nav-link" aria-expanded="false">
                                <span>О нас</span>
                                <i class="fas fa-chevron-down header__nav-arrow"></i>
                            </a>
                            <div class="header__dropdown">
                                <a href="#" class="header__dropdown-link">Специалисты</a>
                                <a href="#" class="header__dropdown-link">Отзывы</a>
                                <a href="#" class="header__dropdown-link">Документы</a>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Услуги</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Цены</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Калькулятор</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Акции</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Новости</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Контакты</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Вакансии</a>
                        </li>
                    </ul>
                </nav>

                <button class="header__burger" id="mobileMenuOpen" aria-label="Открыть меню">
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                </button>

                <div class="header__actions">
                    <div class="header__social">
                        <a href="#" class="header__social-item" aria-label="Telegram">
                            <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/header/header-2.svg" ?>" alt="telegram">
                        </a>
                        <a href="#" class="header__social-item" aria-label="WhatsApp">
                            <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/header/header-3.svg" ?>" alt="whatsapp">
                        </a>
                    </div>

                    <button class="button">
                        <span>Запись на прием</span>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Мобильное меню -->
    <div class="header__mobile-menu" id="mobileMenu">
        <button class="header__burger header__burger--active" id="mobileMenuClose" aria-label="Закрыть меню">
            <span class="header__burger-line"></span>
            <span class="header__burger-line"></span>
            <span class="header__burger-line"></span>
        </button>
        <ul class="header__mobile-nav">
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Главная</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">О нас</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Услуги</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Цены</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Калькулятор</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Акции</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Новости</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Контакты</a>
            </li>
            <li class="header__mobile-nav-item">
                <a href="#" class="header__mobile-nav-link">Вакансии</a>
            </li>
        </ul>

        <div class="header__mobile-contacts">
            <div class="header__mobile-contact-item">
                <a href="tel:+73812475574" class="header__mobile-phone">+7 (3812) 47-55-74</a>
                <a href="mailto:stomolomp55@mail.ru" class="header__mobile-email">stomolomp55@mail.ru</a>
            </div>

            <div class="header__mobile-contact-item">
                <div class="header__mobile-address">
                    <div>Ул. Красный Путь, 70</div>
                    <div>Ул. Жукова, 78</div>
                </div>
            </div>

            <div class="header__mobile-contact-item">
                <div class="header__mobile-address">
                    <div>Пн-Сб — 08:00-20:00</div>
                    <div>Вс — 09:00-18:00</div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__overlay" id="mobileOverlay"></div>
</header>
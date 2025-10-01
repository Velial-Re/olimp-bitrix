<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon"
          href="<?= SITE_TEMPLATE_PATH ?>./assets/img/favicon/favicon-dark.svg">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH . "/assets/style.css" ?>">
    <?php
    Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/style.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/animations.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets//js/stars.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/swiper-bundle.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/sliders.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/header-mobile.js");
    ?>

    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>

<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
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

                <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu",
                        array(
                                "ROOT_MENU_TYPE" => "top",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "2",
                                "CHILD_MENU_TYPE" => "dropdown",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                        )
                ); ?>

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
        <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "mobile_menu",
                array(
                        "ROOT_MENU_TYPE" => "mobile",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "3600",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N"
                )
        ); ?>

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

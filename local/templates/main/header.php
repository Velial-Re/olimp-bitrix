<?php
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

    <?php
    Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/style.css");

    Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js", true);
    Asset::getInstance()->addJs("https://unpkg.com/imask", true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/swiper-bundle.min.js", true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/sliders.js", true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/header-mobile.js", true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/animations.js", true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/stars.js", true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/validation.js", true);

    $APPLICATION->ShowHead();
    ?>

</head>
<body>

<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

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
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/header/contacts.php",
                            ),
                            false
                    ); ?>
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

                <?php $APPLICATION->IncludeComponent(
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
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/header/social_links.php",
                                ),
                                false
                        ); ?>
                    </div>

                    <button class="button">
                        <span>Запись на прием</span>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="header__mobile-menu" id="mobileMenu">
        <button class="header__burger header__burger--active" id="mobileMenuClose" aria-label="Закрыть меню">
            <span class="header__burger-line"></span>
            <span class="header__burger-line"></span>
            <span class="header__burger-line"></span>
        </button>
        <?php $APPLICATION->IncludeComponent(
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
            <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/header/mobile_contacts.php",
                    ),
                    false
            ); ?>
        </div>
    </div>

    <div class="header__overlay" id="mobileOverlay"></div>
</header>

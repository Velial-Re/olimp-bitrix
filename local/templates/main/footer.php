<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<footer class="footer">
    <div class="footer__top">
        <div class="container footer__main">
            <div class="footer__col footer__col--logo">
                <img src="<?= SITE_TEMPLATE_PATH . "./assets/img/logo/logo.svg" ?>" alt="Olimp" class="footer__logo">
                <div class="footer__map">
                    <iframe src="https://yandex.ru/map-widget/v1/-/CLufyGPb?z=13" width="173" height="81"
                            loading="lazy" title="Расположение клиники Олимп"></iframe>
                </div>
            </div>
            <div class="footer__col footer__col--nav">
                <nav class="footer__nav">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_left",
                            array(
                                    "ROOT_MENU_TYPE" => "footer_left",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N"
                            )
                    ); ?>
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_right",
                            array(
                                    "ROOT_MENU_TYPE" => "footer_right",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N"
                            )
                    ); ?>
                </nav>
            </div>
            <div class="footer__col footer__col--actions">
                <div class="footer__inline-actions">
                    <button class="button">
                        Запись на прием <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="footer__socials">
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/inc_areas/footer/social_links.php",
                                ),
                                false
                        );?>
                    </div>
                </div>
                <ul class="footer__contacts">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/inc_areas/footer/contacts.php",
                            ),
                            false
                    );?>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container footer__bottom-content">
            <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/inc_areas/footer/bottom_info.php",
                    ),
                    false
            );?>
        </div>
    </div>
</footer>
</body>
</html>
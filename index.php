<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Современная стоматологическая клиника Олимп.");
$APPLICATION->SetPageProperty("keywords", "Стоматологий, зубы, лечение, доктор, больница");
$APPLICATION->SetPageProperty("title", "Стоматология \"Олимп\" №1");
$APPLICATION->SetTitle("Главная");
?>
    <main class="main">
        <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/hero/main.php",
                ),
                false
        ); ?>
        <section class="promotions">
            <div class="container">
                <div class="promotions__content">
                    <div class="promotions__info">
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/promotions/header.php",
                                ),
                                false
                        ); ?>
                    </div>
                    <div class="promotions__slider swiper" id="promotionsSwiper">
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "promotions_slider",
                                array(
                                        "IBLOCK_ID" => getIblockIdByCode('promotions_slider'),
                                        "IBLOCK_TYPE" => "content",
                                        "NEWS_COUNT" => "5",
                                        "SORT_BY1" => "SORT",
                                        "SORT_ORDER1" => "ASC",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "3600",
                                        "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y"
                                )
                        ); ?>

                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/promotions/navigation.php",
                                ),
                                false
                        ); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="services__content">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/services/header.php",
                            ),
                            false
                    ); ?>
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "services",
                            array(
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => getIblockIdByCode('services'),
                                    "NEWS_COUNT" => "10",
                                    "SORT_BY1" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "FILTER_NAME" => "",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "8000",
                                    "SET_TITLE" => "N",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                            )
                    ); ?>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="about__content">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/about/header.php",
                            ),
                            false
                    ); ?>

                    <div class="about__main">
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "about_statistics",
                                array(
                                        "IBLOCK_TYPE" => "content",
                                        "IBLOCK_ID" => getIblockIdByCode('about_statistics'),
                                        "NEWS_COUNT" => "4",
                                        "SORT_BY1" => "SORT",
                                        "SORT_ORDER1" => "ASC",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "36000000",
                                        "SET_TITLE" => "N",
                                        "PROPERTY_CODE" => array("ICON")
                                )
                        ); ?>

                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/about/image_content.php",
                                ),
                                false
                        ); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="implantation">
            <div class="container">
                <div class="implantation__content">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/implantation/implantation_main.php",
                            ),
                            false
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/implantation/implantation_guarantee.php",
                            ),
                            false
                    ); ?>
                </div>
            </div>
        </section>
        <section class="specialists">
            <div class="container">
                <div class="specialists__content">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/specialists/header.php",
                            ),
                            false
                    ); ?>

                    <div class="specialists__slider swiper" id="specialistsSwiper">
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "specialists_slider",
                                array(
                                        "IBLOCK_ID" => getIblockIdByCode('specialists_slider'),
                                        "IBLOCK_TYPE" => "content",
                                        "NEWS_COUNT" => "5",
                                        "SORT_BY1" => "SORT",
                                        "SORT_ORDER1" => "ASC",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "3600",
                                        "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y"
                                )
                        ); ?>


                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/specialists/navigation.php",
                                ),
                                false
                        ); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="news__content">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/news/header.php",
                            ),
                            false
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "news",
                            array(
                                    "IBLOCK_ID" => getIblockIdByCode('news'),
                                    "IBLOCK_TYPE" => "content",
                                    "NEWS_COUNT" => "5",
                                    "SORT_BY1" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "3600",
                                    "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y"
                            )
                    ); ?>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="reviews__content">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/reviews/header.php",
                            ),
                            false
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/reviews/static_reviews.php",
                            ),
                            false
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "ratings",
                            array(
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => getIblockIdByCode('ratings'),
                                    "NEWS_COUNT" => "10",
                                    "SORT_BY1" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "36000000",
                                    "SET_TITLE" => "N",
                                    "PROPERTY_CODE" => array("PLATFORM_LOGO")
                            )
                    ); ?>
                </div>
            </div>
        </section>
        <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/inc_areas/appointment/main.php",
                ),
                false
        ); ?>
    </main>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
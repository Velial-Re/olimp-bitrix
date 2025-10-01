<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Современная стоматологическая клиника Олимп.");
$APPLICATION->SetPageProperty("keywords", "Стоматологий, зубы, лечение, доктор, больница");
$APPLICATION->SetPageProperty("title", "Стоматология \"Олимп\" №1");
$APPLICATION->SetTitle("Главная");
?>
    <main class="main">
        <section class="hero">
            <div class="hero__image">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/hero/hero.png"
                     alt="Стоматология Олимп" class="hero__img" loading="lazy">
            </div>
            <div class="hero__overlay"></div>
            <div class="hero__content">
                <div class="hero__text">
                    <h1 class="hero__title text--size-hero">
                        Стоматология «Олимп» №1
                    </h1>
                    <p class="hero__subtitle text--size-md">по рекомендациям пациентов</p>
                    <button class="hero__cta button">
                        <span>Запись на прием</span>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>
        <section class="promotions">
            <div class="container">
                <div class="promotions__content">
                    <div class="promotions__info">
                        <div class="promotions__header">
                            <h2 class="promotions__title text--size-xl">Акции</h2>
                            <p class="promotions__description text--body-m">
                                В разделе "Акции" мы собрали самые выгодные предложения на наши товары и услуги.
                            </p>
                        </div>

                        <div class="promotions__decoration">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/promotions/promotions-3.svg"
                                 alt="Промо иконка"
                                 class="promotions__decoration-icon">
                        </div>
                    </div>
                    <div class="promotions__slider swiper" id="promotionsSwiper">
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "promotions_slider",
                                array(
                                        "IBLOCK_ID" => "1",
                                        "IBLOCK_TYPE" => "Content",
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

                        <div class="promotions__navigation">
                            <button class="promotions__nav-btn promotions__nav-btn--prev button--nav swiper-button-prev"
                                    id="promoPrev">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="promotions__nav-btn promotions__nav-btn--next button--nav swiper-button-next"
                                    id="promoNext">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="services__content">
                    <div class="services__header">
                        <div class="services__info">
                            <h2 class="services__title text--size-xl">
                                Все <span class="services__title-highlight">необходимые услуги</span> в одном месте
                            </h2>
                            <p class="services__description text--body-m">
                                В нашей стоматологической клинике мы предлагаем широкий спектр услуг, чтобы
                                удовлетворить все ваши потребности в уходе за зубами и полостью рта.
                            </p>
                        </div>
                        <div class="services__action">
                            <button class="button button--outline">
                                <span>Смотреть все услуги</span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "services",
                            array(
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "3",
                                    "NEWS_COUNT" => "999",
                                    "SORT_BY1" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "FILTER_NAME" => "",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "36000000",
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

        <section class="specialists">
            <div class="container">
                <div class="specialists__content">
                    <div class="specialists__header">
                        <div class="specialists__info">
                            <h2 class="specialists__title  text--size-xl">
                                Наши <span class="specialists__title-highlight">специалисты</span>
                            </h2>
                            <p class="specialists__description text--body-m">
                                В нашей стоматологической клинике работает команда высококвалифицированных специалистов,
                                каждый из которых обладает богатым опытом и глубокими знаниями в своей области.
                            </p>
                        </div>
                        <div class="specialists__action">
                            <button class="button button--outline">
                                <span>Подробнее</span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="specialists__slider swiper" id="specialistsSwiper">
                        <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "specialists_slider",
                                arParams: array(
                                        "IBLOCK_ID" => "2",
                                        "IBLOCK_TYPE" => "Content",
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


                        <div class="specialists__navigation">
                            <button class="specialists__arrow specialists__arrow--prev  button--nav swiper-button-prev"
                                    id="specialistsPrev">
                                <i class="fas fa-chevron-left"></i>
                            </button>

                            <div class="specialists__dots" id="specialistsDots">
                                <span class="specialists__dot specialists__dot--active" data-slide="0"></span>
                                <span class="specialists__dot" data-slide="1"></span>
                                <span class="specialists__dot" data-slide="2"></span>
                            </div>

                            <button class="specialists__arrow specialists__arrow--next button--nav swiper-button-next"
                                    id="specialistsNext">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="news__content">
                    <div class="news__header">
                        <div class="news__info">
                            <h2 class="news__title text--size-xl">Новости</h2>
                            <p class="news__description text--body-m">
                                В нашем разделе "Новости" мы делимся актуальной информацией о нашей клинике, новых
                                услугах и мероприятиях. Следите за обновлениями, чтобы не пропустить важные события!
                            </p>
                        </div>
                        <div class="news__action">
                            <button class="button button--outline">
                                <span>Смотреть все</span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "news",
                            arParams: array(
                                    "IBLOCK_ID" => "4",
                                    "IBLOCK_TYPE" => "Content",
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
    </main>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
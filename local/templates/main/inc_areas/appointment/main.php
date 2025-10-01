<section class="appointment">
    <div class="container">
        <div class="appointment__content">
            <div class="appointment__form-wrapper">
                <div class="appointment__header">
                    <h2 class="appointment__title">Запишитесь на консультацию</h2>
                </div>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.feedback",
                    "appointment",
                    array(
                        "USE_CAPTCHA" => "N",
                        "OK_TEXT" => "Спасибо! Мы свяжемся с вами в ближайшее время.",
                        "EMAIL_TO" => "test",
                        "REQUIRED_FIELDS" => array("NAME", "USER_EMAIL"),
                        "EVENT_MESSAGE_ID" => array("7"),
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_SHADOW" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "AJAX_OPTION_HISTORY" => "N"
                    )
                ); ?>
            </div>

            <div class="appointment__image">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/appointment/appointment-1.png"
                     alt="Стоматологическая консультация"
                     class="appointment__img" loading="lazy">
            </div>
        </div>
    </div>
</section>

<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<?php if (!empty($arResult["OK_MESSAGE"])): ?>
    <div class="appointment__success">
        <div class="appointment__success-text"><?= $arResult["OK_MESSAGE"] ?></div>
    </div>
<?php else: ?>

    <form class="appointment__form" method="post" action="<?= POST_FORM_ACTION_URI ?>" enctype="multipart/form-data"
          id="appointmentForm">
        <?= bitrix_sessid_post() ?>

        <?php if (!empty($arResult["ERROR_MESSAGE"])): ?>
            <div class="appointment__error">
                <?= $arResult["ERROR_MESSAGE"] ?>
            </div>
        <?php endif; ?>

        <div class="appointment__field">
            <label for="user_name" class="appointment__label"></label>
            <input
                    type="text"
                    class="appointment__input"
                    id="user_name"
                    name="user_name"
                    placeholder="Как вас зовут"
                    value="<?= $arResult["AUTHOR_NAME"] ?>"
                    autocomplete="name"
                    required
            >
        </div>

        <div class="appointment__field">
            <label for="user_phone" class="appointment__label"></label>
            <input
                    type="tel"
                    class="appointment__input"
                    id="user_phone"
                    name="user_phone"
                    placeholder="Ваш телефон"
                    value=""
                    autocomplete="tel"
                    pattern="[+]?[0-9\s\-\(\)]{10,}"
                    required
            >
        </div>

        <div class="appointment__field">
            <label for="MESSAGE" class="appointment__label"></label>
            <textarea
                    class="appointment__input appointment__input--textarea"
                    id="MESSAGE"
                    name="MESSAGE"
                    placeholder="Комментарий (не обязательно)"
                    rows="4"
            ><?= $arResult["MESSAGE"] ?></textarea>
        </div>

        <div class="appointment__privacy">
            <label class="appointment__privacy-checkbox">
                <input type="checkbox" class="appointment__checkbox" name="agreement" required/>
                <span class="appointment__checkbox-custom"></span>
                <span class="appointment__privacy-text">
                Нажимая на кнопку, вы даете согласие на обработку
                <br>персональных данных и соглашаетесь с политикой конфиденциальности.
            </span>
            </label>
        </div>

        <button type="submit" name="submit" class="appointment__submit button button--bg-white">
            <span>Записаться</span>
            <i class="fas fa-chevron-right"></i>
        </button>

        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
    </form>

<?php endif; ?>

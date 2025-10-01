<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="about__stats">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>

            <div class="about__stat-card">
                <div class="about__stat-icon">
                    <img src="<?= $arItem['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC'] ?>"
                         alt="<?= $arItem["NAME"] ?>" class="about__stat-icon"/>
                </div>
                <div class="about__stat-content">
                    <div class="about__stat-number"
                         data-purecounter-end="<?= intval($arItem["PREVIEW_TEXT"]) ?>"><?= $arItem["PREVIEW_TEXT"] ?></div>
                    <div class="about__stat-label"><?= $arItem["NAME"] ?></div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
<?php endif; ?>
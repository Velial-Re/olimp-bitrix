<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="reviews__ratings">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="reviews__rating-card">
                <div class="reviews__rating-logo">
                    <img src="<?= $arItem['DISPLAY_PROPERTIES']['PLATFORM_LOGO']['FILE_VALUE']['SRC'] ?>" alt="<?= $arItem["NAME"] ?>" loading="lazy">
                </div>
                <div class="reviews__rating">
                    <div class="reviews__rating-score"><?= $arItem["PREVIEW_TEXT"] ?></div>
                    <div class="reviews__rating-stars">
                        <div class="stars">
                            <span></span>
                            <div class="inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
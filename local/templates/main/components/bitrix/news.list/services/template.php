<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="services__grid">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
            $cardType = $arItem["PROPERTIES"]["CARD_TYPE"]["VALUE"];
            $cardClass = $cardType == "main" ? "services__card--main" : "services__card--vertical";
            ?>
            <div class="services__card <?= $cardClass ?>">
                <span class="services__card-label"><?= isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : '' ?></span>
                <div class="services__card-content">
                    <h3 class="services__card-title"><?= $arItem["NAME"] ?></h3>
                </div>
                <div class="services__card-bg">
                    <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= isset($arItem["PREVIEW_PICTURE"]["ALT"]) ?? $arItem['NAME'] ?>>"
                             class="services__card-image"
                             loading="lazy"
                             decoding="async">
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
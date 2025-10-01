<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="promotions__cards swiper-wrapper" id="promotionsCards">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="promotions__card swiper-slide " id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="promotions__card-image">
                    <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= isset($arItem["PREVIEW_PICTURE"]["ALT"]) ? $arItem["PREVIEW_PICTURE"]["ALT"] : $arItem['NAME'] ?>">
                    <?php endif; ?>
                </div>
                <div class="promotions__card-content">
                    <h3 class="promotions__card-title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h3>
                    <p class="promotions__card-text"><?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : ''; ?></p>
                    <a href="#" class="promotions__card-link button--link">Подробнее</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
<?php endif; ?>
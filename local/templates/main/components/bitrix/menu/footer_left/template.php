<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if (!empty($arResult)): ?>
    <ul class="footer__list">
        <?php foreach ($arResult as $key => $arItem): ?>
            <li class="footer__item <?= $key === 0 ? 'footer__item--main' : '' ?> <?= $arItem["SELECTED"] ? 'footer__item--active' : '' ?>">
                <a href="<?= $arItem["LINK"] ?>">
                    <?= $arItem["TEXT"] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>

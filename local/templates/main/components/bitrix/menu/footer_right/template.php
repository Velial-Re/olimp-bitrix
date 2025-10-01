<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if (!empty($arResult)): ?>
    <ul class="footer__list footer__list--gap16 footer__list--bold">
        <?php foreach ($arResult as $arItem): ?>
            <li class="footer__item <?= $arItem["SELECTED"] ? 'footer__item--active' : '' ?>">
                <a href="<?= $arItem["LINK"] ?>">
                    <?= $arItem["TEXT"] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>

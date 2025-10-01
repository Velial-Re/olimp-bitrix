<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if (!empty($arResult)): ?>
    <ul class="header__mobile-nav">
        <?php foreach ($arResult as $arItem): ?>
            <li class="header__mobile-nav-item">
                <a href="<?= $arItem["LINK"] ?>" class="header__mobile-nav-link
               <?php if ($arItem["SELECTED"]): ?>header__mobile-nav-link--active<? endif ?>">
                    <?= $arItem["TEXT"] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>
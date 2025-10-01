<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if (!empty($arResult)): ?>
    <nav class="header__nav">
        <ul class="header__nav-list">
            <?php foreach ($arResult as $arItem): ?>
                <?php if ($arItem["SELECTED"]): ?>
                    <li class="header__nav-item header__nav-item--active">
                <?php else: ?>
                    <li class="header__nav-item <? if ($arItem["IS_PARENT"]): ?>header__nav-item--dropdown<? endif ?>">
                <?php endif ?>

                <a href="<?= $arItem["LINK"] ?>" class="header__nav-link"
                   <?php if ($arItem["IS_PARENT"]): ?>aria-expanded="false"<? endif ?>>
                    <span><?= $arItem["TEXT"] ?></span>
                    <?php if ($arItem["IS_PARENT"]): ?>
                        <i class="fas fa-chevron-down header__nav-arrow"></i>
                    <?php endif ?>
                </a>

                <?php if (!empty($arItem['subitems'])): ?>
                    <div class="header__dropdown">
                        <?php foreach ($arItem["subitems"] as $subitem): ?>
                            <a href="<?= $subitem["LINK"] ?>" class="header__dropdown-link">
                                <?= $subitem["TEXT"] ?? '' ?>
                            </a>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
<?php endif; ?>
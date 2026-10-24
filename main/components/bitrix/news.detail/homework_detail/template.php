<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?php if (!empty($arResult['ID'])): ?>
    <section class="news">
        <div class="news__container">
            <h3 class="news__title">
                <span> Блог</span>
            </h3>
            <div class="news__slider swiper">
                <div class="swiper-wrapper">


                        <div class="swiper-slide news__item">

                            <img class="news__item-img" src="<?= $arResult['PREVIEW_PICTURE']['SRC']; ?>"
                                 width="435"
                             alt="">

                            <h4 class="news__item-title">
                                <?= $arResult['NAME'] ?>
                            </h4>
                            <p class="news__item-text">
                                <?= $arResult['PREVIEW_TEXT'] ?>
                            </p>


                            <p class="news__item-text news__item-text_quote">
                                <?= $arResult['PROPERTIES']['QUOTE']['VALUE'] ?>
                            </p>
                            <p class="news__item-text">
                                <?= $arResult['DETAIL_TEXT'] ?>
                            </p>
                            <p class="news__item-text news__item-text_note">
                                <?= $arResult['PROPERTIES']['NOTE']['VALUE'] ?>
                                <a
                                        href="<?= $arResult['PROPERTIES']['LINK']['VALUE'] ?>"><?= $arResult['PROPERTIES']['LINK']['VALUE'] ?></a>
                            </p>
                            <p class="news__item-text news__item-text_link">
                                <?= $arResult['PROPERTIES']['SOURSE']['VALUE'] ?>
                                <a
                                        href="<?= $arResult['PROPERTIES']['LINK']['VALUE'] ?>"><?= $arResult['PROPERTIES']['LINK']['VALUE'] ?></a>
                            </p>



                        </div>



                </div>
                <div class="news__button swiper-button-left">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow-left.svg" alt="Переключение влево">
                </div>
                <div class="news__button swiper-button-right">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow-right.svg" alt="Переключение влево">
                </div>
            </div>


        </div>
    </section>

<?php endif; ?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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



<?php if (!empty($arResult['ITEMS'])): ?>
    <section class="news">
        <div class="news__container">
            <h3 class="news__title">
                <span> Блог</span>
            </h3>
            <div class="news__slider swiper">
                <div class="swiper-wrapper">

                    <?php foreach ($arResult['ITEMS'] as $arItem): ?>

                        <div class="swiper-slide news__item">

                            <img class="news__item-img" src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>"
                                 width="435"
                            " alt="">

                            <h4 class="news__item-title">
                                <?= $arItem['NAME'] ?>
                            </h4>
                            <p class="news__item-text">
                                <?= $arItem['PREVIEW_TEXT'] ?>
                            </p>
                            <?php if (!empty($arItem['DETAIL_PICTURE']['SRC'])): ?>
                                <img class="news__item-img" src="<?= $arItem['DETAIL_PICTURE']['SRC']; ?>"
                                     width="900"
                                     alt="">
                            <?php endif; ?>

                            <?php if ($arItem['DETAIL_PAGE_URL'] != '/blog/grinatom-popal/'):?>

                                <a href="#inline" class="modalbox button feedback__button">Оставить отзыв</a>

                                <div id="inline">
                                    <?$APPLICATION->IncludeComponent(
                                        "caselab:main.feedback",
                                        ".default",
                                        array(
                                            "AJAX_MODE" => "Y",
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "EMAIL_TO" => "developer@example.test",
                                            "EVENT_MESSAGE_ID" => array(
                                            ),
                                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                            "REQUIRED_FIELDS" => array(
                                                0 => "NAME",
                                                1 => "EMAIL",
                                                2 => "MESSAGE",
                                                3 => "HOURSE",
                                                4 => "CHECK",
                                                5 => "PHONE",
                                            ),
                                            "USE_CAPTCHA" => "Y",
                                            "USER_CONSENT" => "Y",
                                            "USER_CONSENT_ID" => "1",
                                            "USER_CONSENT_IS_CHECKED" => "N",
                                            "USER_CONSENT_IS_LOADED" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "Y",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => ""
                                        ),

                                        false
                                    );?>

                                </div>


                                <? else: ?>
                                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="modalbox feedback__button">Подробно</a>

                            <?php endif; ?>


                        </div>
                    <?php endforeach; ?>
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


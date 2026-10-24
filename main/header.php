<?php
global $APPLICATION;
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>


    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <meta name="format-detection" content="telephone=no">
    <!-- <style>body{opacity: 0;}</style> -->


    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css') ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/fancybox/jquery.fancybox.css') ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/app.js') ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery-1.7.1.min.js') ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.maskedinput.js') ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/fancybox/jquery.fancybox.js') ?>
    <?php $APPLICATION->ShowHead(); ?>
    <?php ?>
    <script type="text/javascript">
        jQuery(function ($) {
            $("#phone").mask("+7 (999) 999-9999");
            $("#phone2").mask("+7 (999) 999-9999");
        });
    </script>
</head>

<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <nav class="nav">
                <ul class="nav__list">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "top_menu"
                        ),
                        false
                    ); ?>
                </ul>
            </nav>
        </div>
    </header>






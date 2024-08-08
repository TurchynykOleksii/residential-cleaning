<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residential Cleaning</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/build/img/favicon.ico" />
   <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/build/css/libs/swiper.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Add autoHide class to automatically hide the header on scroll -->
    <header class="header">
        <div class="header__logo-phone">
            <div class="container">
                <div class="header__inner">
                    <button class="header__burger">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/burger.svg" alt="burger menu icons">
                    </button>
                    <a href="/" class="header__logo"><img src="<?=get_template_directory_uri() ?>/build/img/icons/logo.svg" alt="logo icon"></a>
                    <a href="tel:14378684158" class="header__phone">
                        <div class="header__logo-icon">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/phone-white.svg" alt="phone icon">
                        </div>
                        <span>1(437)868-4158</span>
                    </a>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'mobile_menu',
                    'menu' => 'mobile_menu',
                    'container' => 'ul',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'header__mobile-menu header__mobile-hide',
                    'menu_id' => 'mobile_menu',
                    'echo' => true,
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 0,
                    'walker' => '',
                ));
                ?>
            </div>
        </div>

        <div class="header__navigation">
            <div class="container">
                <nav class="header__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'menu' => 'header_menu',
                    'container' => 'ul',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'header__list',
                    'menu_id' => 'header__list',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 0,
                    'walker' => '',
                ));
                ?>
                </nav>
            </div>
        </div>

    </header>
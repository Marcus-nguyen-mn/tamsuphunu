<!doctype html>
<html id="no_margin" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- <link rel="shortcut icon" href="<?php //echo get_template_directory_uri(); ?>/images/favico.png"
        type="image/x-icon" /> -->
    <link rel="icon" href="<?php//echo get_template_directory_uri(); ?>/images/favico.png" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body id="home" class="slide_menu slide-right" data-spy="scroll" data-target="#navbar-example" <?php body_class(); ?>>
    <div class="menu-bg" id="menuBG"></div>
    <div class="mc-main-header">
        <div class="container">
            <div class="mc-header-contain">
                <div class="mc-row">
                    <a href="<?php echo site_url(); ?>" class="main-logo">
                        <img src="<?php echo get_field("logo","option"); ?>" alt="logo">
                    </a>
                    <div class="mc-menu">
                        <div class="mc-dtmenu">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                            ) );
                            ?>
                        </div>
                        <div class="mn-mc-mb">
                            <div class="ic-menu" id="icMenu">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu_mobile scale-in-hor-left">
        <div class="btn-clos-mn">
            <button class="clos-menu-mb" id="closeMNMB"><i class="fas fa-times"></i></button>
        </div>
        <div class="menu-mobile-contain">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'main_menu',
            ) );
            ?>
        </div>
    </div>
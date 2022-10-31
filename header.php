<!doctype html>
<html id="no_margin" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="icon" href="<?php //echo get_template_directory_uri(); ?>/images/favico.png" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="main_header">
    <div class="mc-container">
        <div class="main_header_contain">
            <div class="mc-row mc-jc-space-between mc-align-center">
                <a href=<?php echo site_url(); ?> class="logo">
                    <img src=<?php echo get_field("logo","option"); ?> alt="Logo">
                </a>
                <div class="right-header">
                    <div class="menu_desktop">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                            ) );
                        ?>
                    </div>
                    <div class="icon-more-menu" id="showAllCateMenu">
                        ...
                    </div>
                    <div class="icon-close-mega-menu" id="closeAllCateMenu">
                        x
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<div class="mc_mega_all_menu">
    <div class="mc-container">
        <div class="mc_mega_all_menu_contain">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                ) );
            ?>
        </div>
    </div>
</div>
<div class="bg-overlay-mega-menu mc-fade-in">

</div>
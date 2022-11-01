<section class="mc_slider_banner">
    <div class="mc-container">
        <?php 
            if( have_rows('list_banner') ):
        ?>
        <div class="slider-banner-contain">
            <?php 
                while( have_rows('list_banner') ) : the_row();
            ?>
            <div class="item-slider-banner">
                <a href="<?php echo get_sub_field("link_banner_bond_post"); ?>">
                    <img class="dis-block" src="<?php echo get_sub_field("mc_banner_slider"); ?>" alt="<?php echo get_sub_field("title_on_banner_mc"); ?>">
                    <img class="dis-none" src="<?php echo get_sub_field("banner_mobile_mc_slider"); ?>" alt="<?php echo get_sub_field("title_on_banner_mc"); ?>">
                    <div class="content-on-banner-slider">
                        <div class="title-on-banner-slider">
                            <?php echo get_sub_field("title_on_banner_mc"); ?>
                        </div>
                        <div class="btn-read-now">
                            Xem Ngay
                        </div>
                    </div>
                    
                </a>
            </div>
            <?php 
                 endwhile;
            ?>
        </div>
        <?php 
            endif;
        ?>
    </div>
</section>
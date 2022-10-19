<section class="main_slider">
    <div class="main_slider_contain owl-carousel owl-theme">
        <?php 
        if(have_rows('slider_main_repeater')) :
        while(have_rows('slider_main_repeater')) : the_row(); ?>
        <div class="slide-area parallax-bg fix"
            style="background: rgba(0, 0, 0, 0) url(<?php echo get_sub_field('image_slider'); ?>) no-repeat scroll bottom center / cover">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="intro-content">
                                <div class="slide-content text-center">
                                    <span class="title1">Makeup Artist & Fashion desginer</span>
                                    <h1 class="title2">Angels Amelie</h1>
                                    <div class="slider-button">
                                        <a class="slide-btn" href="#">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;endif; ?>
    </div>
</section>
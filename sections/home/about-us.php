<section id="about" class="about-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-images">
                    <div class="about-top-image">
                        <img class="ab-image" src="<?php echo get_field("img_about_us_left"); ?>" alt="image-about-us">
                        <div class="video-content">
                            <a href="<?php echo get_field("video_about_us"); ?>" class="video-play vid-zone">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-content">
                    <div class="about-headline">
                        <span class="side-head top-head"><?php echo get_field("about_us_sub_title"); ?></span>
                        <h3><?php echo get_field("about_us_title"); ?></h3>
                    </div>
                    <?php echo get_field("about_us_description"); ?>
                    <div class="sub-content">
                        <h4><?php echo get_field("achivement"); ?></h4>
                        <div class="award-all">
                            <div class="award-carousel owl-carousel owl-theme">
                                <?php 
                                if(have_rows('achivement_reapeter')) :
                                while(have_rows('achivement_reapeter')) : the_row(); ?>
                                <div class="single-award">
                                    <img src="<?php echo get_sub_field("image_achivement"); ?>" alt="image_achivement">
                                </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
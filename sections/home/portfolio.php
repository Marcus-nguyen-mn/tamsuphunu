<div id="portfolio" class="project-area bg-color-2 area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <span class="top-head"><?php echo get_field("sub_title_portfolio"); ?></span>
                    <h3><?php echo get_field("title_portfolio"); ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-all">
                <?php 
                if(have_rows('portfolio_repeater')) :
                while(have_rows('portfolio_repeater')) : the_row(); ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-lightbox="roadtrip"
                                href="<?php echo get_sub_field("image_portfolio"); ?>">
                                <img src="<?php echo get_sub_field("image_portfolio"); ?>" alt="image-portfolio" />
                                <i class="ti-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                    endif; ?>
            </div>
        </div>
    </div>
</div>
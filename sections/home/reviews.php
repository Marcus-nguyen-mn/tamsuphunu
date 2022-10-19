<div class="reviews-area bg-color-2 fix area-padding">
    <div class="container">
        <div class="row">
            <div class="reviews-top">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="section-headline white-headline">
                        <div class="all-headline">
                            <span class=" side-head top-head"><?php echo get_field("review_sub_title"); ?></span>
                            <h3><?php echo get_field("review_title"); ?></h3>
                            <p><?php echo get_field("review_desc"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="reviews-content">
                        <!-- start testimonial carousel -->
                        <div class="testimonial-carousel loop  owl-carousel owl-theme item-indicator">
                            <?php 
                            if(have_rows('review_repeater')) :
                            while(have_rows('review_repeater')) : the_row(); ?>
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                        <p><?php echo get_sub_field("review_content"); ?></p>
                                    </div>
                                    <div class="testi-img ">
                                        <div class="guest-details">
                                            <h4><?php echo get_sub_field("name_client_review"); ?></h4>
                                            <span class="guest-rev">Clients - <a href="#">General
                                                    customer</a></span>
                                        </div>
                                    </div>
                                </div>
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
<!-- End testimonials end -->
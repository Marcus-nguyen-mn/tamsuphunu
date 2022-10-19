<section id="services" class="services-area bg-color-2 area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <span class="top-head"><?php echo get_field("sub_title_service"); ?></span>
                    <h3><?php echo get_field("title_service"); ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all-services">
                <?php 
                $args =  array( 
                    'post_status' => 'publish',
                    'post_type' => 'service',
                    'posts_per_page' => 6, 
                );
                $query_service = new WP_Query( $args );
                if ( $query_service->have_posts() ) :
                while ( $query_service->have_posts() ) : $query_service->the_post();
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?php echo get_permalink(); ?>" class="single-services">
                        <div class="main-services">
                            <div class="services-content">
                                <h4><?php echo get_the_title(); ?></h4>
                            </div>
                            <div class="services-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image-service">
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
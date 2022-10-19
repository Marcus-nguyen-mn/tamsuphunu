<div id="blog" class="blog-area bg-color-2 area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <span class="top-head">Latest blog</span>
                    <h3>Magazine news</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid home-blog">
                <!-- Start single blog -->
                <?php 
                    $args = array( 
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3
                    );
                    $wp_query = new WP_Query($args);
                    if($wp_query->have_posts()) :
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <a class="image-scale" href="<?php echo get_permalink(); ?>">
                                <?php echo get_the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="admin-type">
                                    <i class="fas fa-user-shield"></i>
                                    Admin
                                </span>
                                <span class="date-type">
                                    <i class="fas fa-table"></i>
                                    20 july, 2019
                                </span>
                                <span class="comments-type">
                                    <i class="far fa-eye"></i>
                                    13
                                </span>
                            </div>
                            <a href="<?php echo get_permalink(); ?>">
                                <h4><?php echo get_the_title(); ?></h4>
                            </a>
                            <a class="blog-btn" href="<?php echo get_permalink(); ?>">Read more</a>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                endif;
                wp_reset_postdata();
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</div>
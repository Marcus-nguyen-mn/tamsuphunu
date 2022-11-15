<section class="fashion-4">
    <div class="mc-container">
        <div class="fashion-4-contain">
            <div class="mc-title-template">
                TƯ VẤN MẶC ĐẸP 
            </div>
            <div class="show_news_sec_1">
                <div class="mc-row mc-mg--15">
                    <div class="mc-col-9 mc-col-md-12 mc-col-sm-12 mc-pdx-15">
                        <div class="mc-row mc-mg--15">
                            <div class="mc-col-8 mc-col-md-8 mc-col-sm-12 mc-pdx-15">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'tu-van-mac-dep',
                                        'post_type'=>  'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 1,
                                    );
                                    $post_one_1 = new WP_Query( $args );
                                    if ( $post_one_1->have_posts() ) :
                                    while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="ns-first-post">
                                    <div class="ns-thumb-post">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                    </div>
                                    <div class="ns-title-post">
                                        <?php echo get_the_title(); ?>
                                    </div>
                                    <div class="ns-excerpt-post">
                                        <?php echo get_the_excerpt(); ?>
                                    </div>
                                </a>
                                <?php 
                                    endwhile;
                                    endif;
                                    wp_reset_postdata();
                                ?>
                            </div>
                            <div class="mc-col-4 mc-col-md-4 mc-col-sm-12 mc-pdx-15">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'tu-van-mac-dep',
                                        'post_type'=>  'post',
                                        'post_status' => 'publish',
                                        'offset' => 1, 
                                        'posts_per_page' => 2,
                                    );
                                    $post_one_1 = new WP_Query( $args );
                                    if ( $post_one_1->have_posts() ) :
                                    while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="ns-first-post-c2">
                                    <div class="ns-thumb-post-c2">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                    </div>
                                    <div class="ns-title-post-c2">
                                        <?php echo get_the_title(); ?>
                                    </div>
                                </a>
                                <?php 
                                    endwhile;
                                    endif;
                                    wp_reset_postdata();
                                ?>
                                
                            </div>
                            <div class="mc-col-12 mc-col-md-12 mc-col-sm-12 mc-pdx-15">
                                <div class="news-thtm-1">
                                    <div class="mc-row mc-mg--15">
                                        <?php 
                                            $args = array( 
                                                'category_name' => 'tu-van-mac-dep',
                                                'post_type'=>  'post',
                                                'offset' => 3, 
                                                'post_status' => 'publish',
                                                'posts_per_page' => 3,
                                            );
                                            $post_one_1 = new WP_Query( $args );
                                            if ( $post_one_1->have_posts() ) :
                                            while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="thtm-mgb mc-col-4 mc-col-sm-12 mc-pdx-15">
                                            <div class="thtm-thumb-post">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                            </div>
                                            <div class="thtm-title-post">
                                                <?php echo get_the_title(); ?>
                                            </div>
                                        </a>
                                        <?php 
                                            endwhile;
                                            endif;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mc-col-3 mc-col-md-12 mc-pdx-15 banner_qc_news_1_hid">
                        <div class="banner_qc_news_1">
                            <a href="<?php echo get_field("link_fashion_banner_qc_3"); ?>">
                                <img src="<?php echo get_field("fashion_banner_qc_3"); ?>" alt="<?php echo get_field("fashion_banner_qc_3"); ?>">
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
        </div>
    </div>
</section>
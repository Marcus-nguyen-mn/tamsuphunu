<section class="news_sec_1 kitchen_1">
    <div class="mc-container">
        <div class="kitchen_1_contain bordr-bt-section">
            <div class="mc-title-template">
                Món ngon mỗi ngày
            </div>
            <div class="show_news_sec_1">
                <div class="mc-row mc-mg--15">
                    <div class="mc-col-6 mc-col-md-8 mc-col-sm-12 mc-pdx-15">
                        <?php 
                            $args = array( 
                                'category_name' => 'mon-ngon-moi-ngay',
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
                        <div class="news-thtm-1">
                            <div class="mc-row mc-mg--15">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'mon-ngon-moi-ngay',
                                        'post_type'=>  'post',
                                        'offset' => 1, 
                                        'post_status' => 'publish',
                                        'posts_per_page' => 2,
                                    );
                                    $post_one_1 = new WP_Query( $args );
                                    if ( $post_one_1->have_posts() ) :
                                    while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="thtm-mgb mc-col-6 mc-col-sm-12 mc-pdx-15">
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
                    <div class="mc-col-3 mc-col-md-4 mc-col-sm-12 mc-pdx-15">
                        <?php 
                            $args = array( 
                                'category_name' => 'mon-ngon-moi-ngay',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'offset' => 3, 
                                'posts_per_page' => 1,
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
                        <div class="nc-list-before-first-c2">
                            <?php 
                                $args = array( 
                                    'category_name' => 'mon-ngon-moi-ngay',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'offset' => 4, 
                                    'posts_per_page' => 4,
                                );
                                $post_one_1 = new WP_Query( $args );
                                if ( $post_one_1->have_posts() ) :
                                while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="mc-row mc-mg--10">
                                <div class="ns-thumb-post-horizontal-c2 mc-col-6 mc-pdx-10">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="ns-title-post-horizontal-c2 mc-col-6 mc-pdx-10">
                                    <?php echo wp_trim_words( get_the_title(), 14, '...' ); ?>
                                </div>
                            </a>
                            <?php 
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="mc-col-3 mc-pdx-15 banner_qc_news_1_hid">
                        <div class="banner_qc_news_1">
                            <a href="<?php echo get_field("mc_kitchen_link_banner_qc_1"); ?>">
                                <img src="<?php echo get_field("mc_kitchen_banner_qc_1"); ?>" alt="<?php echo get_field("mc_kitchen_banner_qc_1"); ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
        </div>
    </div>
</section>
<section class="fashion-3">
    <div class="mc-container">
        <div class="fashion-3-contain">
            <div class="mc-title-template">
                THỜI TRANG SAO VIỆT								
            </div>
            <div class="mc-row mc-mg--15">
                <div class="mc-col-9 mc-col-sm-12 mc-pdx-15">
                    <div class="news-thtm-1">
                        <div class="mc-row mc-mg--15">
                            <?php 
                                $args = array( 
                                    'category_name' => 'thoi-trang-sao-viet',
                                    'post_type'=>  'post',
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
                    <div class="news-thtm-2">
                        <?php 
                            $args = array( 
                                'category_name' => 'thoi-trang-sao-viet',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'offset' => 3,
                                'posts_per_page' => 4,
                            );
                            $post_one_1 = new WP_Query( $args );
                            if ( $post_one_1->have_posts() ) :
                            while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="mc-row mc-mg--15">
                            <div class="mc-col-4 mc-pdx-15">
                                <div class="thtm2-thumb-post">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                            </div>
                            <div class="mc-col-8 mc-pdx-15">
                                <div class="thtm-2-title-post">
                                    <?php echo get_the_title(); ?>
                                </div>
                                <div class="thtm-2-date-post">
                                    <?php echo get_the_date( 'Y-m-d' ); ?>
                                </div>
                                <div class="thtm-2-excerpt-post">
                                    <?php echo get_the_excerpt(); ?>
                                </div>
                            </div>
                        </a>
                        <?php 
                            endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="mc-col-3 mc-col-sm-12 mc-pdx-15 bn-fas-none">
                    <div class="banner_qc_news_1">
                        <a class="stk-banenr" href="<?php echo get_field("link_fashion_banner_qc_2"); ?>">
                            <img src="<?php echo get_field("fashion_banner_qc_2"); ?>" alt="<?php echo get_field("fashion_banner_qc_2"); ?>">
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
        </div>
    </div>
</section>
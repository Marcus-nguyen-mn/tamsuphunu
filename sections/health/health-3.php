<section class="gt_sec_4">
    <div class="mc-container">
        <div class="gt_sec_4_contain">
            <div class="mc-row mc-mg--15">
                <div class="mg-csb mc-col-9 mc-col-sm-12 mc-pdx-15">
                    <div class="mc-title-template">
                        SỐNG KHỎE				
                    </div>
                    <div class="news-thtm-2">
                        <?php 
                            $args = array( 
                                'category_name' => 'song-khoe',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 4,
                            );
                            $post_one_1 = new WP_Query( $args );
                            if ( $post_one_1->have_posts() ) :
                            while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="mc-row mc-mg--15">
                            <div class="mc-col-4 mc-col-sm-12 mc-pdx-15">
                                <div class="thtm2-thumb-post">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                            </div>
                            <div class="mc-col-8 mc-col-sm-12 mc-pdx-15">
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
                    <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
                </div>
                <div class="mc-col-3 mc-col-sm-12 mc-pdx-15">
                    <div class="banner_qc_news_1">
                        <a href="<?php echo get_field("mc_health_link_qc_2"); ?>">
                            <img src="<?php echo get_field("mc_health_qc_2"); ?>" alt="<?php echo get_field("mc_health_qc_2"); ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
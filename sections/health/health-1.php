<section class="health_one">
    <div class="mc-container">
        <div class="health_one_contain bordr-bt-section">
            <div class="mc-title-template">
                TIN Y TẾ
            </div>
            <div class="mc-row mc-mg--15">
                <div class="mc-col-9 mc-col-sm-12 mc-pdx-15">
                    <div class="show_pth">
                        <?php 
                            $args = array( 
                                'category_name' => 'tin-y-te',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 1,
                            );
                            $post_one_1 = new WP_Query( $args );
                            if ( $post_one_1->have_posts() ) :
                            while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="sec_1_pth_one_post mc-row mc-mg--15">
                            <div class="mc-col-6 mc-col-sm-12 mc-pdx-15">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                            </div>
                            <div class="mc-col-6 mc-col-sm-12 mc-pdx-15">
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
                        <div class="sec_1_pth_many_post mc-row mc-mg--15">
                            <?php 
                                $args = array( 
                                    'category_name' => 'tin-y-te',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'offset' => 1,
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
                <div class="mc-col-3 mc-col-sm-12 mc-pdx-15 bn-fas-none">
                    <div class="banner_qc_news_1">
                        <a href="<?php echo get_field("mc_health_link_qc_1"); ?>">
                            <img src="<?php echo get_field("mc_health_qc_1"); ?>" alt="<?php echo get_field("mc_health_qc_1"); ?>">
                        </a>
                    </div>
                </div>
            </div>
            
            <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
        </div>
    </div>
</section>
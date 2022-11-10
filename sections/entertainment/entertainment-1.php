<section class="show_pth_sec_1">
    <div class="mc-container">
        <div class="show_pth_sec_1_contain">
            <div class="mc-title-template">
                PHIM TRUYỀN HÌNH
            </div>
            <div class="mc-row mc-mg--15">
                <div class="mc-col-9 mc-col-sm-12 mc-pdx-15">
                    <div class="show_pth">
                        <?php 
                            $args = array( 
                                'category_name' => 'phim-truyen-hinh',
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
                                    'category_name' => 'phim-truyen-hinh',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'offset' => 1,
                                    'posts_per_page' => 6,
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
                <div class="mc-col-3 mc-col-sm-12 mc-pdx-15">
                    <div class="banner_qc_news_1">
                        <a href="<?php echo get_field("mcgt_link_banner_qc_1"); ?>">
                            <img src="<?php echo get_field("mcgt_banner_qc"); ?>" alt="<?php echo get_field("mcgt_banner_qc"); ?>">
                        </a>
                    </div>
                </div>
            </div>
            
            <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
        </div>
    </div>
</section>
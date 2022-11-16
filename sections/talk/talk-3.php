<section class="fashion_one talk_two">
    <div class="mc-container">
        <div class="talk_two_contain bordr-bt-section">
            <div class="mc-title-template">
                CHUYỆN PHÒNG THE
            </div>
            <div class="show-fashion-one">
                <div class="mc-row mc-mg--15">
                    <div class="mc-col-9 mc-col-sm-12 mc-pdx-15">
                        <div class="mc-row mc-mg--15">
                            <div class="mc-col-6 mc-col-md-12 mc-pdx-15">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'chuyen-phong-the',
                                        'post_type'=>  'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 1,
                                    );
                                    $post_one_1 = new WP_Query( $args );
                                    if ( $post_one_1->have_posts() ) :
                                    while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="fas-first-post">
                                    <div class="fas-thumb-post">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                    </div>
                                    <div class="fas-title-post">
                                        <?php echo get_the_title(); ?>
                                    </div>
                                    <div class="fas-excerpt-post">
                                        <?php echo get_the_excerpt(); ?>
                                    </div>
                                </a>
                                <?php 
                                    endwhile;
                                    endif;
                                    wp_reset_postdata();
                                ?>
                            </div>
                            <div class="mc-col-6 mc-col-md-12 mc-pdx-15">
                                <div class="news-thtm-1">
                                    <div class="mc-row mc-mg--10">
                                        <?php 
                                            $args = array( 
                                                'category_name' => 'chuyen-phong-the',
                                                'post_type'=>  'post',
                                                'post_status' => 'publish',
                                                'offset' => 1, 
                                                'posts_per_page' => 6,
                                            );
                                            $post_one_1 = new WP_Query( $args );
                                            if ( $post_one_1->have_posts() ) :
                                            while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="thtm-mgb mc-col-6 mc-col-sm-12 mc-pdx-10">
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
                        <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
                    </div>
                    <div class="mc-col-3 mc-col-sm-12 mc-pdx-15 bn-fas-none">
                        <div class="banner_qc_news_1">
                            <a href="<?php echo get_field("mc_talk_link_banner_qc_2"); ?>">
                                <img src="<?php echo get_field("mc_talk_banner_qc_2"); ?>" alt="<?php echo get_field("mc_talk_banner_qc_2"); ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
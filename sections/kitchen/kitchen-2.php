<section class="fashion_one talk_two">
    <div class="mc-container">
        <div class="talk_two_contain bordr-bt-section">
            <div class="show-fashion-one">
                <div class="mc-row mc-mg--15">
                    <div class="mc-col-9 mc-col-sm-12 mc-pdx-15">
                        <div class="mc-title-template">
                            BÀI VIẾT NỔI BẬT
                        </div>
                        <div class="news-thtm-2">
                            <?php 
                                $args = array( 
                                    'category_name' => 'bep',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
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
                        <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
                    </div>
                    <div class="mc-col-3 mc-col-sm-12 mc-pdx-15">
                        <div class="mc-title-template">
                            MẸO HAY NHÀ BẾP
                        </div>
                        <?php 
                            $args = array( 
                                'category_name' => 'meo-hay-nha-bep',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
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
                                    'category_name' => 'meo-hay-nha-bep',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'offset' => 1, 
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
                        <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
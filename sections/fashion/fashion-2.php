<section class="fashion-2">
    <div class="mc-container">
        <div class="fashion-2-contain">
            <div class="mc-title-template">
               TIN NỔI BẬT							
            </div>
            <div class="mc-row mc-mg--15">
                <div class="mc-col-12 mc-col-sm-12 mc-pdx-15">
                    <div class="news-thtm-1">
                        <div class="mc-row mc-mg--15">
                            <?php 
                                $args = array( 
                                    'category_name' => 'thoi-trang',
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
                </div>
            </div>
            <a href="#" class="btn-read-more">Xem thêm <span style="font-size:20px;">&#187;</span></a>
        </div>
    </div>
</section>
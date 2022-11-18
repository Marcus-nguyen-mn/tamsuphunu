<section class="show_pth_sec_2 kitchen_3">
    <div class="mc-container">
        <div class="show_pth_sec_2_contain">
            <div class="mc-row mc-mg--15">
                <div class="mc-col-6 mc-col-sm-12 mc-pdx-15">
                    <div class="mc-first-before-three-af">
                        <div class="mc-title-template">
                            THỰC ĐƠN GIẢM CÂN
                        </div>
                        <div class="mc-after-post-list">
                            <?php 
                                $args = array( 
                                    'category_name' => 'thuc-don-giam-can',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                );
                                $post_one_list = new WP_Query( $args );
                                if ( $post_one_list->have_posts() ) :
                                while ( $post_one_list->have_posts() ) : $post_one_list->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="mc-row mc-mg--10 mc-custom-mgb">
                                <div class="mc-col-5 img-st-effect mc-pdx-10">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="mc-col-7 mc-pdx-10">
                                    <div class="after-post-title">
                                        <?php echo get_the_title(); ?>
                                    </div>
                                    <div class="after-post-desc">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
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
                    
                </div>
                <div class="mc-col-6 mc-col-sm-12 mc-pdx-15">
                    <div class="mc-first-before-three-af">
                        <div class="mc-title-template">
                            ĐỊA ĐIỂM ĂN UỐNG
                        </div>
                        <div class="mc-after-post-list">
                            <?php 
                                $args = array( 
                                    'category_name' => 'dia-diem-an-uong',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                );
                                $post_one_list = new WP_Query( $args );
                                if ( $post_one_list->have_posts() ) :
                                while ( $post_one_list->have_posts() ) : $post_one_list->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="mc-row mc-mg--10 mc-custom-mgb">
                                <div class="mc-col-5 img-st-effect mc-pdx-10">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="mc-col-7 mc-pdx-10">
                                    <div class="after-post-title">
                                        <?php echo get_the_title(); ?>
                                    </div>
                                    <div class="after-post-desc">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
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
                    
                </div>
            </div>
        </div>
    </div>
</section>
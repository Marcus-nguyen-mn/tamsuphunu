<section class="mc_sec_4">
    <div class="mc-container">
        <div class="mc-row mc-mg--15">
            <div class="mc-col-9 mc-pdx-15">
                <div class="mc-row mc-mg--15">
                    <div class="mc-col-6 mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Tin Tức
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'tin-tuc',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 1,
                                );
                                $post_one_1 = new WP_Query( $args );
                                if ( $post_one_1->have_posts() ) :
                                while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="mc-first-before">
                                <div class="mc-first-before-thumb">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="mc-first-before-title">
                                    <?php echo get_the_title(); ?>
                                </div>
                            </a>
                            <?php 
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            <div class="mc-after-post-list">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'tin-tuc',
                                        'post_type'=>  'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 3,
                                        'offset' => 1, 
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
                        </div>
                    </div>
                    <div class="mc-col-6 mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Giải trí
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'giai-tri',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 1,
                                );
                                $post_one_1 = new WP_Query( $args );
                                if ( $post_one_1->have_posts() ) :
                                while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="mc-first-before">
                                <div class="mc-first-before-thumb">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="mc-first-before-title">
                                    <?php echo get_the_title(); ?>
                                </div>
                            </a>
                            <?php 
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            <div class="mc-after-post-list">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'giai-tri',
                                        'post_type'=>  'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 3,
                                        'offset' => 1, 
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="mc-col-3 mc-pdx-15">

            </div>
        </div>
    </div>
</section>
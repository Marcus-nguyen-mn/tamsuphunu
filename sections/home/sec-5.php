<section class="mc_sec_5">
    <div class="mc-container">
        <div class="mc-row mc-mg--15">
            <div class="mc-col-9 mc-pdx-15 mc-col-lgm-12">
                <div class="mc-row mc-mg--15">
                    <div class="mc-col-6 mc-col-sm-12 mc-sec-5-mgb mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Hôn nhân và gia đình
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'hon-nhan-va-gia-dinh',
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
                                        'category_name' => 'hon-nhan-va-gia-dinh',
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
                    <div class="mc-col-6 mc-col-sm-12 mc-sec-5-mgb mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Tâm sự
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'tam-su',
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
                                        'category_name' => 'tam-su',
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
                    <div class="mc-col-6 mc-col-sm-12 mc-sec-5-mgb mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Thời trang
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'thoi-trang',
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
                                        'category_name' => 'thoi-trang',
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
                    <div class="mc-col-6 mc-col-sm-12 mc-sec-5-mgb mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Quiz
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'quiz',
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
                                        'category_name' => 'quiz',
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
                    <div class="mc-col-6 mc-col-sm-12 mc-sec-5-mgb mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Mẹ và bé
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'me-va-be',
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
                                        'category_name' => 'me-va-be',
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
                    <div class="mc-col-6 mc-col-sm-12 mc-sec-5-mgb mc-pdx-15">
                        <div class="mc-first-before-three-af">
                            <div class="mc-dis-title-muc">
                                <div class="img-title-mc">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                                </div>
                                <div class="mc-title-muc">
                                    Sức khỏe
                                </div>
                            </div>
                            <?php 
                                $args = array( 
                                    'category_name' => 'suc-khoe',
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
                                        'category_name' => 'suc-khoe',
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
                    <div class="mc-col-12 mc-col-sm-12 mc-sec-5-mgb mc-pdx-15 mc-left-customize-bep">
                        <div class="mc-dis-title-muc">
                            <div class="img-title-mc">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-title.png" alt="img-title">
                            </div>
                            <div class="mc-title-muc">
                                Bếp
                            </div>
                        </div>
                        <div class="mc-first-before-three-af mc-row mc-mg--15">
                            <div class="mc-col-6 mc-col-sm-12 mc-pdx-15">
                                
                                <?php 
                                    $args = array( 
                                        'category_name' => 'bep',
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
                            </div>
                            <div class="mc-after-post-list mc-col-6 mc-col-sm-12 mc-pdx-15">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'bep',
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
            <div class="mc-col-3 mc-pdx-15 mc-col-lgm-12">
                <div class="por-right-sb-mc">
                    <div class="mc-right-sb-cover">
                        <div class="red-slider">
                            <div class="title_red_slider">
                                Chuyện tử tế
                            </div>
                            <div class="slider-while">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'chuyen-tu-te',
                                        'post_type'=>  'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 3,
                                        'offset' => 1, 
                                    );
                                    $post_one_list = new WP_Query( $args );
                                    if ( $post_one_list->have_posts() ) :
                                    while ( $post_one_list->have_posts() ) : $post_one_list->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="item-slider-red">
                                    <div class="thumb-slider-red">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                    </div>
                                    <div class="title-post-on-slider-red">
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
                        <div class="mc-sb-banner-home">
                            <a href="<?php echo get_field("mc_link_banner_ad"); ?>">
                                <img src="<?php echo get_field("mc_banner_side_bar"); ?>" alt=" <?php echo get_field("mc_banner_side_bar"); ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
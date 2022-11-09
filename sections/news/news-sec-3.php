<section class="news_sec_3">
    <div class="mc-container">
        <div class="news-sec-3-contain">
            <div class="mc-title-template">
                THẾ GIỚI QUANH TA
            </div>
            <div class="show_news_sec_3">
                <div class="mc-row mc-mg--15">
                    <div class="mc-col-9 mc-col-md-12 mc-col-sm-12 mc-pdx-15">
                        <div class="left-news-3">
                            <div class="mc-row mc-mg--15">
                                <?php 
                                    $args = array( 
                                        'category_name' => 'the-gioi-quanh-ta',
                                        'post_type'=>  'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 6,
                                    );
                                    $post_one_1 = new WP_Query( $args );
                                    if ( $post_one_1->have_posts() ) :
                                    while ( $post_one_1->have_posts() ) : $post_one_1->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="mc-col-6 mc-col-sm-12 mc-pdx-15 tgqt-3">
                                    <div class="thtm-3-title-post">
                                        <?php echo get_the_title(); ?>
                                    </div>
                                    <div class="mc-row mc-mg--10">
                                        <div class="mc-col-6 mc-pdx-10">
                                            <div class="thtm3-thumb-post">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                            </div>
                                        </div>
                                        <div class="mc-col-6 mc-pdx-10">
                                            <div class="thtm-3-excerpt-post">
                                                <?php echo get_the_excerpt(); ?>
                                            </div>
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
                    <div class="mc-col-3 mc-col-md-12 mc-col-sm-12 mc-pdx-15">
                        <div class="banner_qc_news_3">
                            <a href="<?php echo get_field("link_banner_qc_2_news"); ?>">
                                <img src="<?php echo get_field("banner_qc_2_news"); ?>" alt="<?php echo get_field("banner_qc_2_news"); ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
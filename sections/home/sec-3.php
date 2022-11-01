<section class="mc_home_sec_3">
    <div class="mc-container">
        <div class="mc_home_sec_3_contain">
            <div class="mc-row mc-mg--15">
                <div class="mc-col-3 mc-pdx-15 mc-col-lg-6 mc-col-sm-12">
                    <div class="mchs3_content">
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
                        <a href="<?php the_permalink(); ?>" class="mchs3_content_cover hover14">
                            <div class="mchs3_thumb_one_post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                            </div>
                            <div class="mchs3_title_one_post">
                                <?php echo get_the_title(); ?>
                            </div>
                        </a>
                        <?php 
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                        <div class="mchs3_content_list">
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
                            <a href="<?php the_permalink(); ?>" class="mc-row mc-jc-space-between hover14">
                                <div class="mccs-5">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="mccs-7">
                                    <div class="mchs3_title_list_post">
                                        <?php echo wp_trim_words( get_the_title(), 7, '...' ); ?>
                                    </div>
                                    <div class="mchs3_desc_list_post">
                                    <?php echo wp_trim_words(get_the_excerpt(), 7); ?>
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

                <div class="mc-col-3 mc-pdx-15 mc-col-lg-6 mc-col-sm-12">
                    <div class="mchs3_content">
                        <?php 
                            $args = array( 
                                'category_name' => 'tam-su',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 1,
                            );
                            $post_one_12 = new WP_Query( $args );
                            if ( $post_one_12->have_posts() ) :
                            while ( $post_one_12->have_posts() ) : $post_one_12->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="mchs3_content_cover hover14">
                            <div class="mchs3_thumb_one_post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                            </div>
                            <div class="mchs3_title_one_post">
                                <?php echo get_the_title(); ?>
                            </div>
                        </a>
                        <?php 
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                        <div class="mchs3_content_list">
                            <?php 
                                $args = array( 
                                    'category_name' => 'tam-su',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                    'offset' => 1, 
                                );
                                $post_one_list2 = new WP_Query( $args );
                                if ( $post_one_list2->have_posts() ) :
                                while ( $post_one_list2->have_posts() ) : $post_one_list2->the_post();
                            ?> 
                            <a href="<?php the_permalink(); ?>" class="mc-row mc-jc-space-between hover14">
                                <div class="mccs-5">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="mccs-7">
                                    <div class="mchs3_title_list_post">
                                        <?php echo wp_trim_words( get_the_title(), 7, '...' ); ?>
                                    </div>
                                    <div class="mchs3_desc_list_post">
                                    <?php echo wp_trim_words(get_the_excerpt(), 7); ?>
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

                <div class="mc-col-3 mc-pdx-15 mc-col-lg-6 mc-col-sm-12">
                    <div class="mchs3_content">
                        <?php 
                            $args = array( 
                                'category_name' => 'hon-nhan-va-gia-dinh',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 1,
                            );
                            $post_one_13 = new WP_Query( $args );
                            if ( $post_one_13->have_posts() ) :
                            while ( $post_one_13->have_posts() ) : $post_one_13->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="mchs3_content_cover hover14">
                            <div class="mchs3_thumb_one_post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                            </div>
                            <div class="mchs3_title_one_post">
                                <?php echo get_the_title(); ?>
                            </div>
                        </a>
                        <?php 
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                        <div class="mchs3_content_list">
                            <?php 
                                $args = array( 
                                    'category_name' => 'hon-nhan-va-gia-dinh',
                                    'post_type'=>  'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                    'offset' => 1, 
                                );
                                $post_one_list3 = new WP_Query( $args );
                                if ( $post_one_list3->have_posts() ) :
                                while ( $post_one_list3->have_posts() ) : $post_one_list3->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="mc-row mc-jc-space-between hover14">
                                <div class="mccs-5">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="mccs-7">
                                    <div class="mchs3_title_list_post">
                                        <?php echo wp_trim_words( get_the_title(), 7, '...' ); ?>
                                    </div>
                                    <div class="mchs3_desc_list_post">
                                    <?php echo wp_trim_words(get_the_excerpt(), 7); ?>
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

                <div class="mc-col-3 mc-pdx-15 mc-col-lg-6 mc-col-sm-12">
                    <div class="mchs3_content">
                        <?php 
                            $args = array( 
                                'category_name' => 'me-va-be',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 1,
                            );
                            $post_one_14 = new WP_Query( $args );
                            if ( $post_one_14->have_posts() ) :
                            while ( $post_one_14->have_posts() ) : $post_one_14->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="mchs3_content_cover hover14">
                            <div class="mchs3_thumb_one_post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                            </div>
                            <div class="mchs3_title_one_post">
                                <?php echo get_the_title(); ?>
                            </div>
                        </a>
                        <?php 
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                        <div class="mchs3_content_list">
                        <?php 
                            $args = array( 
                                'category_name' => 'me-va-be',
                                'post_type'=>  'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                                'offset' => 1, 
                            );
                            $post_one_list4 = new WP_Query( $args );
                            if ( $post_one_list4->have_posts() ) :
                            while ( $post_one_list4->have_posts() ) : $post_one_list4->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="mc-row mc-jc-space-between hover14">
                            <div class="mccs-5">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php echo get_the_title(); ?>">
                            </div>
                            <div class="mccs-7">
                                <div class="mchs3_title_list_post">
                                    <?php echo wp_trim_words( get_the_title(), 7, '...' ); ?>
                                </div>
                                <div class="mchs3_desc_list_post">
                                    <?php echo wp_trim_words(get_the_excerpt(), 7); ?>
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
    </div>
</section>
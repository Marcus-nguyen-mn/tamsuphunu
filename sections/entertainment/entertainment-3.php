<section class="show_gt_sec_3">
    <div class="mc-container">
        <div class="show_gt_sec_3_contain">
            <div class="mc-title-template">
                Video Nổi Bật
            </div>
            <div class="list_video_highlight">
                <div class="mc-row mc-mg--15">
                <?php
                $select_video_hl_gt = get_field('select_video_hl_gt');
                if( $select_video_hl_gt ): ?>
                    <?php foreach( $select_video_hl_gt as $video ): 

                        setup_postdata($video); ?>
                        <a href="<?php the_permalink(); ?>" class="mg_item_video mc-col-3 mc-col-md-6 mc-pdx-15">
                            <div class="item_video_highlight">
                                <div class="img_item_video_hl">
                                    <img src="<?php echo get_the_post_thumbnail_url($video); ?>" alt=" <?php echo get_the_title(); ?>">
                                </div>
                                <div class="icon_item_video_hl">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play.png" alt="Icon Play">
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <?php 
                    wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
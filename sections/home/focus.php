<section class="mc_focus">
    <div class="mc-container">
        <div class="mc-row mc-jc-space-between mc-align-center">
            <div class="mc-col-8 mc-col-sm-12">
                <div class="mc-forcus-left">
                    <div class="mc-row mc-align-center">
                        <div class="mc-col-2 mc-col-sm-4">
                            <div class="focus-title">
                                <?php echo "Tiêu điểm"; ?>
                            </div>
                        </div>
                        <div class="mc-col-10 mc-col-sm-8">
                            <div class="slider-focus">
                            <?php
                            $focus_posts = get_field('choose_posts_focus','option');
                            if( $focus_posts ): ?>
                                <?php foreach( $focus_posts as $post ): ?>
                                <div class="item-slider-focus">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <?php endforeach; ?>
                                <?php 
                                wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mc-col-4 mc-col-sm-12">
                <div class="mc-form-search">
                    <form action="<?php echo get_home_url(); ?>/" method="get">
                        <div class="sty_input">
                            <input type="text" id="s" name="s" class="form-control" value="" placeholder="Nội dung tìm kiếm">
                            <button type="submit" class ="sub-search-mc-header">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png" alt="Search">
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_header();
?>
<section class="default_single_post">
    <div class="banner_single">
        <img src="<?php echo get_field("banner_single_page","option"); ?>" alt="banner_single">
    </div>
    <div class="container">
        <div class="single_contain">
            <?php 
            if(have_posts()):
                while(have_posts()) : the_post();
            ?>
            <div class="breadcum-contain">
                <p><a href="<?php echo get_home_url(); ?>"><i class="fas fa-home"></i>&nbsp;Home
                        page</a>
                </p>
                <p><i class="fas fa-forward"></i></p>
                <p class="bre-title">
                    <?php
                        the_title();
                  ?>
                </p>
            </div>
            <div class="sg-row">
                <div class="sg-col-left">
                    <div class="detail_post">
                        <div class="title_sg_post"><?php the_title(); ?></div>
                        <div class="date-content">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="content-single">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="sg-col-right">
                    <div class="sidebar">
                        <a href="#" class="banner-sidebar">
                            <img src="<?php echo get_field('banner_right_single','option'); ?>" alt="banner-sidebar">
                        </a>
                        <div class="contain-sidebar">
                            <div class="title-post-lq">
                                Bài viết liên quan
                            </div>
                            <?php loop_single_related_post(4); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            endwhile;
                endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer();?>
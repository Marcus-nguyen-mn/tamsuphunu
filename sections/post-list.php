<a class="postlist" href="<?php the_permalink() ?>">
    <div class="postlist_container mc-row">
        <div class="post_item_img col-divide-4">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="post_item-content col-divide-8">
            <div class="mc-pd-post">
                <h4 class="post-item-title">
                    <?php the_title() ?>
                </h4>
                <div class="date">
                    <span>🕑</span> <span><?php echo get_the_date("m/d/Y"); ?></span>
                </div>
            </div>
        </div>
    </div>
</a>
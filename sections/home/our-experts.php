<div class="team-area bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <span class="top-head"><?php echo get_field("config_experts_sub_title"); ?></span>
                    <h3><?php echo get_field("experts_title"); ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-member">
                <?php 
                if(have_rows("experts_repeater")) :
                while(have_rows("experts_repeater")) : the_row() ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="<?php echo get_sub_field("image_expert"); ?>" alt="image_expert">
                            </a>
                        </div>
                        <div class="team-content text-center">
                            <h4><a href="#"><?php echo get_sub_field("expert_name"); ?></a></h4>
                            <p><?php echo get_sub_field("expert_position"); ?></p>
                            <ul class="social-icon">
                                <li><a class="facebook" href="<?php echo get_sub_field("social_ex_facebook"); ?>"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="<?php echo get_sub_field("social_ex_twitter"); ?>"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a class="instagram" href="<?php echo get_sub_field("social_ex_instagram"); ?>"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>
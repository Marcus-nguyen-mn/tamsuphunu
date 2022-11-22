<section class="mc_contact_two">
    <div class="mc-container">
        <div class="mc_contact_two_contain">
            <div class="mc_ct_two_title">
                Liên hệ với chúng tôi
            </div>
            <div class="mc-row">
                <?php 
                    if( have_rows('mc_contact_info_page_ctf','option') ):
                        while( have_rows('mc_contact_info_page_ctf','option') ) : the_row();
                ?>
                <div class="mc-col-4 mc-col-sm-12 ctf-mgb">
                    <div class="one-ctn-ctf-two">
                        <div class="one-ctn-ctf-two-img">
                            <img src="<?php echo get_sub_field("image_mc_contact_info_page_ctf","option"); ?>" alt="<?php echo get_sub_field("image_mc_contact_info_page_ctf","option"); ?>" />
                        </div>
                        <div class="one-ctn-ctf-two-name">
                            <?php echo get_sub_field("name_mc_contact_info_page_ctf","option"); ?>
                        </div>
                        <div class="one-ctn-ctf-two-nddetail">
                            <?php echo get_sub_field("content_mc_contact_info_page_ctf","option"); ?>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
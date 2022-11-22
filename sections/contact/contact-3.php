<section class="mc_contact_page_three">
    <div class="mc-container">
        <div class="mc_contact_page_three_contain">
            <div class="mc_ct_partner_title">
                Đối tác
            </div>
            <div class="slider-partner-contact-page">
                <?php 
                    if( have_rows('mcct_info_partner','option') ):
                        while( have_rows('mcct_info_partner','option') ) : the_row();
                ?>
                <div class="mcct-item-partner">
                    <a href="<?php echo get_sub_field("link_partner_mcct","option"); ?>">
                        <img src="<?php echo get_sub_field("img_mcct_partner","option"); ?>" alt="<?php echo get_sub_field("img_mcct_partner","option"); ?>">
                    </a>
                </div>
                <?php 
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
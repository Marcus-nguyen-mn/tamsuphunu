<div class="photo-area fix bg-color">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="all-photo">
                    <div class="photo-carousel owl-carousel owl-them">
                        <?php 
                            if(have_rows('img_lib_repeater')) :
                            while(have_rows('img_lib_repeater')) : the_row(); ?>
                        <div class="single-photo">
                            <img src="<?php echo get_sub_field("image_lib"); ?>" alt="img-lib" />
                            <a class="venobox" href="<?php echo get_sub_field("link_image_lib"); ?>"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <?php endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
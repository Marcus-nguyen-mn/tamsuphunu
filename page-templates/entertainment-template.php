<?php
/**
 * template name: Entertainment Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(5);
    get_template_part('sections/entertainment/entertainment-1'); 
    get_template_part('sections/entertainment/entertainment-2'); 
    get_template_part('sections/entertainment/entertainment-3');
    get_template_part('sections/entertainment/entertainment-4');
?>

<?php get_footer();?>
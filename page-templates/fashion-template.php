<?php
/**
 * template name: Fashion Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(6);
    get_template_part('sections/fashion/fashion-1'); 
?>

<?php get_footer();?>
<?php
/**
 * template name: Kitchen Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(11);
    get_template_part('sections/kitchen/kitchen-1');
    get_template_part('sections/kitchen/kitchen-2');
    get_template_part('sections/kitchen/kitchen-3');
?>

<?php get_footer();?>
<?php
/**
 * template name: Health Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(10);
    get_template_part('sections/health/health-1');
    get_template_part('sections/health/health-2');
    get_template_part('sections/health/health-3');
?>

<?php get_footer();?>
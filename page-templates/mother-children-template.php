<?php
/**
 * template name: Mother & Children Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(9);
    get_template_part('sections/mother-children/mother-children-1');
    get_template_part('sections/mother-children/mother-children-2');
?>

<?php get_footer();?>
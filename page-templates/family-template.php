<?php
/**
 * template name: Family Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(7);
    get_template_part('sections/family/family-1'); 
    get_template_part('sections/family/family-2'); 
    get_template_part('sections/family/family-3');
?>

<?php get_footer();?>
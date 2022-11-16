<?php
/**
 * template name: Talk Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(8);
    get_template_part('sections/talk/talk-1');
    get_template_part('sections/talk/talk-2');
    get_template_part('sections/talk/talk-3');
?>

<?php get_footer();?>
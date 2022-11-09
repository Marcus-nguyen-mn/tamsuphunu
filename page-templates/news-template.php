<?php
/**
 * template name: News Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(4);
    get_template_part('sections/news/news-sec-1'); 
    get_template_part('sections/news/news-sec-2'); 
    get_template_part('sections/news/news-sec-3'); 
?>

<?php get_footer();?>
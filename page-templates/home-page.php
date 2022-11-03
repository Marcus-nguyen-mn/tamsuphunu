<?php
/**
 * template name: Home Page
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/home/slider'); 
    get_template_part('sections/home/sec-3');
    get_template_part('sections/home/sec-4'); 
    get_template_part('sections/home/sec-5'); 
?>

<?php get_footer();?>
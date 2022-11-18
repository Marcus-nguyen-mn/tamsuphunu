<?php
/**
 * template name: Quiz Template
 */
get_header();
?>
<?php
    get_template_part('sections/home/focus'); 
    get_template_part('sections/banner-top-on-all-page');
    list_cat_child(12);
    get_template_part('sections/quiz/quiz-1'); 
    get_template_part('sections/quiz/quiz-2');
    get_template_part('sections/quiz/quiz-3'); 
?>

<?php get_footer();?>
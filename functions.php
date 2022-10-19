<?php
/*
 *  GLOBAL VARIABLES
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());
/*
 *  INCLUDED FILES
 */
$file_includes = [
    'inc/theme-assets.php',                 // Style and JS
    'inc/theme-setup.php',                  // General theme setting
    'inc/acf-options.php',                  // ACF Option page
    'inc/duplicate.php',              // Dupplicate Post     
    'inc/cpt-service.php',              // Dupplicate Post                     
];
foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }
    require_once $filePath;
}
unset($file, $filePath);
// //404
// add_action('wp', 'redirect_404_to_homepage', 1);
// function redirect_404_to_homepage()
// {
//     global $wp_query;
//     if ($wp_query->is_404) {
//         wp_redirect(get_bloginfo('url') . '/loi-404', 301);
//         exit;
//     }
// }
function loop_single_related_post($sl) {
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
        $args=array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'showposts'=>$sl,
            'ignore_sticky_posts'=>1
        );
        $my_query = new wp_query($args);
        if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) { $my_query->the_post();
                echo get_template_part('sections/post-list');
            }
        }
    }
}
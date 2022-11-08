<?php
get_header();
?>
<?php
$cat = get_queried_object();
$parent_cat_id = $cat->parent;
list_cat_child_in_cate_page($parent_cat_id, $cat->term_id);
?>
<?php get_footer();?>
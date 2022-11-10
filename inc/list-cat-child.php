<?php
function list_cat_child($id_cate){
    $taxonomy_name = 'category';
    $termchildren = get_term_children( $id_cate, $taxonomy_name );
    echo '
    <div class="list-child-cat">
        <div class="mc-container">
            <div class="list-child-cat-scrl">
                <div class="mc-row list-child-cat-contain">
                    ';
                    foreach ( $termchildren as $child ) {
                        $term = get_term_by( 'id', $child, $taxonomy_name );
                        echo '<div class="col-cat-child"><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></div>';
                    }
        echo '</div>
            </div>
        </div>
    </div>
    ';
}

function list_cat_child_in_cate_page($id_cate_parent, $id_cat_child){
    $taxonomy_name = 'category';
    $termchildren = get_term_children( $id_cate_parent, $taxonomy_name );
    echo '
    <div class="list-child-cat">
        <div class="mc-container">
            <div class="list-child-cat-scrl">
                <div class="mc-row list-child-cat-contain">
                    ';
                    foreach ( $termchildren as $child ) {
                        $term = get_term_by( 'id', $child, $taxonomy_name );
                        if($id_cat_child == $term->term_id){
                            echo '<div class="col-cat-child"><a class="active" href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></div>';
                        }else{
                            echo '<div class="col-cat-child"><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></div>';
                        }
                        
                    }
        echo '</div>
            </div>
        </div>
    </div>
    ';
}

<?php 
    //set a custom wordpress query object
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );
    $query = new WP_Query($args);
    /* if ($query->have_posts()){
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part("template-parts/loop/loop_card", null, array('post' => $post));
        }
    } */
    get_template_part("template-parts/loop/loop", null, array('query' => $query));

?>
<?php 
    $categories = get_categories();
    //set a custom wordpress query object
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );
    foreach ($categories as $category) {
        $args['category_name'] = $category->slug;
        $query = new WP_Query($args);
        if ($query->have_posts() && $category->slug != 'uncategorized') {
            echo '<div class="flex flex-col justify-center items-center gap-5 mb-10">';
                echo '<h1 class="font-bold text-2xl text-center">Latest ' . $category->name . '</h1>';
                    get_template_part("template-parts/loop/loop", null, array('query' => $query));
                echo '</div>';
            echo '</div>';
        }
    }


?>
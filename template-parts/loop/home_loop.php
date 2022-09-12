<?php
$categories = get_categories();


//set a custom wordpress query object
$args = [
    "post_type" => "post",
    "posts_per_page" => 3,
    "orderby" => "date",
];
foreach ($categories as $category) {
    $args["category_name"] = $category->slug;
    $query = new WP_Query($args);
    if ($query->have_posts() && $category->slug != "uncategorized") {
        echo '<div class="container mb-10">';
        echo '<h1 class="font-bold text-2xl text-center w-full mb-5">Latest ' .
            $category->name .
            "</h1>";
        get_template_part("template-parts/loop/loop", null, [
            "query" => $query,
        ]);
        echo "</div>";
        
    }
}

?>

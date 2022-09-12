<?php
if (is_author()) {
    get_template_part("template-parts/title/title-author");
} elseif (is_single()) {
    get_template_part("template-parts/title/title-post");
} else {
    if (is_home() || is_front_page() ) {
        
        $query = new WP_Query(["pagename" => "blog"]);
        if ($query->have_posts()) {
            //var_dump($query);
            $query->the_post();
            $title = $query->queried_object->post_title;
            $content = $query->queried_object->post_content;
        }
    } else {
        if (is_category()) {
            $title = "Category: " . single_cat_title("", false);
            $content = category_description();
        } elseif (is_tag()) {
            $title = "#" . str_replace(" ", "_", single_tag_title("", false));
            $content = tag_description();
        } elseif (is_day()) {
            $title = "Day: " . get_the_date();
            $content = "Day: " . get_the_date();
        } elseif (is_month()) {
            $title = "Month: " . get_the_date("F Y");
            $content = "Month: " . get_the_date("F Y");
        } elseif (is_year()) {
            $title = "Year: " . get_the_date("Y");
            $content = "Year: " . get_the_date("Y");
        } elseif (is_search()) {
            $title = "Search: " . get_search_query();
            $content = "Search: " . get_search_query();
        } elseif (is_404()) {
            $title = "Page not found";
            $content = "Please check the url";
        } elseif (is_page()) {
            $title = get_the_title();
            $title=$title?$title:"Untitled Page";
            $content= get_post_field( 'post_name', get_post() ) == "blog"? get_the_content() : "";
        } else {
            $title = "Aerobotix Blog";
            $content = "The official blog of Aerobotix";
        }
    }
?>
    <div id="title" class="container px-6  pt-28 pb-6 text-center">
        <h1 class="font-black text-5xl md:text-6xl break-all mb-3">
            <?php echo $title ?>
        </h1>
        <p class="text-normal text-sm md:text-base">
            <?php echo $content ?>
        </p>
    </div>
<?php
}





?>
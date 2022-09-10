<div id="title" class="w-full text-center flex flex-col justify-center px-6 sm:px-24 lg:px-56 pt-20 pb-2 gap-3 items-center ">
    <h1 class="font-black text-5xl sm:text-6xl md:text-7xl break-all"><?php if (
        is_home()
    ) {
        echo "Aerobotix Blog";
    } elseif (is_category()) {
        echo "Category: " . single_cat_title("", false);
    } elseif (is_tag()) {
        echo "#" . str_replace(" ", "_", single_tag_title("", false));
    } elseif (is_author()) {
        get_template_part("template-parts/title/title-author");
    } elseif (is_day()) {
        echo "Day: " . get_the_date();
    } elseif (is_month()) {
        echo "Month: " . get_the_date("F Y");
    } elseif (is_year()) {
        echo "Year: " . get_the_date("Y");
    } elseif (is_search()) {
        echo "Search: " . get_search_query();
    } elseif (is_404()) {
        echo "Page not found";
    } elseif (is_page()) {
        echo get_the_title();
    } else {
        get_template_part("template-parts/title/title-post");
    } ?></h1>

    <?php if (is_home()) {
        echo '<div class="text-normal text-sm md:text-base">' .
            get_the_content(null, false, get_queried_object()) .
            "</div>";
    } elseif (is_category()) {
        echo '<p class="text-normal text-sm md:text-base">' .
            category_description() .
            "</p>";
    } elseif (is_tag()) {
        echo '<p class="text-normal text-sm md:text-base">' .
            tag_description() .
            "</p>";
    } elseif (is_day()) {
        echo '<p class="text-normal text-sm md:text-base">' .
            "Day: " .
            get_the_date() .
            "</p>";
    } elseif (is_month()) {
        echo '<p class="text-normal text-sm md:text-base">' .
            "Month: " .
            get_the_date("F Y") .
            "</p>";
    } elseif (is_year()) {
        echo '<p class="text-normal text-sm md:text-base">' .
            "Year: " .
            get_the_date("Y") .
            "</p>";
    } elseif (is_search()) {
        echo '<p class="text-normal text-sm md:text-base">' .
            "Search: " .
            get_search_query() .
            "</p>";
    } elseif (is_404()) {
        echo '<p class="text-normal text-sm md:text-base">' .
            "Please check the url" .
            "</p>";
    } ?>
</div>
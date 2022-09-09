<div id="title" class="w-screen text-center flex flex-col justify-center px-6 sm:px-24 lg:px-56 pt-20 pb-2 gap-3 items-center ">
    <h1 class="font-black text-5xl sm:text-6xl md:text-7xl break-all"><?php
                    if (is_home()) echo "Aerobotix Blog";
                    else if (is_category()) echo "Category: " . single_cat_title("", false);
                    else if (is_tag()) echo "#" . str_replace(' ', '_', single_tag_title("", false));
                    else if (is_author()) get_template_part("template-parts/title/title-author");
                    else if (is_day()) echo "Day: " . get_the_date();
                    else if (is_month()) echo "Month: " . get_the_date("F Y");
                    else if (is_year()) echo "Year: " . get_the_date("Y");
                    else if (is_search()) echo "Search: " . get_search_query();
                    else if (is_404()) echo "Page not found";
                    else if (is_page()) echo get_the_title();
                    else get_template_part("template-parts/title/title-post");
                    ?></h1>

    <?php
    if (is_home()) echo '<div class="text-normal text-sm md:text-base">' . get_the_content(null, false, get_queried_object()) . "</div>";
    else if (is_category()) echo '<p class="text-normal text-sm md:text-base">' . category_description() . "</p>";
    else if (is_tag()) echo '<p class="text-normal text-sm md:text-base">' . tag_description() . "</p>";
    else if (is_day()) echo '<p class="text-normal text-sm md:text-base">' . "Day: " . get_the_date() . "</p>";
    else if (is_month()) echo '<p class="text-normal text-sm md:text-base">' . "Month: " . get_the_date("F Y") . "</p>";
    else if (is_year()) echo '<p class="text-normal text-sm md:text-base">' . "Year: " . get_the_date("Y") . "</p>";
    else if (is_search()) echo '<p class="text-normal text-sm md:text-base">' . "Search: " . get_search_query() . "</p>";
    else if (is_404()) echo '<p class="text-normal text-sm md:text-base">' . "Please check the url" . "</p>";
    ?>
</div>
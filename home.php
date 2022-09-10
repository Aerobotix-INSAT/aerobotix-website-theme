<?php get_header();

get_template_part("template-parts/featured/featured");

echo "<main>";
get_template_part("template-parts/loop/home_loop");
echo "</main>";

get_footer(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part("template-parts/loop/loop_card");
    endwhile;
else :
?>
    <p><?php esc_html_e("Sorry, no posts matched your criteria."); ?></p>
<?php
endif; 
next_posts_link();
?>
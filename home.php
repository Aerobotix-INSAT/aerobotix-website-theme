<?php get_header(); ?>
<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <div ><?php the_content(); ?></div>
    <?php
    endwhile;
else :
    ?>
    <p><?php esc_html_e("Sorry, no posts matched your criteria."); ?></p>
<?php
endif; ?>
<?php get_footer(); ?>
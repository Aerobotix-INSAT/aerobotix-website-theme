<a class="text-2xl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<div><?php the_excerpt(); ?></div>
<div><?php echo get_the_author() ?></div>
<div><?php echo get_avatar(get_the_author_meta('ID')); ?></div>
<?php
if (has_post_thumbnail())
    the_post_thumbnail();
else echo "<img sradd pagination in wordpress='" . get_template_directory_uri() . "/assets/images/placeholder.jpg' alt='placeholder' class='w-1/2 h-1/2' />";
echo the_tags();

?>
<br />
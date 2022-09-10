<?php
if ($args['post']) {
    $query = $args['post'];
} else $post = $wp_query->the_post();

$post_id = $post->ID;
$title = $post->post_title;
$permalink = get_permalink($post_id);
$thumbnail = get_the_post_thumbnail($post_id, '', ['class' => 'h-full w-auto']);
$author = get_the_author_meta('display_name', $post->post_author);
$author_link = get_author_posts_url($post->post_author);
$date = get_the_date('F j, Y', $post_id);
$tags = get_the_tags($post_id);
$avatar = get_avatar($post->post_author, 60, '', '', ['class' => "object-cover"]);
$has_post_thumbnail = has_post_thumbnail($post_id);

?>

<div class="glass h-fit w-80 rounded-3xl p-5 flex  flex-col items-center gap-5 overflow-hidden">
    <div class="font-bold text-2xl w-full leading-tight text-ellipsis basis-[5.7rem] flex-none overflow-hidden">
        <a href=<?php echo $permalink ?>><?php echo $title ?></a>
    </div>
    <div class="w-full flex flex-row justify-start items-center gap-1.5">
        <div class="glass rounded-full overflow-hidden border-2 outline-glass w-9 h-9">
            <?php echo $avatar ?>
        </div>
        <div class="flex flex-col justify-center items-start leading-none font-normal">
            <a class="text-sm" href=<?php echo $author_link ?>><?php echo ucwords($author); ?></a>
            <p class="text-xs text-[#C5C5C5]"><?php echo $date; ?></p>
        </div>
    </div>
    <div class="font-medium w-full text-sm leading-4">
        <?php
        if ($tags) {
            echo 'Tags: ';
            foreach ($tags as $tag) { ?>
                <a class="m-[1px] px-1 glass text-[12px] rounded" href=<?php echo get_tag_link($tag->term_id) ?>>#<?php echo str_replace(' ', '_', strtoupper($tag->name)) ?></a>
        <?php }
        }
        ?>
    </div>
    <a href=<?php echo $permalink ?> class="block w-full h-48 rounded-xl overflow-hidden">
        <?php
        if ($has_post_thumbnail) {
            echo $thumbnail;
        } else {
            echo '<img class="h-full w-auto" src="' . get_template_directory_uri() . '/assets/images/red-gradient.jpg" alt="Placeholder image">';
        }
        ?>
    </a>
</div>
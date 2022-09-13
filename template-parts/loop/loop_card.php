<?php
if ($args["post"]) {
    $post = $args["post"];
} else {
    $post = $wp_query->the_post();
}
$avatars = [];
if (function_exists('coauthors_posts_links')) {
    $author_link = coauthors_posts_links($between = null, $betweenLast = null, $before = null, $after = null, $echo = false);
    $l = coauthors($between = "#", $betweenLast = "#", $before = null, $after = null, $echo = false);
    $l = explode('#', $l);
    foreach ($l as $author) {
        $c = get_user_id_by_display_name($author);
        array_push($avatars, get_avatar($c, 60, "", "", ["class" => "object-cover w-9 h-9"]));
    }
} else {
    $author_link = get_the_author_posts_link();
}
$post_id = $post->ID;
$title = $post->post_title;
$title = $title ? $title : "Untitled Post";
$permalink = '"' . get_permalink($post_id) . '"';
$thumbnail = get_the_post_thumbnail($post_id, "", [
    "class" => "object-cover w-full h-40",
]);
$author = get_the_author_meta("display_name", $post->post_author);
$default_author_link = get_author_posts_url($post->post_author);
$date = get_the_date("F j, Y", $post_id);
$date_html = get_the_date("Y-m-d", $post_id);
$tags = get_the_tags($post_id);
$tags = $tags ? $tags : [];
$avatar = get_avatar($post->post_author, 60, "", "", [
    "class" => "object-cover w-9 h-9",
]);
$has_post_thumbnail = has_post_thumbnail($post_id);
?>

<article class="card transition-all glass h-fit w-72 md:w-64 rounded-3xl gapx-5 overflow-hidden m-3 pt-4 pb-2">
    <div class="mb-3 px-5 w-full flex flex-row justify-start items-center gap-1.5">
        <?php if ($avatars) : ?>
            <div class="flex flex-row gap-[-0.25rem] avatars">
                <?php foreach ($avatars as $avatar) : ?>
                    <a class="glass rounded-full overflow-hidden w-9 h-9">
                        <?php echo $avatar; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <a href=<?php echo $default_author_link ?> class="rounded-full overflow-hidden w-9 h-9">
                <?php echo $avatar; ?>
            </a>
        <?php endif; ?>
        <div class="flex flex-col justify-center items-start leading-none font-normal">
            <p class="text-[0.8rem] font-medium line-clamp-1"> <?php echo $author_link ?> </p>
            <time class="text-xs text-[#C5C5C5]" datetime="<?php echo $date_html ?>"><?php echo $date; ?></time>
        </div>
    </div>
    <a href=<?php echo $permalink ?> class="font-bold text-xl w-full leading-tight h-[4.2rem] mb-5 px-5 line-clamp-3">
        <h2><?php echo $title; ?></h2>
    </a>
    <a href=<?php echo $permalink; ?> class="thumbnail block w-[91%] mx-auto h-40 rounded-xl overflow-hidden mb-2 brightness-105">
        <?php if ($has_post_thumbnail) {
            echo $thumbnail;
        } else {
            echo '<img class="object-cover h-40 w-96" src="' .
                get_template_directory_uri() .
                '/assets/images/red-gradient.jpg" alt="Placeholder image">';
        } ?>
        <div class="thumbnail-hover absolute w-full h-full transition-all bg-[#a1a1a1d1] grid grid-cols-1 justify-center justify-items-center items-center top-0 ">
            <div class="w-fit h-fit px-3 font-semibold bg-[#0a0b1a] rounded">Go to Article</div>
        </div>
    </a>
    <div class="font-medium w-full text-sm line-clamp-1 px-5">
        <?php if ($tags) {
            echo "Tags: ";
            foreach ($tags as $tag) { ?>
                <a href="<?php echo get_tag_link(
                                $tag->term_id
                            ); ?>" class="m-[1px] px-1 glass text-[12px] rounded">#<?php echo str_replace(
                                                                                        " ",
                                                                                        "_",
                                                                                        strtoupper($tag->name)
                                                                                    ); ?></a>
        <?php }
        } else echo '<p class="text-center"> <text class="m-[1px] px-1 glass text-[12px] rounded">No Tags</p>' ?>
    </div>

</article>
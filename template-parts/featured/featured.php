<?php
$query = new WP_Query([
    "meta_key" => "_is_ns_featured_post",
    "meta_value" => "yes",
]);
if ($query->have_posts()) {
    $query->the_post();
    $post = $query->post;
}

$post_id = $post->ID;
$title = $post->post_title;
$permalink = get_permalink($post_id);
$thumbnail = get_the_post_thumbnail($post_id, "", ["class" => "h-full w-auto"]);
$author = get_the_author_meta("display_name", $post->post_author);
$author_link = get_author_posts_url($post->post_author);
$date = get_the_date("F j, Y", $post_id);
$tags = get_the_tags($post_id);
$avatar = get_avatar($post->post_author, 60, "", "", [
    "class" => "h-auto max-w-full",
]);
$has_post_thumbnail = has_post_thumbnail($post_id);
$excerpt = get_the_excerpt($post_id);
?>
<section id="featured" class="flex flex-col md:flex-row w-full px-9 sm:px-14 h-fit py-9 mb-20 items-center gap-3 md:pl-0 md:pr-4" style="background-image: url(<?php echo get_template_directory_uri() .
                                                                                                                                                                    "/assets/images/featured_bg.png"; ?>); background-size: cover; ">
    <div class="w-full h-auto max-w-lg md:h-full md:w-auto md:max-w-[45vw]">
        <a href=<?php echo $permalink; ?> class="block w-full h-full rounded-xl overflow-hidden md:rounded-l-none">
            <?php if ($has_post_thumbnail) {
                echo $thumbnail;
            } else {
                echo '<img class="h-auto max-w-full" src="' .
                    get_template_directory_uri() .
                    '/assets/images/red-gradient.jpg" alt="Placeholder image">';
            } ?>
        </a>
    </div>
    <div class="max-w-lg px-3 flex flex-col gap-2 md:w-full md:max-w-none">
        <div class="w-full flex flex-row justify-start items-center gap-1.5">
            <a href=<?php echo $author_link ?> class="glass rounded-full overflow-hidden border-2 outline-glass w-10 h-10">
                <?php echo $avatar; ?>
            </a>
            <div class="flex flex-col justify-center items-start leading-none font-normal">
                <a class="text-sm font-medium" href=<?php echo $author_link; ?>><?php echo ucwords(
                                                                                    $author
                                                                                ); ?></a>
                <time class="text-xs text-[#C5C5C5]"><?php echo $date; ?></time>
            </div>
        </div>
        <div class="font-black text-2xl lg:text-3xl xl:text-4xl w-full leading-tight line-clamp-2 xl:line-clamp-3">
            <a href=<?php echo $permalink; ?>><?php echo $title; ?></a>
        </div>
        <div class="border-l-2 pl-2 text-justify">
            <p class="text-sm line-clamp-5">
                <b>TLDR </b><?php echo $excerpt; ?>
            </p>
        </div>
        <div class="font-medium w-full text-base">
            <?php if ($tags) {
                echo "Tags: ";
                foreach ($tags as $tag) { ?>
                    <a class="m-[1px] px-1 glass text-sm rounded" href=<?php echo get_tag_link(
                                                                            $tag->term_id
                                                                        ); ?>>#<?php echo str_replace(
                                                                                    " ",
                                                                                    "_",
                                                                                    strtoupper($tag->name)
                                                                                ); ?></a>
            <?php }
            } ?>
        </div>
    </div>
</section>
<div class="glass h-[390px] w-80 rounded-3xl p-5 flex  flex-col items-center gap-5 overflow-hidden">
    <div class="font-bold text-2xl w-full leading-tight h-20 text-ellipsis basis-20 flex-none">
        <a href=<?php echo get_post_permalink(); ?>><?php the_title(); ?></a>
    </div>
    <div class="w-full flex flex-row justify-start items-center gap-1.5">
        <div class="glass rounded-full overflow-hidden border-2 outline-glass w-9 h-9">
            <?php echo get_avatar(get_the_author_meta('ID'), 60, '', '', ['class' => "object-cover"]); ?>
        </div>
        <div class="flex flex-col justify-center items-start leading-none font-normal">
            <a class="text-sm" href=<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>><?php echo ucwords(get_the_author_meta('last_name') . ' ' . get_the_author_meta('first_name')); ?></a>
            <p class="text-xs text-[#C5C5C5]"><?php echo get_the_date(); ?></p>
        </div>
    </div>
    <div class="font-medium w-full text-sm leading-4">
        <?php
        $tags = get_the_tags();
        if ($tags) {
            echo 'Tags: ';
            foreach ($tags as $tag) { ?>
                <a class="m-[1px] px-1 glass text-[12px] rounded" href=<?php echo get_tag_link($tag->term_id) ?>>#<?php echo str_replace(' ', '_', strtoupper($tag->name)) ?></a>
        <?php }
        }
        ?>
    </div>
    <a href=<?php echo get_post_permalink(); ?> class="block h-full rounded-xl overflow-hidden">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        } else {
            echo '<img src="' . get_template_directory_uri() . '/assets/images/red-gradient.jpg" alt="Placeholder image">';
        }
        ?>
    </a>
</div>
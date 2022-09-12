<?php get_header(); ?>
<div>
    <section class="container max-w-[55rem] bg-[#1a1a1ae0] p-4">
        <div class="w-full flex flex-row justify-start items-center gap-1.5">
            <a href=<?php echo get_author_posts_url(get_the_author_meta('ID')); ?> class="glass rounded-full overflow-hidden w-10 h-10">
                <?php echo get_avatar(get_the_author(), 60, "", "", [
                    "class" => "h-auto max-w-full",
                ]);; ?>
            </a>
            <a class="text-xl font-bold" href=<?php echo get_author_posts_url(get_the_author_meta('ID'));; ?>><?php echo ucwords(
                                                                                                                    get_the_author()
                                                                                                                ); ?></a>
        </div>
        <time class="text-xs text-[#C5C5C5]"><?php echo get_the_date(); ?></time>
    </section>
    <main class="container max-w-[55rem] prose prose-invert md:prose-base bg-[#1a1a1ae0] p-4 break-words">
        <?php
        the_content();
        ?>
    </main>
    <aside class="container max-w-[55rem] p-4">
        __________<br><br>
        <?php
        if (comments_open()) {
            comments_template();
        }
        ?>
    </aside>
</div>
<?php get_footer(); ?>
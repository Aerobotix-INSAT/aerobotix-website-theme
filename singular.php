<?php get_header(); ?>
<div>
    <main class="container max-w-[55rem] prose prose-invert md:prose-base bg-[#1a1a1ae0] p-4 break-words">
        <?php
        the_content();
        ?>
        __________<br><br>
        <i>
            <a href=<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>><?php echo get_the_author() ?></a>
            <br>
            <?php echo get_the_date() ?>

        </i>

    </main>
    <aside class="container max-w-[50rem] bg-[#1a1a1ae0] p-4">
        __________<br><br>
        <?php
        if (comments_open()) {
            comments_template();
        }
        ?>
    </aside>
</div>
<?php get_footer(); ?>
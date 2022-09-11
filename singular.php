<?php get_header(); ?>
<div class="flex flex-col justify-center items-center px-5">
    <main class="prose prose-invert md:prose-base w-full max-w-[50rem] bg-[#1a1a1ae0] p-4">
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
    <aside class="w-full max-w-[50rem] bg-[#1a1a1ae0] px-4">
    __________<br><br>
    <?php
        if (comments_open()) {
            comments_template();
        }
        ?>
    </aside>
</div>
<?php get_footer(); ?>
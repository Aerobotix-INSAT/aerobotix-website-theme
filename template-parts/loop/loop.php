<div class="flex flex-row justify-center">
    <div class="m-auto grid gap-9 justify-items-center auto-rows-auto grid-cols-1 md:grid-cols-[repeat(2,20rem)] xl:grid-cols-[repeat(3,20rem)] 2xl:grid-cols-[repeat(4,20rem)]">
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
        ?>
    </div>
</div>
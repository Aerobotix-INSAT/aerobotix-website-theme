<?php
if ($args["query"]) {
    $query = $args["query"];
} else {
    $query = $wp_query;
} ?>
<div class="flex flex-row justify-center">
    <div class="m-auto grid gap-9 justify-items-center auto-rows-auto grid-cols-[fit-content(20rem)] md:grid-cols-[repeat(2,fit-content(20rem))] xl:grid-cols-[repeat(3,fit-content(20rem))] 2xl:grid-cols-[repeat(4,fit-content(20rem))] ">
        <?php if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                get_template_part("template-parts/loop/loop_card", null, [
                    "post" => $query->post,
                ]);
            endwhile;
        else:
             ?>
            <p><?php esc_html_e(
                "Sorry, no posts matched your criteria."
            ); ?></p>
        <?php
        endif; ?>
    </div>
</div>
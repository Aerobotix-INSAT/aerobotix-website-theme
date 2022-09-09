<div class="glass h-96 w-80 rounded-3xl p-5 flex  flex-col items-center gap-5">
    <div class="font-bold text-2xl w-full leading-tight h-20 text-ellipsis">
        <a  href=<?php echo get_post_permalink();?>><?php the_title(); ?></a>
    </div>
    <div>
        <?php echo get_avatar(get_the_author_meta('ID'),60); ?>
        <div>
            <a href=<?php echo get_the_author_meta('user_url')?>><?php echo ucwords(get_the_author_meta('last_name').' '.get_the_author_meta('first_name')) ; ?></a>
            <p><?php echo get_the_date(); ?></p>
        </div>
    </div>
    <div>
        <?php
        $tags = get_the_tags();
        if ($tags) {
            echo 'Tags: ';
            foreach ($tags as $tag) { ?>
                <a class="m-2" href=<?php echo get_tag_link($tag->term_id) ?>>#<?php echo str_replace(' ', '_',$tag->name) ?> </a>
        <?php }
        }
        ?>
    </div>
    <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }  
        else {
            echo '<img src="'.get_template_directory_uri().'/assets/images/red-gradient.jpg" alt="Placeholder image">';
        } 
    ?>
</div>






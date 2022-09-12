<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="w-full px-6 pt-28 pb-0 container text-center">
    <div class="glass inline-block rounded-full overflow-hidden w-32 h-32 mb-9">
        <?php echo get_avatar($curauth, 60, "", "", ["class" => "object-cover w-32 h-32"]) ?>
    </div>
    <h1 class="font-black text-3xl md:text-5xl break-all mb-5"><?php echo ucwords($curauth->first_name? ($curauth->first_name. ' ' . $curauth->last_name):$curauth->display_name."'s Articles"); ?></h1>
    <p class="text-normal text-sm md:text-base"><?php echo get_the_author_meta('description',$curauth->ID) ?></p>
</div>
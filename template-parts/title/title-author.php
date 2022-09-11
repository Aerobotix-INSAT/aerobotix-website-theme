<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="w-full px-6 sm:px-24 lg:px-56 pt-28 pb-0 flex flex-col justify-start items-center gap-9">
    <div class="glass rounded-full overflow-hidden border-2 outline-glass w-32 h-32">
        <?php echo get_avatar($curauth, 60, "", "", ["class" => "object-cover w-32 h-32"]) ?>
    </div>
    <div class="font-black text-3xl md:text-5xl break-all"><?php echo ucwords($curauth->first_name . ' ' . $curauth->last_name."'s Articles"); ?></div>
    <p class="text-normal text-sm md:text-base"><?php echo get_the_author_meta('description',$curauth->ID) ?></p>
</div>
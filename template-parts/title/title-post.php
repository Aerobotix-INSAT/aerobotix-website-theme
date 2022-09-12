<div class="w-full pt-28 px-5 container max-w-[55rem]">
    <h1 class="w-full max-w-[55rem] font-black text-4xl md:text-5xl break-all mb-6"><?php echo get_the_title()?get_the_title():"Untitled Post" ?></h1>
    <div class="border-l-2 pl-2 text-justify w-full max-w-[55rem]">
        <p id=TLDR class="text-base line-clamp-5">
            <b>TLDR </b><?php echo get_the_excerpt() ?>
        </p>
    </div>
</div>
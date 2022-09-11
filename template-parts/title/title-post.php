<div class="w-full pt-28 px-5 flex flex-col justify-start items-center gap-6">
    <div class="w-full max-w-[50rem] font-black text-4xl md:text-5xl break-all"><?php the_title() ?></div>
    <div class="border-l-2 pl-2 text-justify w-full max-w-[50rem]">
        <p id=TLDR class="text-base line-clamp-5">
            <b>TLDR </b><?php echo get_the_excerpt() ?>
        </p>
    </div>
</div>
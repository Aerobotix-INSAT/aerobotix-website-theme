<nav class="navbar">
    <a href="<?php echo get_home_url() ?>" class="block"><span class="font-bold text-3xl">Aerobotix </span><span class="text-3xl font-medium"> | Blog</span></a>
    <div class="nav-menu">
        <?php wp_nav_menu([
            "theme_location" => "Blog",
            "menu_class" => "nav-menu",
            "container" => false,
        ]); ?>

    </div>
    <div class="nav-icon"><i class="fa-solid fa-bars open"></i><i class="hidden fa-solid fa-xmark close"></i></div>
    <div class="glass text-2xl hidden lg:flex flex-row justify-between px-3 w-max rounded-md items-center gap-2"><a href="<?php echo home_url() ?>">About Aerobotix</a><i class="fa-solid fa-angles-right"></i></div>

</nav>
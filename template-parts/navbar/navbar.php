<nav class="navbar">
    <div id='website-title' class="shrink-0"><a class="menu-item" href="<?php echo get_home_url(); ?>"><span class="font-bold text-3xl">Aerobotix </span></a><span class="text-3xl font-medium select-none"> | Blog</span></div>
    <div class="nav-menu-container">
        <?php wp_nav_menu([
            "theme_location" => "Blog",
            "menu_class" => "nav-menu",
            "container" => false,
        ]); ?>
    </div>
    <div class="nav-icon text-3xl  static md:hidden hover:cursor-pointer"><i class="fa-solid fa-bars open"></i><i class="hidden fa-solid fa-xmark close"></i></div>
</nav>
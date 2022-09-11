<nav class="navbar">
    <div><a class="menu-item" href="<?php echo get_home_url(); ?>"><span class="font-bold text-3xl">Aerobotix </span></a><span class="text-3xl font-medium select-none"> | Blog</span></div>
    <div class="nav-menu">
        <?php wp_nav_menu([
            "theme_location" => "Blog",
            "menu_class" => "nav-menu",
            "container" => false,
        ]); ?>

    </div>
    <div class="nav-icon"><i class="fa-solid fa-bars open"></i><i class="hidden fa-solid fa-xmark close"></i></div>

</nav>
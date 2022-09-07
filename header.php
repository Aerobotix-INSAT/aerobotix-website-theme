<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/acce9af979.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php
    define("WP_USE_THEMES", false);
    wp_head();
    ?>
</head>

<body class="bg-background">
    <header class="bg-cover h-fit w-screen overflow-hidden relative" style="
            background-image: linear-gradient(0deg, rgba(34,34,34,1) 0%, rgba(34,34,34,0) 100%),url('<?php echo get_template_directory_uri() . "/assets/images/red-gradient.jpg"; ?> ') ;  
            background-position:center ;">
        <nav class="navbar">
            <div><span class="font-bold text-3xl">Aerobotix </span><span class="text-3xl font-medium"> | Blog</span></div>
            <div class="nav-menu">
                <?php wp_nav_menu([
                    "theme_location" => "Blog",
                    "menu_class" => "nav-menu",
                    "container" => false,
                ]); ?>

            </div>
            <div class="nav-icon"><i class="fa-solid fa-bars open"></i><i class="hidden fa-solid fa-x close"></i></div>
            <div class="glass text-2xl hidden lg:flex flex-row justify-between px-3 w-max rounded-md items-center" onclick=""><a href="<?php echo home_url() ?>">About Aerobotix<i class="fa-solid fa-angles-right"></i></a></div>

        </nav>

        <?php is_home() || is_page() || is_category()
            ? get_template_part("template-parts/title/title-page")
            : get_template_part("template-parts/title/title-post"); ?>

    </header>
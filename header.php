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
<?php
$background= get_template_directory_uri() . "/assets/images/background.webp";
$style='style="background: linear-gradient(180deg, #222222 10.58%, rgba(34, 34, 34, 0) 37.78%), url('. $background .'),#222222; background-size: cover,cover,cover;"';
$background_style= is_home() || is_category() || is_tag() || is_author() || is_date() || is_search() ? $style:"";
$default = get_template_directory_uri() . "/assets/images/red-gradient.jpg";
$post_thumbnail = get_the_post_thumbnail_url(get_queried_object(), "");
$thumbnail = $post_thumbnail ? $post_thumbnail : $default;
?>
<body class="bg-background" <?php echo $background_style ?>>

    <header class="bg-cover h-fit w-full overflow-hidden relative mb-20" style="
            background-image: linear-gradient(0deg, rgba(34,34,34,1) 0%, rgba(34,34,34,0.25) 100%),url('<?php echo $thumbnail; ?> ') ;  
            background-position:center ;">

        <?php get_template_part("template-parts/navbar/navbar"); ?>

        <?php get_template_part("template-parts/title/title"); ?>

    </header>
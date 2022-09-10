<!-- here goes the footer code -->
<?php $menus = ["Blog", "About", "Links"]; ?>
<footer class="opacity-70">
    <div class="w-full flex flex-col items-center justify-center gap-5 lg:flex-row lg:h-36">
        <div class="text-center">
            <img class="mb-[7px]" src="<?php echo get_template_directory_uri() .
            "/assets/images/logo-white.png"; ?>">
            <?php echo make_clickable($GLOBALS['cgv']['email']) ?>
        </div>
        <div class="bg-white h-full w-[2px]"></div>
        <div class="flex flex-col gap-12 items-center justify-center sm:items-start sm:flex-row sm:justify-even w-full lg:justify-start lg:w-fit">
            <?php foreach ($menus as $menu) {
                echo '<div class="">';
                echo '<h3 class="font-bold text-xl text-center sm:text-start">' . $menu . "</h3>";
                wp_nav_menu([
                    "theme_location" => $menu,
                    "menu_class" => "footer-nav-menu",
                    "container" => false,
                ]);
                echo '</div>';
            } ?>
        </div>
    </div>
    <div>
        <img src="<?php echo get_template_directory_uri() .
            "/assets/images/artwork.png"; ?>">
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
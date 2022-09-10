<!-- here goes the footer code -->
<?php $menus = ["Blog", "About", "Links"]; ?>
<footer >
    <div class="w-full flex flex-col items-center justify-center gap-5 lg:flex-row lg:h-36 my-20">
        <div class="text-center">
            <img class="mb-[7px]" src="<?php echo get_template_directory_uri() .
            "/assets/images/logo-white.png"; ?>">
            <?php echo make_clickable($GLOBALS['cgv']['email']) ?>
        </div>
        <div class="bg-white h-full w-[2px]"></div>
        <div class="grid grid-cols-[repeat(auto-fit,10rem)] justify-center w-full max-w-[34rem] gap-4">
            <?php foreach ($menus as $menu) {
                echo '<div>';
                echo '<h3 class="font-bold text-xl text-center lg:text-start">' . $menu . "</h3>";
                wp_nav_menu([
                    "theme_location" => $menu,
                    "menu_class" => "footer-nav-menu",
                    "container" => false,
                ]);
                echo '</div>';
            } ?>
        </div>
    </div>
    <div class="mix-blend-overlay flex items-center justify-center mb-16">
        <img  class="max-w-3xl w-full" src="<?php echo get_template_directory_uri() .
            "/assets/images/artwork.png"; ?>">
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
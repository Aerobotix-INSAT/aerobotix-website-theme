<!-- here goes the footer code -->
<?php 
    $menus=["Blog", "About", "Links"];
?>
<footer>
    <div>
        <div>

        </div>
        <div>

            <?php
                foreach($menus as $menu){
                    echo '<div class="footer-nav-menu-wrap w-fit">';
                    echo '<h3 class="font-bold text-2xl">'.$menu.'</h3>';
                    wp_nav_menu([
                        "theme_location" => $menu,
                        "menu_class" => "footer-nav-menu",
                        "container" => false,
                    ]);
                    echo '</div><br>';
                }
            ?>
        </div>
    </div>
    <div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/artwork.png" ?>">
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
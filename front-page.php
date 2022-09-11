<?php
if ( is_front_page() && is_home() ) {
    get_template_part("home");
  } else {
    get_template_part("page-about");
  }
?>

    
    


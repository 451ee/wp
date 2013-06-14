<?php

// adds scripts to page header
function addHeader() { ?>
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/css/style.css" />
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/jquery-1.10.1.min.js" type="text/javascript"></script>    
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/jquery.ui.core.js" type="text/javascript"></script>    
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/jquery.ui.widget.js" type="text/javascript"></script>    
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/jquery.ui.accordion.js" type="text/javascript"></script>    
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/main.js" type="text/javascript"></script>    
<? } 
add_action( 'wp_head', 'addHeader' );

?>

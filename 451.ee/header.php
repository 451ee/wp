<!doctype html>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 		
		<title>
			<?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
			echo bloginfo( 'name' ); echo ' - '; bloginfo( 'description', 'display' );  ?> 
		</title>  				
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->
		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->  		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	 	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css" rel="stylesheet">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/MyFontsWebfontsKit.css">
		<script>
		  !function ($) {
			$(function(){
			  // carousel
			  $('#myCarousel').carousel()
			})
		  }(window.jQuery)
		</script>
	</head>
<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=487525477986795";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	  <a href="https://github.com/451ee/wp"><img style="position: absolute; right: 0; border: 0; width: 120px; height: 120px;" src="<?php echo get_template_directory_uri(); ?>/img/forkMe.png" alt="Fork me on GitHub"></a>
<div class="container">
	<div class="row-fluid">
		<div class="span6">
			<a href="<?php echo home_url( '/' ); ?>"><img src="<? bloginfo('template_url');?>/img/logo.png" class="logo" /></a>
		</div>
		<div class="span6">
			<div class="row-fluid">
				<div class="span6">
				<?php languages_list(); ?>
				</div>
				<div class="span6">
					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					  <div class="input-append">
						<input type="text" class="si" placeholder="Otsi lehelt" value="" name="s" id="s" />
						 <button class="btn" onclick="submit();" type="button"><i class="icon-search icon-large"></i></button>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
<hr class="red">
	<?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>

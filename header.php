<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,900' rel='stylesheet' type='text/css'>			
	<!--[if lt IE 9]>
	<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slicknav.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/behaviors/manual-trigger.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/flickerplate.min.js" type="text/javascript"></script>
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/flickerplate.css"  type="text/css" rel="stylesheet">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.grid-a-licious.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slicknav.js"></script>
	<?php $shortname = "large_grid_commerce"; ?>
	
	<style type="text/css">
	body {
	<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
		background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
	<?php } ?>		
	<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
		background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
	<?php } ?>	
	}
	</style>		
</head>
<body <?php body_class($class); ?>>
<header id="header">
	<div class="container">
		<div class="header_social">
			<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_linkedin_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin-icon.png" alt="linkedin" /></a>
		<?php } ?>
		
		<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_picasa_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_picasa_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="social" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
		<?php } ?>
		
			
			
			<div class="clear"></div>
		</div><!--//header_social-->
		<div class="logo_cont">
			<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" alt="logo" /></a>
			<?php } else { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo" /></a>
			<?php } ?>			
		</div><!--//logo_cont-->
		<div class="header_search">
			<div class="header_search_inside">
				<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<input type="text" placeholder="Search" name="s" id="s" />
				<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" />
				</form>
			</div> <!-- //header_search_inside -->
		</div><!--//header_search-->		
		<div class="clear"></div>
	</div><!--//container-->
</header>
<div class="header_menu">
	<div class="container">
		<!--<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Shop</a>
				<ul>
					<li><a href="#">Jeans</a></li>
					<li><a href="#">Shorts</a></li>
					<li><a href="#">Dresses</a></li>
				</ul>
			</li>
			<li><a href="#">Cart</a></li>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul>-->
		<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id=header_menu_id'); ?>
		<div class="clear"></div>
	</div> <!-- //container -->
</div><!--//header_menu-->
<div class="header_spacing"></div>
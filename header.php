<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('title'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>

	<header id="kb_site_header">
		
		<div class="inner_wrap">
	
			<h1 id="kb_site_logo"><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			
			<ul id="kb-social-links">
				<li class="facebook"><a href="http://facebook.com/keithbrinks" title="Facebook"><i class="fa fa-facebook-square"></i><span>Facebook</span></a></li>
				<li class="twitter"><a href="http://twitter.com/keithbrinks" title="Twitter"><i class="fa fa-twitter-square"></i><span>Twitter</span></a></li>
				<li class="linkedin"><a href="http://linkedin.com/in/keithbrinks" title="LinkedIn"><i class="fa fa-linkedin-square"></i><span>LinkedIn</span></a></li>
				<li class="github"><a href="http://github.com/keithbrinks" title="GitHub"><i class="fa fa-github-square"></i><span>GitHub</span></a>
				<li class="steam"><a href="http://steamcommunity.com/id/Stargater59" title="Steam Community"><i class="fa fa-steam-square"></i><span>Steam</span></a></li>
			</ul>
			
			<nav id="kb_site_nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
			</nav>
			
		</div>
	
	</header><!-- /kb_site_header -->
	
	<div id="kb_site_container">
		
		<div class="inner_wrap">
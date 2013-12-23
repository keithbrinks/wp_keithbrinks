<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('title'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet" type="text/css">
	
	<?php if (!is_user_logged_in()) { ?>
		<!-- Start of Woopra Code -->
		<script>
		(function(){
		    var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
		})("woopra");
		
		woopra.config({
		    domain: 'keithbrinks.com'
		});
		woopra.track();
		</script>
		<!-- End of Woopra Code -->	
	<?php } ?>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="kb_site_wrap">
	
		<div id="left_column">

			<header id="kb_site_header">
			
				<h1 id="kb_site_logo"><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			
				<ul id="social_links">
					<li class="facebook"><a href="http://facebook.com/keithbrinks" title="Facebook">Facebook</a></li>
					<li class="twitter"><a href="http://twitter.com/keithbrinks" title="Twitter">Twitter</a></li>
					<li class="linkedin"><a href="http://www.linkedin.com/in/keithbrinks" title="LinkedIn">LinkedIn</a></li>
					<li class="steam"><a href="http://steamcommunity.com/id/Stargater59" title="Steam Community">Steam</a></li>
				</ul>
			
				<nav id="kb_site_nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				</nav>
			
			</header><!-- /kb_site_header -->
			
		</div><!-- /left_column -->
		
		<div id="kb_site_container">
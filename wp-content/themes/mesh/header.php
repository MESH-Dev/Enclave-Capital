<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<?php

	if( is_page_template('templates/homepage-fullscreen.php') ) {
		$imageArray = get_field('background_image');
		$imageURL = $imageArray['sizes']['background-fullscreen'];
	}

?>

<html<?php if( is_page_template('templates/homepage-fullscreen.php') ) { ?> style="background: url('<?php echo $imageURL; ?>') no-repeat center center fixed;" class="background-fullscreen" <?php } ?>>




<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<!-- <meta name="description" content=""> -->
	<meta name="author" content="">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Facebook stuff, if needed
	================================================== -->

	<!-- <meta property="og:image" content="<?php //echo get_template_directory_uri(); ?>/img/ec-fb_logomark.jpg" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="500" />
	<meta property="og:image:height" content="500" /> -->

	<!-- CSS (* with Edge Inspect Fix)
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!-- <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7669312/7346752/css/fonts.css" /> -->

	<!--Font script
	================================================== -->
	<script src="https://use.typekit.net/zps2gqv.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<!--Favicon
	================================================== -->

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class='hfeed site <?php if( is_page_template('templates/homepage-fullscreen.php') && is_front_page() ) { echo "content-fullscreen"; } ?>'>

		<header>
			<div class="container">

				<div class="twelve columns">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Retun to Enclave Capital Home">
							<img src="<?php echo get_template_directory_uri('/')?>/img/ec_logo.png" alt="Enclave Capital logo">
						</a>
					</div>
					<nav class="main-navigation">
						<div class="sidr-close desktop-hide">
							Close X
						</div>
						<?php if(is_front_page()){

								if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );

								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} 
							}elseif (has_nav_menu('inner_nav')){
									$defaults = array(
										'theme_location'  => 'inner_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => 'internal',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );

								}?>
					</nav>
				</div>

			</div>
		</header>
		<div class="mobile-nav-trigger desktop-hide" aria-label="Open navigation">
			<a class="sidr-trigger" href="#" rel="home" aria-label="Retun to Enclave Capital Home">
				<img alt="Open menu" src="<?php echo get_template_directory_uri('/')?>/img/navicon.png">
			</a>
		</div>
		<div class="logo desktop-hide">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Retun to Enclave Capital Home">
				<img alt="Enclave Capital logo" src="<?php echo get_template_directory_uri('/')?>/img/ec_color_logo.png">
			</a>
		</div>
		


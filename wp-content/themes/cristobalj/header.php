<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo("blogname"); ?></title>
  <!-- Icons -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="icon/x-icon" />
  <link rel="apple-touch-icon" href="icon/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon-180x180.png" />
  <!-- Settings -->
	<link rel="stylesheet" href="https://platform.twitter.com/css/timeline.b7949fc5ae6443c45d48eb17624f02ee.light.ltr.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <meta name="description" content="<?php bloginfo('blogdescription'); ?>" />
  <meta name="keywords" content="Cristobal Jodorowsky, metamundo, psicochamanismo, metagenealogia,agenda" />
  <meta name="author" content="Digimundo Technologies" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cristobalj' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<div class="containerMobile">
					<div id="navigation" class="">
					<span id="close" class="text-right"><i class="close fa fa-times"></i></span>
					<h1 class="site-title text-center"><a href="http://ec2-52-34-233-203.us-west-2.compute.amazonaws.com/Cristobal/" rel="home"><span class="title-caps">C</span>ristóbal <span class="title-caps">J</span>odorowsky</a></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/inicio/movil-menu.jpeg" class="img-fluid" alt="">
					<nav id="menu" class="menu">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									) );
									?>
							</nav>
					<div class="share">
						<a href="https://www.facebook.com/cristobal.jodorowsky"><i id="facebook" class="text-center fa fa-facebook-square"></i></a>
						<a href="https://www.instagram.com/explore/tags/cristobaljodorowsky/"><i class="fa fa-instagram"></i></a>
						<a href="https://twitter.com/cristobaljod?lang=es"><i class="fa fa-twitter"></i></a>
						<a href="https://www.youtube.com/channel/UCb3iaGZ7ll3Mbt3IvMYbqHg"><i class="fa fa-youtube-play"></i></a>
					</div>
				</div>
					<button class="menu-button" id="open-button">Open Menu</button>
					<div class="content-wrap">
						<div class="content">
						</div>
					</div><!-- /content-wrap -->
				</div><!-- /container -->
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="title-caps">C</span>ristóbal <span class="title-caps">J</span>odorowsky</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="title-caps">C</span>ristóbal <span class="title-caps">J</span>odorowsky</a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>

				<div  id="langbar" class="widget-area">
					<?php dynamic_sidebar( 'langbar-1' ); ?>
				</div><!-- #secondary -->
				<div id="social" class="mr-3">
					<nav>
						<ul>
							<li><a href="https://www.instagram.com/explore/tags/cristobaljodorowsky/" style="font-size: 36px;" target="_blank" title="" class="fa fa-instagram" aria-hidden="true"></a></li>
							<li><a href="https://www.facebook.com/cristobal.jodorowsky/" style="font-size: 36px;" target="_blank" title="" class="fa fa-facebook-square" aria-hidden="true"></a></li>
							<li><a href="https://twitter.com/cristobaljod?lang=e" style="font-size: 36px;" target="_blank" title="" class="fa fa-twitter" aria-hidden="true"></a></li>
							<li><a href="https://www.youtube.com/channel/UCb3iaGZ7ll3Mbt3IvMYbqHg" style="font-size: 36px;" target="_blank" title="" class="fa fa-youtube-play" aria-hidden="true"></a></li>
						</ul>
					</nav>
				</div>
				<img class="brand-logo" src="<?php echo get_template_directory_uri() ?>/images/comm.png" alt="Community logo">
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cristobalj' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

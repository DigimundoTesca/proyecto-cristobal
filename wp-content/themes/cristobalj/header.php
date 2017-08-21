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
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cristobalj' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<div class="container"> 
					<div class="menu-wrap">
						<nav id="menu" class="menu">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									) );
									?>
							</nav>
						<button class="close-button" id="close-button">Close Menu</button>
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

				<aside id="langbar" class="widget-area">
					<?php dynamic_sidebar( 'langbar-1' ); ?>
				</aside><!-- #secondary -->
				<div id="social">
					<nav>
						<ul>
							<li><a href="" target="_blank" title="" class="fa fa-instagram" aria-hidden="true"></a></li>
							<li><a href="" target="_blank" title="" class="fa fa-facebook-square" aria-hidden="true"></a></li>
							<li><a href="" target="_blank" title="" class="fa fa-twitter" aria-hidden="true"></a></li>
						</ul>
					</nav>
				</div>

				<img class="brand-logo" src="<?php echo get_template_directory_uri() ?>./images/comm.png" alt="Community logo">
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

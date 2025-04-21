<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package partybaby
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=42b78966450e6' async='true'></script>
	
	<!-- Start cookieyes banner --> <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/e0c53deff244218410489f4d/script.js"></script> <!-- End cookieyes banner -->
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NB2H89MQ');</script>
<!-- End Google Tag Manager -->
	
	
</head>

<body <?php body_class(); ?>>
	
	
<?php wp_body_open(); ?>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB2H89MQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site 1" >
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'partybaby' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="promo-banner">
			<div class="container">
				<div class="promo-text">
			🎂 Party Planning Made Easy! 🥳 Step-by-Step Guide & Stunning Online Invitations -  All in One Place! 🌟 <a href="https://partybabyessentials.com/" target="_blanc">Shop Now!</a></div>
			</div>	
		</div>
		<div class="top-header">
			<div class="container">
				<div class="flex">
					<?php
						wp_nav_menu(
								array(
									'theme_location' => 'menu-top',
									'menu_id'        => 'top-menu',
								)
							);
					?>
					<div class="socials">
						<a href="<?php the_field('instagram_url', 'option'); ?>" target="_blanc"><i class="ico ico-instagram"></i></a>
						<a href="<?php the_field('facebook_url', 'option'); ?>" target="_blanc"><i class="ico ico-facebook"></i></a>
						<a href="<?php the_field('pinterest_url', 'option'); ?>" target="_blanc"><i class="ico ico-pinterest"></i></a>
						<a href="<?php the_field('youtube_url', 'option'); ?>" target="_blanc"><i class="ico ico-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>	
		<div class="main-header">
			<div class="container">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
				<div class="navigation">
					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-main',
									'menu_id'        => 'main-menu',
								)
							);
						?>
					</nav>
					<a href="https://quiz.partybabyseattle.com/" class="btn"><?php esc_html_e( 'Plan Your Party', 'partybaby' ); ?></a>
					<button class="open-menu"></button>
				</div>
			</div>
		</div>

		<div class="mobile-menu-container">
			<div class="inner">
				<div class="close-mobile-menu"></div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-main',
							'menu_id'        => 'main-menu-mobile',
						)
					);
				?>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-top',
							'menu_id'        => 'top-menu-mobile',
						)
					);
				?>
				<div class="socials">
					<a href="<?php the_field('instagram_url', 'option'); ?>" target="_blanc"><i class="ico ico-instagram"></i></a>
					<a href="<?php the_field('facebook_url', 'option'); ?>" target="_blanc"><i class="ico ico-facebook"></i></a>
					<a href="<?php the_field('pinterest_url', 'option'); ?>" target="_blanc"><i class="ico ico-pinterest"></i></a>
					<a href="<?php the_field('youtube_url', 'option'); ?>" target="_blanc"><i class="ico ico-youtube"></i></a>
				</div>
			</div>
		</div>
		

	</header>

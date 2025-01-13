<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IAP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sen:wght@400..700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header">
	<div class="container">
		<div class="header__logo">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(  ); ?>/assets/img/logo.png">
			</a>
		</div>
		<div class="header__menu">
			<?php 
				wp_nav_menu( 
					array(
						'theme_location' => 'header-menu' 
					) 
				);
			?>
		</div>
	</div>
</div>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<?php if ( has_nav_menu( 'top' ) ) : ?>
	
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
			
		<?php endif; ?>

	</header><!-- #masthead -->


	<div class="logout_form">
		<form id="logout_form" action="/users/sign_out" method="post">
			<input type="hidden" name="_method" value="delete" />
		</form>
	</div>
	<div class="site-content-contain">
		<div id="content" class="site-content">

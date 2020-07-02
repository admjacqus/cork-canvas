<?php

/**
 * Header file for Cork & Canvas theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header class="header-footer-group cc-header" role="banner">

		<div class="header-inner section-inner">

			<div class="header-titles-wrapper">

				<div class="header-titles">
					<a href="<?php echo get_home_url(); ?>">
						<img class="cclogo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/CC.svg" alt="Cork & Canvas Logo">
					</a>
				</div><!-- .header-titles -->

			</div><!-- .header-titles-wrapper -->

			<?php get_template_part('social');  ?>


		</div><!-- .header-inner -->


	</header><!-- #site-header -->
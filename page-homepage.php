<?php

/**
 * Template Name: Homepage
 * Template Post Type: page
 * The template for displaying single posts and pages.
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */



get_header();
?>

<main id="site-content" role="main">
	<?php if (get_field('hero_image')) {
		$image = get_field('hero_image'); ?>
		<div class="hero" style="background-image:url(<?php echo $image['url']; ?>);">
		<?php } else { ?>
			<div class="hero">
				<img class="hero-image lazy" data-src="https://res.cloudinary.com/dsvt6q8vh/image/upload/v1592166097/CorkCanvas/hero.jpg" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 1200'%3e%3cfilter id='b'%3e%3cfeGaussianBlur stdDeviation='12' /%3e%3c/filter%3e%3cpath fill='%238f9dac' d='M0 0h1600v1200H0z'/%3e%3cg filter='url(%23b)' transform='matrix(6.25 0 0 6.25 3.1 3.1)' fill-opacity='.5'%3e%3cellipse rx='1' ry='1' transform='matrix(-52.9338 3.98011 -5.29508 -70.42236 113.7 156.5)'/%3e%3cellipse fill='%23feffff' rx='1' ry='1' transform='rotate(171.2 5.6 38.2) scale(38.76081 127.80036)'/%3e%3cellipse fill='%23582200' rx='1' ry='1' transform='matrix(-39.76947 -13.92842 8.13472 -23.22687 169.8 89.4)'/%3e%3cellipse fill='%23e4faff' rx='1' ry='1' transform='matrix(29.97572 -181.06862 26.02505 4.30842 234.4 143.4)'/%3e%3cellipse fill='%23fce9fb' rx='1' ry='1' transform='matrix(22.79261 9.35041 -36.51913 89.01922 151.2 10.3)'/%3e%3cellipse fill='%23001831' cx='115' cy='145' rx='47' ry='47'/%3e%3cellipse fill='white' rx='1' ry='1' transform='matrix(-3.62463 34.12986 -48.42918 -5.14323 21.3 104.7)'/%3e%3cpath fill='%23662e00' d='M94 55l8 38-70-18z'/%3e%3c/g%3e%3c/svg%3e" alt="">
			<?php } ?>
			<?php if (get_field('hero_page')) { ?>
				<a class="btn hero-button" href=" <?php the_field('hero_page') ?>">
				<?php } elseif (get_field('hero_url')) { ?>
					<a class="btn hero-button" target="_blank" href="<?php the_field('hero_url') ?>">
					<?php } ?>

					<?php if (get_field('hero_icon')) { ?>
						<i class=" fa <?php the_field('hero_icon') ?>" aria-hidden="true">
						<?php } else { ?>
							<i class="fa fa-calendar-o" aria-hidden="true">
							<?php } ?>
							</i>
							<?php the_field('hero_button_text'); ?>
					</a>
			</div>
			<div class="section about">
				<div class="about-content">
					<h5><?php the_field('about_section'); ?></h5>
					<img class="stroke-gif lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/about-section-paint.gif" alt="">
				</div>
			</div>

			<!-- meet the artists -->
			<div class="section meet">
				<div class="meet-content">
					<h3 class="meet-title"><?php the_field('meet_title'); ?></h3>
					<img class="meet-image lazy" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 368 450'%3e%3cfilter id='b'%3e%3cfeGaussianBlur stdDeviation='12' /%3e%3c/filter%3e%3cpath fill='%23dfa39b' d='M0 0h367v450H0z'/%3e%3cg filter='url(%23b)' transform='translate(.9 .9) scale(1.75781)' fill-opacity='.5'%3e%3cellipse fill='%23a85012' cx='109' cy='62' rx='62' ry='75'/%3e%3cellipse fill='%23f5ffff' cx='74' cy='184' rx='156' ry='42'/%3e%3cellipse fill='%23ffd6c3' rx='1' ry='1' transform='rotate(-30.8 208 -157.9) scale(31.93755 29.44291)'/%3e%3cpath fill='%23120000' d='M147.6-11.6l-3.5 28.8-45.7-5.6 3.5-28.8z'/%3e%3cpath fill='%234c0000' d='M125 130l34-99 3 46z'/%3e%3cpath fill='%23be5302' d='M54 108l38 26-62 8z'/%3e%3cellipse fill='%23dfa260' rx='1' ry='1' transform='matrix(21.67155 31.88871 -18.58093 12.62759 164.6 151.5)'/%3e%3cpath fill='%23feccaa' d='M138 42L94 94l23-86z'/%3e%3c/g%3e%3c/svg%3e" data-src="<?php the_field('meet_image'); ?>" alt="" />
				</div>
			</div>

			<!-- Private Events -->
			<div class="section private-events">
				<div class="events-content">
					<h3 class="events-title"><?php the_field('events_title'); ?></h3>
					<p class="events-copy"><?php the_field('events_copy'); ?></p>
					<a class="btn" href=""> Book a private event</a>

				</div>
			</div>

</main><!-- #site-content -->

<?php get_footer(); ?>
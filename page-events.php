<?php

/**
 * Template Name: Events
 * Template Post Type: page
 * The template for displaying upcoming events 
 */



get_header();
?>

<main id="site-content" role="main">
	<?php $image = get_field('hero_image'); ?>
	<div class="hero" style="background-image:url(<?php echo $image['url']; ?>);">

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
			<img class="meet-image lazy" data-src="<?php the_field('meet_image'); ?>" alt="" />
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
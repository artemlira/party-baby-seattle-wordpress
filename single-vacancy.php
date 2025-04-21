<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package partybaby
 */

get_header();
?>
	<div class="page single-blog-page single-vacancy">
		<section class="post-heading">
			<div class="container wow fadeIn">
				<h1 class="title post-title"><?php the_title();	?></h1>
			</div>
		</section>
		<section class="post-content wow fadeIn" data-wow-delay="0.1s">
			<div class="container">
				<?php the_content() ?>
			</div>
		</section>
		<section class="contact-form-vacancy wow fadeIn">
			<div class="container">
				<h2 class="form-title title">Apply Here!</h2>
				<p class="form-subtitle">FILL OUT THE FORM BELOW AND ATTACH YOUR RESUME!</p>
				<?php echo do_shortcode('[contact-form-7 id="643392b" title="Vacancy Form"]')?>
			</div>
		</section>
		<section class="single-post-tags">
			<?php if (has_tag()) : ?>
				<div class="container">
					<div class="post-tags">
						<?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
					</div>
				</div>
			<?php endif; ?>
		</section>
    </div>
	<?php get_template_part('template-parts/instagram-feed-5'); ?>
	<?php get_template_part('template-parts/subscribe-form'); ?>
<?php

get_footer();

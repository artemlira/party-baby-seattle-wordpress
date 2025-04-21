<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package partybaby
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container wow fadeIn">

		

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<section class="instagram-feed">
        <h2 class="title"><?php esc_html_e( 'GET INSPIRED!', 'partybaby' ); ?></h2>
        <div class="link-wrap">
            <a href="https://www.instagram.com/partybabyseattle/" class="instagram-link"><?php esc_html_e( '@PARTYBABYSEATTLE', 'partybaby' ); ?></a>
        </div>
       
            <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
			<?php get_template_part('template-parts/subscribe-form'); ?>
       
    </section>
</div>
	</main><!-- #main -->
	

<?php
get_footer();

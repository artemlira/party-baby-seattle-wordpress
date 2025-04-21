<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package partybaby
 */

get_header();
?>

<div class="page page-404">
	<div class="container">
		<div class="top-text title">Oops!</div>
		<h1 class="title">404</h1>
		<h2>Page not found</h2>
		<div class="btn-wrap">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">BACK</a>
		</div>
	</div>
</div>

<?php
get_footer();

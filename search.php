<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package partybaby
 */

get_header();
?>

<div class="page page-search">
	<section class="blog-all-heading hide-desktop" style="background: url(<?php the_field('blog_all_top_background', 402) ?>); background-size: cover;"> 
        <div class="container">
            <div class="top-text"><?php the_field('blog_all_top_title', 402) ?></div>
            <h1 class="title"><?php the_field('blog_all_top_main_title', 402) ?><span class="bianka"><?php the_field('blog_all_top_sign', 402) ?></span></h1>
        </div>
    </section>
	<div class="container">
	
		<div class="search-heading">
			<div class="links">
				<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">All Posts</a>
				<a href="<?php echo esc_url( home_url( '/events' ) ); ?>">Corporate Events</a>
			</div>
			<div class="search-block">
				<div class="container">
					<div class="input-container">
						<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
							<label>
								<input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
							</label>
							<input type="hidden" name="post_type" value="post" />
							<button type="submit" class="search-submit"></button>
							
						</form>
						<button class="close-search"></button>
						<button class="open-search"></button>
					</div>
				</div>
			</div>
		</div>
		<div class="search-posts">
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post(); ?>
						<div class="post-item">
							
							<div class="post-meta">
										<img src="<?php the_field('blog_author_icon') ?>" alt="<?php the_field('blog_author_name') ?>">
										<div class="text">
											<div class="post-author-name"><?php the_field('blog_author_name') ?></div>
											<div class="bottom-meta">
												<?php the_time('M j'); ?>
												<svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1" cy="1" r="1" fill="#605E5E"/>
												</svg>
												<?php echo do_shortcode('[rt_reading_time]') ?> min
											</div>
										</div>
									</div>
								<div class="post-content">
									<a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
									<p class="post-excerpt"><?php echo custom_excerpt(290); ?></p>
								</div>
							
						</div>
					<?php

				endwhile;
				else : ?>

				<div class="no-posts">
					<div class="text">
						<h2>No Results Found</h2>
						<p>Looks like we couldn’t find what you’re looking for. Try another search.</p>
					</div>
				</div>
			<?php endif; ?>
		</div>
		
	</div>

</div>

<?php
get_footer();

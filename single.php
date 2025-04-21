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

<div class="page single-blog-page">
    <section class="blog-all-heading hide-desktop wow fadeIn" style="background: url(<?php the_field('blog_all_top_background', 402) ?>); background-size: cover;"> 
        <div class="container">
            <div class="top-text wow fadeIn" data-wow-delay="0.2s"><?php the_field('blog_all_top_title', 402) ?></div>
            <h1 class="title wow fadeIn" data-wow-delay="0.3s"><?php the_field('blog_all_top_main_title', 402) ?><span class="bianka"><?php the_field('blog_all_top_sign', 402) ?></span></h1>
            
        </div>
    </section>
    <section class="search-block">
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
    </section>
    <section class="post-heading">
        <div class="container">
            <div class="post-meta wow fadeIn" data-wow-delay="0.1s">
                <img src="<?php the_field('blog_author_icon') ?>" alt="<?php the_field('blog_author_name') ?>">
                <div class="text">
                    <div class="post-author-name"><?php the_field('blog_author_name') ?></div>
                    <svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1" cy="1" r="1" fill="#605E5E"/>
                    </svg>
                    <?php the_time('M j'); ?>
                    <svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1" cy="1" r="1" fill="#605E5E"/>
                    </svg>
                    <?php echo do_shortcode('[rt_reading_time]') ?> min
                </div>
            </div>
            <h1 class="title post-title wow fadeIn" data-wow-delay="0.2s"><?php the_title();	?></h1>
        </div>
    </section>
    <section class="post-content wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <?php the_content() ?>
        </div>
    </section>
    <section class="contact-form-single wow fadeIn" >
        <div class="container">
            <h2 class="form-title">Want to party with us? </h2>
            <p class="form-subtitle">Get in touch and fill out the form below!</p>
           <div class="hb-p-62b618fe3cd6df00081819e8-13"></div><img height="1" width="1" style="display:none" src="https://www.honeybook.com/p.png?pid=62b618fe3cd6df00081819e8">
<script>
  (function(h,b,s,n,i,p,e,t) {
    h._HB_ = h._HB_ || {};h._HB_.pid = i;;;;
    t=b.createElement(s);t.type="text/javascript";t.async=!0;t.src=n;
    e=b.getElementsByTagName(s)[0];e.parentNode.insertBefore(t,e);
})(window,document,"script","https://widget.honeybook.com/assets_users_production/websiteplacements/placement-controller.min.js","62b618fe3cd6df00081819e8");
</script>
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
    <section class="post-actions wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="share-items">
                <a href="#" class="facebook"></a>
                <a href="#" class="twitter"></a>
                <a href="#" class="linkedin"></a>
                <a href="#" class="copy"></a>
                <a href="#" class="print"></a>
            </div>
        </div>
    </section>
	<section class="blog-posts hide-mobile"> 
        <div class="container">
			<div class="top-container wow fadeIn" data-wow-delay="0.1s">
				<h3>Recent Posts</h3>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">See all</a>
			</div>
			
            <div class="blog-items flex">
                <?php
            
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => 3, 
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
                );

                $blog_query = new WP_Query($args);

        
                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                        <div class="post-item wow fadeIn" data-wow-delay="0.3s">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-img">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <div class="post-content">
                                <h4 class="title post-title"><?php the_title(); ?></h4>
                            </div>
                            
                            </a>
                        </div>
                <?php
                    endwhile;
                else :
                    echo '<p>No posts found.</p>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
	<section class="blog-posts-2 hide-desktop wow fadeIn"> 
        <div class="container">
			<div class="top-container">
				<h3>Recent Posts</h3>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">See all</a>
			</div>
			
            <div class="blog-items flex blog-posts-slider">
                <?php
            
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => 10, 
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
                );

                $blog_query = new WP_Query($args);

        
                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                        <div class="post-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-img">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <div class="post-content">
                                <h4 class="title post-title"><?php the_title(); ?></h4>
                            </div>
                            
                            </a>
                        </div>
                <?php
                    endwhile;
                else :
                    echo '<p>No posts found.</p>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
	<?php get_template_part('template-parts/subscribe-form'); ?>
</div>
	

<?php

get_footer();

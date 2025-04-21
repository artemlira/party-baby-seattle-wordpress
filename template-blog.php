<?php
/*
Template Name: Blog Template
*/
?>
<?php
get_header();
?>

<div class="page page-blog-all">
    <section class="blog-all-heading  wow fadeIn" style="background: url(<?php the_field('blog_all_top_background') ?>); background-size: cover;"> 
        <div class="container">
            <div class="top-text  wow fadeIn" data-wow-delay="0.2s"><?php the_field('blog_all_top_title') ?></div>
            <h1 class="title  wow fadeIn" data-wow-delay="0.3s"><?php the_field('blog_all_top_main_title') ?><span class="bianka wow fadeIn" data-wow-delay="0.4s"><?php the_field('blog_all_top_sign') ?></span></h1>
            
        </div>
    </section>
    <section class="blog-posts"> 
        <div class="container">
            <div class="blog-items flex">
                <?php
            
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => -1, 
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
                );

                $blog_query = new WP_Query($args);

        
                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                        <div class="post-item col-50 wow fadeIn" >
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-img">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <div class="post-content">
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
                                <h2 class="title post-title"><?php the_title(); ?></h2>
                                <p class="post-excerpt"><?php echo custom_excerpt(155); ?></p>
                            </div>
                            
                            </a>
                        </div>
                <?php
                    endwhile;

                
                    the_posts_pagination();

                else :
                    echo '<p>No posts found.</p>';
                endif;

            
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/subscribe-form'); ?>
    
</div>




<label></label>

<?php
// Підключення footer.php
get_footer();
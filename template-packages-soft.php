<?php
/**
 * Template Name: Soft Packages Page
 *
 */

get_header(); ?>

<div class="page page-package-category page-soft-packages">
    <section class="soft-packages-heading"> 
        <div class="container">
            <h1 class="title wow fadeIn" data-wow-delay="0.2s"><span class="sup">THE</span><br>SOFT PLAY<span class="bianka wow fadeIn" data-wow-delay="0.3s">Packages</span></h1>
            <p class="subtitle wow fadeIn" data-wow-delay="0.4s">GREAT FOR INDOOR TODDLER PARTIES</p>
        </div>
    </section>
    <section class="category-package">
            <div class="container">
                <?php
                
                    $args = array(
                        'post_type' => 'package', 
                        'order' => 'asc',
                        'posts_per_page' => -1,
                        'cat' => 5
                    );

                    $packages_query = new WP_Query($args);
                    $increment = 0.1; 
                    $initial_delay = 0.5; 
                    ?>

                    <?php if ($packages_query->have_posts()): ?>
                        <div class="packages-container">
                            <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                                <div class="package-item wow fadeIn" data-wow-delay="<?php echo number_format($initial_delay, 1); ?>s">
                               
                                        <?php if (has_post_thumbnail()): ?>
									<a class="" href="<?php the_permalink(); ?>">
                                            <div class="package-image">
                                                <?php the_post_thumbnail('medium'); ?>
                                                <div class="bage">
                                                    <?php the_field('package_age'); ?> | $<?php the_field('package_price'); ?> 
                                                </div>
                                            </div>
									</a>
                                        <?php endif; ?>
                                        <h3 style="color: <?php the_field('package_title_color') ?>" class="package-title title"><?php the_title(); ?></h3>
                                        <div class="package-description"><?php the_field('package_short_description'); ?></div>
                                        <a class="btn" href="<?php the_permalink(); ?>">Learn More</a>
                                   
                                </div>
                            <?php $initial_delay += $increment; endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p>No packages found.</p>
                    <?php endif; ?>

                    <?php wp_reset_postdata(); 
                ?>
                <div class="return-link-wrap wow fadeIn" data-wow-delay="1.7s">
                    <a href="<?php echo get_permalink_by_slug('packages')?>" class="return-to-packages">RETURN TO PACKAGES</a>
                </div>
            </div>
        </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
</div>

<?php get_footer(); ?>
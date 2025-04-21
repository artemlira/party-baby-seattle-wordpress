<?php
/**
 * Template Name: Bounce Packages Page
 *
 */

get_header(); ?>

<div class="page page-package-category page-bounce-packages">
    <section class="soft-packages-heading"> 
        <div class="container">
            <h1 class="title wow fadeIn" data-wow-delay="0.2s"><span class="sup">THE</span>BOUNCE &</br><span class="bubble">BUBBLE<span> <span class="bianka wow fadeIn" data-wow-delay="0.3s">houses</span> </h1>
        </div>
    </section>
    <section class="collection-navigaton wow fadeIn" data-wow-delay="0.4s">
        <ul>
            <li><a href="#the-itty-bitty-collection">THE ITTY BITTY</a></li>
            <li><a href="#the-mini-collection">THE MINI</a></li>
            <li><a href="#the-perfect-10-collection">THE PERFECT 10</a></li>
            <li><a href="#the-modern-collection">THE MODERN</a></li>
            <li><a href="#the-luxe-collection">THE LUXE</a></li>
            <li><a href="#the-bubble-collection">THE BUBBLE</a></li>
        </ul>
    </section>
    <section class="category-package cat-luxe wow fadeIn" id="the-itty-bitty-collection">
        <div class="collection-title-line">
            <h2 class="title wow fadeIn" data-wow-delay="0.5s">THE ITTY BITTY <br><span class="bianka sign">collection</span></h2>
        </div>
        <div class="container">
            <?php
                $args = array(
                    'post_type' => 'package', 
                    'posts_per_page' => -1,  
                    'order' => 'ASC',       
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'collection',      
                            'field' => 'slug',              
                            'terms' => 'the-itty-bitty-collection',
                        ),
                    ),
                );

                $packages_query = new WP_Query($args);
                ?>
                <?php  $count = 5; if ($packages_query->have_posts()): ?>
                    <div class="packages-container">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count?>s">
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
                                <a class="btn" href="<?php the_permalink(); ?>">LEARN MORE</a>
                            </div>
                        <?php $count++; endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); 
            ?>
        </div>
    </section>
    <section class="category-package cat-luxe mini-collection " id="the-mini-collection">
        <div class="collection-title-line wow fadeIn">
            <h2 class="title">THE MINI<br><span class="bianka sign">collection</span></h2>
        </div>
        <div class="container">
            <?php
                $args = array(
                    'post_type' => 'package', 
                    'posts_per_page' => -1,  
                    'order' => 'ASC',        
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'collection',      
                            'field' => 'slug',               
                            'terms' => 'the-mini-collection', 
                        ),
                    ),
                );

                $packages_query = new WP_Query($args);
                ?>
                <?php $count = 2; if ($packages_query->have_posts()): ?>
                    <div class="packages-container">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count?>s">
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
                                <a class="btn" href="<?php the_permalink(); ?>">LEARN MORE</a>
                            </div>
                        <?php $count++; endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); 
            ?>
        </div>
    </section>
    <section class="category-package cat-luxe perfect-10-collection" id="the-perfect-10-collection">
        <div class="collection-title-line">
            <h2 class="title wow fadeIn">THE PERFECT 10 <br><span class="sign bianka">collection</span></h2>
            
        </div>
        <div class="container">
            <?php
                $args = array(
                    'post_type' => 'package', 
                    'posts_per_page' => -1,  
                    'order' => 'ASC',       
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'collection',      
                            'field' => 'slug',             
                            'terms' => 'the-perfect-10-collection',
                        ),
                    ),
                );

                $packages_query = new WP_Query($args);
                ?>
                <?php $count = 2; if ($packages_query->have_posts()): ?>
                    <div class="packages-container">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count?>s">
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
                                <a class="btn" href="<?php the_permalink(); ?>">LEARN MORE</a>
                            </div>
                        <?php $count++; endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); 
            ?>
        </div>
    </section>  
    <section class="category-package cat-luxe modern-collection" id="the-modern-collection">
        <div class="collection-title-line wow fadeIn">
            <h2 class="title">THE MODERN <br><span class="sign bianka">collection</span></h2>
            
        </div>
        <div class="container">
            <?php
                $args = array(
                    'post_type' => 'package', 
                    'posts_per_page' => -1,   
                    'order' => 'ASC',       
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'collection',       
                            'field' => 'slug',               
                            'terms' => 'the-modern-collection', 
                        ),
                    ),
                );

                $packages_query = new WP_Query($args);
                ?>
                <?php $count=2; if ($packages_query->have_posts()): ?>
                    <div class="packages-container">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count?>s">
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
                                <a class="btn" href="<?php the_permalink(); ?>">LEARN MORE</a>
                            </div>
                        <?php $count++; endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); 
            ?>
        </div>
    </section>
    <section class="category-package cat-luxe luxe-collection" id="the-luxe-collection">
        <div class="collection-title-line wow fadeIn">
            <h2 class="title">THE LUXE <br><span class="sign bianka">collection</span></h2>
            
        </div>
        <div class="container">
            <?php
                $args = array(
                    'post_type' => 'package', 
                    'posts_per_page' => -1,  
                    'order' => 'ASC',        
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'collection',      
                            'field' => 'slug',               
                            'terms' => 'the-luxe-collection', 
                        ),
                    ),
                );

                $packages_query = new WP_Query($args);
                ?>
                <?php $count = 2; if ($packages_query->have_posts()): ?>
                    <div class="packages-container">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count?>s">
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
                                <a class="btn" href="<?php the_permalink(); ?>">LEARN MORE</a>
                            </div>
                        <?php $count++; endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); 
            ?>
        </div>
    </section>
    <section class="category-package cat-luxe bubble-collection" id="the-bubble-collection">
        <div class="collection-title-line wow fadeIn">
            <h2 class="title">THE BUBBLE <br><span class="sign bianka">collection</span></h2>
            
        </div>
        <div class="container">
            <?php
                $args = array(
                    'post_type' => 'package', 
                    'posts_per_page' => -1,  
                    'order' => 'ASC',        
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'collection',      
                            'field' => 'slug',                
                            'terms' => 'the-bubble-collection', 
                        ),
                    ),
                );

                $packages_query = new WP_Query($args);
                ?>
                <?php $count = 2; if ($packages_query->have_posts()): ?>
                    <div class="packages-container">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count?>s">
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
                                <a class="btn" href="<?php the_permalink(); ?>">LEARN MORE</a>
                            </div>
                        <?php $count++; endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); 
            ?>
        </div>
    </section>
    <div class="container">
        <div class="return-link-wrap wow fadeIn" data-wow-delay="0.5s">
            <a href="<?php echo get_permalink_by_slug('packages')?>" class="return-to-packages">RETURN TO PACKAGES</a>
        </div>
    </div>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
</div>

<?php get_footer(); ?>
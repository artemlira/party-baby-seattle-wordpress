<?php
/**
 * Template Name: All Packages Page
 *
 */

get_header(); ?>

    <div class="page page-all-packages">
        <?php 
            $title = get_field('all_packages_title'); 
            $subtitle = get_field('all_packages_subtitle');
            $content = get_field('all_packages_content');
            $bg = get_field('all_packages_heading_background_image');
        ?>
        <section class="packages-heading wow fadeIn" style="background-image: url(<?php echo $bg ?>)">
            <div class="box">
                <h1 class="title wow fadeIn" data-wow-delay="0.2s"><?php echo $title ?></h1>
                <div class="subtitle wow fadeIn" data-wow-delay="0.3s"><?php echo $subtitle ?></div>
                <div class="content wow fadeIn" data-wow-delay="0.4s"><?php echo $content ?></div>
            </div>
        </section>
        <section class="category-package wow fadeIn" >
            <div class="package-title-line">
                <h2 class="title wow fadeIn" data-wow-delay="0.1s">Soft Play Packages</h2>
                <p class="sign bianka wow fadeIn" data-wow-delay="0.2s">Perfect for toddler parties.</p>
            </div>
            <div class="container">
                <?php
                
                    $args = array(
                        'post_type' => 'package', 
                        'order' => 'asc',
                        'posts_per_page' => 8,
                        'cat' => 5
                    );

                    $packages_query = new WP_Query($args);
                    ?>

                    <?php  $count = 1; if ($packages_query->have_posts()): ?>
                        <div class="packages-container">
                            
                            <?php while ($packages_query->have_posts()): $packages_query->the_post(); 
                               ;
                            ?>
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
                                        <a class="btn" href="<?php the_permalink(); ?>">Learn More</a>
                                   
                                </div>
                            <?php $count++; endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p>No packages found.</p>
                    <?php endif; ?>

                    <?php wp_reset_postdata(); 
                ?>
                <div class="link-wrap wow fadeIn">
                    <a href="<?php echo esc_url( home_url( '/soft-play-packages/' ) ); ?>" class="view-all title">VIEW ALL SOFT PLAY PACKAGES</a>
                </div>
            </div>
        </section>
        <section class="category-package cat-luxe wow fadeIn" id="category-luxe"> 
            <div class="package-title-line">
                <h2 class="title wow fadeIn" data-wow-delay="0.1s">The Luxe</h2>
            </div>
            <div class="container">
                <?php
                
                    $args = array(
                        'post_type' => 'package', 
                        'posts_per_page' => -1,  
                        'order' => 'asc',
                        'cat' => 6
                    );

                    $packages_query = new WP_Query($args);
                    ?>

                    <?php $count = 1; if ($packages_query->have_posts()): ?>
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
                                        <a class="btn" href="<?php the_permalink(); ?>">Learn More</a>
                                   
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
        <section class="category-package cat-luxe cat-bounce wow fadeIn">
            <div class="package-title-line">
                <h2 class="title wow fadeIn"  data-wow-delay="0.1s">Bounce and Bubble Houses</h2>
                <p class="sign bianka wow fadeIn"  data-wow-delay="0.2">Book these alone or add to any Essentials package for more fun!</p>
            </div>
            <div class="container">
                <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'collection',
                        'post_type' => 'package',
                        'hide_empty' => false, 
                    ));

                    if (!empty($terms) && !is_wp_error($terms)): ?>
                        <div class="packages-container">
                            <?php $count = 2; foreach ($terms as $term): ?>
                                
                                <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count?>s">
                                    <a class="" href="<?php echo get_permalink_by_slug('bounce-and-bubbles-houses')?>#<?php echo esc_html($term->slug); ?>">
                                        <div class="package-image">
                                            <img src="<?php echo z_taxonomy_image_url($term->term_id); ?>" />
                                            <div class="bage">
                                                <?php the_field('collection_age', 'collection_' . $term->term_id); ?> | $<?php the_field('collection_price', 'collection_' . $term->term_id); ?> 
                                            </div>
                                        </div>
									</a>
                                    <h3 style="color: <?php the_field('collection_title_color', 'collection_' . $term->term_id); ?>" class="package-title title"><?php echo esc_html($term->name); ?></h3>
                                    <div class="package-description"><?php echo esc_html($term->description); ?></div>
                                    <a class="btn" href="<?php echo get_permalink_by_slug('bounce-and-bubbles-houses')?>#<?php echo esc_html($term->slug); ?>">See All</a>
                                </div>
                            <?php $count++; endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p>No collections found.</p>
                    <?php endif; 
                ?>
               
                <div class="link-wrap  wow fadeIn">
                    <a href="<?php echo get_permalink_by_slug('bounce-and-bubbles-houses')?>" class="view-all title">VIEW ALL BOUNCE + BUBBLE HOUSES</a>
                </div>
            </div>
        </section>
        <section class="category-package cat-ball-pit wow fadeIn" >
            <div class="package-title-line" >
                <h2 class="title wow fadeIn" data-wow-delay="0.1s">Ball Pits</h2>
                <p class="sign bianka wow fadeIn" data-wow-delay="0.2s">added fun for hours!</p>
            </div>
            <div class="container">
                <?php
                    $args = array(
                        'post_type' => 'package', 
                        'posts_per_page' => -1,  
                        'order' => 'asc',
                        'cat' => 8
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
                <div class="link-wrap wow fadeIn">
                    <a href="<?php echo esc_url( home_url( '/the-ball-pit/' ) ); ?>" class="view-all title">VIEW ALL BALL PITS</a>
                </div>
            </div>
        </section>
        <section class="category-package cat-bumper-cars cat-ball-pit wow fadeIn">
            <div class="package-title-line">
                <h2 class="title wow fadeIn" data-wow-delay="0.1s">Bumper Cars</h2>
                <p class="sign bianka wow fadeIn" data-wow-delay="0.2s">added fun for hours!</p>
            </div>
            <div class="container">
                <?php
                    $args = array(
                        'post_type' => 'package', 
                        'posts_per_page' => -1,  
                        'order' => 'asc',
                        'cat' => 9
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
        <section id="addons" class="category-package cat-luxe cat-addons wow fadeIn">
            <div class="package-title-line">
                <p class="sign bianka wow fadeIn" data-wow-delay="0.3s">Don't forget your</p>
                <h2 class="title wow fadeIn" data-wow-delay="0.5s">Add-ons!</h2>
            </div>
            <div class="container">
                <?php
                    $args = array(
                        'post_type' => 'package', 
                        'posts_per_page' => -1,  
                        'order' => 'asc',
                        'cat' => 10
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
                                                <?php the_field('package_age'); ?> 
                                                <?php if (get_field('package_price')) { ?>
                                                    <?php echo '| $'; the_field('package_price');?> 
                                               <?php }?>
                                            </div>
                                        </div>
									</a>
                                    <?php endif; ?>
                                    <h3 style="color: <?php the_field('package_title_color') ?>" class="package-title title"><?php the_title(); ?></h3>
                                    <div class="package-description"><?php the_field('package_short_description'); ?></div>
                                    <a class="btn" href="<?php the_permalink(); ?>">See All</a>
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
        <section class="bottom-info wow fadeIn">
            <div class="container">
                <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php the_field('all_packages_info_title')?></h2>
                <div class="content wow fadeIn" data-wow-delay="0.3s"><?php the_field('all_packages_info_content')?></div>
            </div>
        </section>
        <section class="quote-block ">
            <div class="container wow fadeIn">
                <div class="flex">
                    <div class="col-50 wow fadeIn" data-wow-delay="0.4s">
                        <svg width="44" height="32" viewBox="0 0 44 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.1928 15.1604C26.3672 8.05763 32.025 4.16196 33.4808 3.18939C36.1748 1.38937 38.7088 0.480346 40.3499 0.00730866C40.3499 0.00730866 40.3697 0.000682533 40.396 0.000682536C40.6052 0.404367 40.8144 0.807848 41.0235 1.21153C40.8319 1.26391 40.7262 1.28999 40.7262 1.28999C36.0229 2.94573 31.9734 6.36215 29.8464 10.7863C29.5426 11.4211 29.2783 12.0757 29.0472 12.7497C30.4278 12.056 31.9868 11.6633 33.6383 11.6633C39.2533 11.6633 43.8047 16.1726 43.8047 21.7422C43.8047 27.3052 39.2533 31.8145 33.6383 31.8145C29.4039 31.8145 25.7641 29.2489 24.2382 25.5971C23.9615 24.9348 23.8192 24.3943 23.6899 23.8627C22.7521 20.0074 23.7124 16.7294 24.1928 15.1604Z" fill="#F04A23"/>
                            <path d="M1.19477 15.1604C3.36913 8.05763 9.02715 4.16196 10.4827 3.18939C13.1767 1.38937 15.7107 0.480346 17.3518 0.00730866C17.3518 0.00730866 17.3717 0.000682536 17.398 0.000682538C17.6072 0.404367 17.8163 0.807848 18.0255 1.21153C17.8339 1.26391 17.7281 1.28999 17.7281 1.28999C13.0248 2.94573 8.97554 6.36215 6.8484 10.7863C6.54458 11.4211 6.28026 12.0757 6.04916 12.7497C7.4297 12.056 8.9887 11.6633 10.6403 11.6633C16.2552 11.6633 20.8066 16.1726 20.8066 21.7422C20.8066 27.3052 16.2552 31.8145 10.6403 31.8145C6.40583 31.8145 2.76609 29.2489 1.24011 25.5971C0.963454 24.9348 0.821166 24.3943 0.691823 23.8627C-0.245746 20.0074 0.714597 16.7294 1.19477 15.1604Z" fill="#F04A23"/>
                        </svg>
                        <div class="content">
                            <?php the_field('all_packages_quote_content')?>
                        </div>
                        <div class="author">
                            <div class="name"><?php the_field('all_packages_quote_author')?></div>
                            <div class="author-label"><?php the_field('all_packages_quote_author_label')?></div>
                        </div>
                    </div>
                    <div class="col-50 wow fadeIn" data-wow-delay="0.2s">
                        <div class="img-wrap">
                            <img src="<?php the_field('all_packages_quote_image')?>" alt="<?php the_field('all_packages_quote_author')?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="share-form" >
            <div class="container wow fadeInUp" data-wow-delay="0.4s">
                <?php echo do_shortcode('[contact-form-7 id="e4784b5" title="Share Media Form"]')?>
            </div>
        </section>
        <?php get_template_part('template-parts/instagram-feed-5'); ?>
        <?php get_template_part('template-parts/subscribe-form'); ?>
    </div>

<?php get_footer(); ?>
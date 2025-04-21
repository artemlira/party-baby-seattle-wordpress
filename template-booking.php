<?php
/**
 * Template Name: Booking Page
 *
 */

get_header(); ?>
<div class="page page-booking">
    <section class="booking-hero wow fadeIn" style="background-image: url(<?php the_field('booking_hero_background_image_url') ?>); background-size: cover; ">
        <div class="container">
            <h1 class="title wow fadeIn" data-wow-delay="0.2s">
                <span><?php the_field('booking_hero_page_title_1') ?></span>
                <span class="bianka"><?php the_field('booking_hero_page_title_2') ?></span>
            </h1>
            <div class="text title wow fadeIn" data-wow-delay="0.3s">
                <?php the_field('booking_hero_page_text') ?>
            </div>
        </div>
    </section>
    <section class="booking-cta-blocks">
        <div class="container">
            <div class="flex">
                <div class="col-50 wow fadeIn" data-wow-delay="0.2s">
                    <div class="wrap">
                        <?php $btn_1 = get_field('booking_cta_col_1_button'); ?>
                        <a href="<?php echo $btn_1['url']?>" class="btn modal-booking-open"><?php echo $btn_1['title']?></a>
                        <div class="text">
                            <?php the_field('booking_cta_col_1_text') ?>
                        </div>
                    </div>
                </div>
                <div class="col-50 wow fadeIn" data-wow-delay="0.4s">
                    <div class="wrap">
                        <?php $btn_2 = get_field('booking_cta_col_2_button'); ?>
                        <a href="<?php echo $btn_2['url']?>" class="btn"><?php echo $btn_2['title']?></a>
                        <div class="text">
                            <?php the_field('booking_cta_col_2_text') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="booking-heading-bg-block wow fadeIn">
        <div class="container" style="background-image: url(<?php the_field('booking_heading_bg_url') ?>); background-size: cover; ">
            <h2 class="title wow fadeIn" data-wow-delay="0.3s" ><?php the_field('booking_heading_bg_title') ?></h2>
        </div>
    </section>
    <section class="booking-list" id="booking">
        <div class="container">
            <div class="booking-list-heading">
                <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php the_field('booking_list_title') ?></h2>
                <div class="text wow fadeIn" data-wow-delay="0.2s"><?php the_field('booking_list_heading_text') ?></div>
            </div>
            <div class="collection-navigaton booking-filters  wow fadeIn" data-wow-delay="0.3s">
                <ul>
                    <li><a class="btn btn-line active" data-category="all"href="#">All Packages</a></li>
                    <li><a class="btn btn-line" data-category="soft-play-packages" href="#">Soft Play Packages</a></li>
                    <li><a class="btn btn-line" data-category="the-luxe"href="#">Luxe Packages</a></li>
                    <li><a class="btn btn-line" data-category="bounce-and-bubble-houses" href="#">Bounce & Bubble Houses</a></li>
                    <li><a class="btn btn-line" data-category="ball-pit" href="#">Ball Pits</a></li>
                </ul>
            </div>
            <div class="booking-list-container">
                <?php 
                    $post_ids = get_field('booking_list_packages_ids');
                    $args = array(
                        'post_type' => 'package', 
                        'order' => 'ASC',
                        'orderby' => 'post__in', 
                        'posts_per_page' => -1,
                        'post__in' => $post_ids 
                    );

                    $packages_query = new WP_Query($args);
                ?>

                <?php if ($packages_query->have_posts()): ?>
                    <div class="packages-container">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <?php 
                                // Отримуємо категорії для поточного поста
                                $categories = get_the_terms(get_the_ID(), 'category'); 
                                $category_slug = '';
                                $category_name = '';
                                if ($categories && !is_wp_error($categories)) {
                                    // Беремо перший slug
                                    $category_slug = $categories[0]->slug;
                                    $category_name = $categories[0]->name;
                                }
                            ?>
                            <div class="package-item wow fadeIn" data-wow-delay="0.1s" data-category="<?php echo esc_attr($category_slug); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="package-image wow fadeIn" data-wow-delay="0.2s">
										<a class="" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full'); ?>
                                        <div class="bage">
                                            <?php the_field('package_age'); ?>
                                            <?php if (get_field('package_price')): ?>
                                                | $<?php the_field('package_price'); ?>
                                            <?php endif; ?>
                                        </div>
										</a>
                                    </div>
                                <?php endif; ?>
                                <div class="content wow fadeIn" data-wow-delay="0.3s">
									<h3 class="package-title"><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <?php if ($category_name) { ?>
                                        <h4 class="package-category"><?php echo $category_name ?></h4>
                                    <?php }?>
									
                                    <div class="price-description"><?php the_field('package_price_description'); ?></div>
									<span class="see-more">See more</span>
                                    <div class="package-description"><?php the_field('package_description'); ?></div>
                                </div>
                                <a class="btn btn-line wow fadeIn open-package-modal"
								   data-wow-delay="0.4s"
								   href="#"
								   data-iframe="<?php echo esc_attr(get_field('package_booking_form')); ?>">
								   Book
								</a>

								<div class="modal modal-package">
									<div class="modal-overlay"></div>
									<div class="modal-content">
										<button class="close-modal">&times;</button>
										<div class="iframe-container">
											 <div class="iframe-loader"></div>
	
										</div>
									</div>
								</div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <section class="booking-map">
        <div class="container">
            <div class="flex">
                <div class="col-50">
                    <h2 class="title wow fadeIn" data-wow-delay="0.3s"><?php the_field('booking_map_title') ?></h2>
                    <div class="text wow fadeIn" data-wow-delay="0.4s"><?php the_field('booking_map_text') ?></div>
                    <?php $btn = get_field('booking_map_button'); ?>
                    <a href="<?php echo $btn['url']?>" data-wow-delay="0.5s" class="btn hide-mobile wow fadeIn"><?php echo $btn['title']?></a>
                </div>
                <div class="col-50">
                    <div class="top-text wow fadeIn" data-wow-delay="0.2s">
                        <?php the_field('booking_map_top_label') ?>
                    </div>
                    <figure class="wow fadeIn" data-wow-delay="0.1s">
                        <img src="<?php the_field('booking_map_image_url') ?>" alt="Map">
                    </figure>
                    <div class="bottom-text wow fadeIn" data-wow-delay="0.2s">
                        <?php the_field('booking_mab_bottom_label') ?>
                    </div>
                    <a href="<?php echo $btn['url']?>" data-wow-delay="0.5s" class="btn hide-desktop wow fadeIn"><?php echo $btn['title']?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="booking-bottom-text-block wow fadeIn">
        <div class="container">
            <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php the_field('booking_page_bottom_text_title') ?></h2>
            <div class="text wow fadeIn" data-wow-delay="0.3s"><?php the_field('booking_page_bottom_text_text') ?></div>
        </div>
    </section>
    <?php the_field('') ?>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
</div>

<div class="modal modal-booking">
    <div class="modal-content">
        <div class="close-modal"></div>
        <div class="flex">
            <img class="title-img-mob hide-desktop" src="<?php echo get_template_directory_uri()?>/img/partybabyevents-mob.svg" alt="<?php bloginfo( 'name' ); ?>">
            <div class="col-50 hide-mobile">
                <img class="title-img" src="<?php echo get_template_directory_uri()?>/img/partybabyevents.svg" alt="<?php bloginfo( 'name' ); ?>">
                <div class="text-title">QUESTIONS BEFORE YOU BOOK?</div>
                <h3 class="title">Say hello!</h3>
                <div class="bianka">we'd love to hear from you.</div>
                <div class="contact-info">
                    <a href="mailto:<?php the_field('option_email', 'option'); ?>"><?php the_field('option_email', 'option'); ?></a>
                    <a href="tel:<?php the_field('option_footer_phone_number', 'option'); ?>"><?php the_field('option_footer_phone_text', 'option'); ?></a>
                </div>
            </div>
            <div class="col-50">
                <div class="hb-p-62b618fe3cd6df00081819e8-7 honeybook-contact-form"></div><img height="1" width="1" style="display:none" src="https://www.honeybook.com/p.png?pid=62b618fe3cd6df00081819e8">
<script>
  (function(h,b,s,n,i,p,e,t) {
    h._HB_ = h._HB_ || {};h._HB_.pid = i;;;;
    t=b.createElement(s);t.type="text/javascript";t.async=!0;t.src=n;
    e=b.getElementsByTagName(s)[0];e.parentNode.insertBefore(t,e);
})(window,document,"script","https://widget.honeybook.com/assets_users_production/websiteplacements/placement-controller.min.js","62b618fe3cd6df00081819e8");
</script>
</script>
            </div>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="page single-product">
    <section class="top-product-info single">
        <div class="container">
            <div class="flex">
                <div class="col-50">
                    <h1 style="color: <?php the_field('package_inner_title_color')?>" class="title hide-desktop wow fadeIn"><span class="title-reg"><?php the_field('package_top_heading_title')?></span><i style="color: <?php the_field('package_title_color_italic')?>"><?php the_field('package_top_heading_title_italic')?></i></h1>
                    <div class="gallery-container wow fadeIn" data-wow-delay="0.1s">
                        <?php
                            $gallery_images = get_field('package_gallery'); 
                            if ($gallery_images): ?>
                                <div class="product-slider-for">
                                    <?php foreach ($gallery_images as $image): ?>
                                        <div class="slider-item" src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>"> 
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" class="slider-image">
                                            <div class="desc">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="product-slider-nav wow fadeIn" data-wow-delay="0.7s">
                                    <?php foreach ($gallery_images as $image): ?>
                                        <div class="slider-item-nav">
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" class="slider-thumbnail">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-50">
                    <div class="text-container">
                        <h1 style="color: <?php the_field('package_inner_title_color')?>" class="title hide-mobile wow fadeIn" data-wow-delay="0.1s"><span class="title-reg"><?php the_field('package_top_heading_title')?></span><i style="color: <?php the_field('package_title_color_italic')?>"><?php the_field('package_top_heading_title_italic')?></i></h1>
                        <div class="content wow fadeIn" data-wow-delay="0.2s"><?php the_field('package_description')?></div>
                        <div class="price-description wow fadeIn" data-wow-delay="0.2s"><?php the_field('package_price_description')?></div>
                        <div class="delivery-info wow fadeIn" data-wow-delay="0.2s"><?php the_field('package_delivery_information')?></div>
                        <div class="recomend wow fadeIn" data-wow-delay="0.3s">
                            <div class="heading">IDEAL FOR:</div>
                            <div class="text"><?php the_field('package_ideal_for')?></div>
                        </div>
                        <div class="choose-your-ball hide-desktop wow fadeIn" data-wow-delay="0.3s">
                            <img src="<?php echo get_template_directory_uri()?>/img/choose-colors.svg" alt="Choose Your Ball Colors">
                        </div>
                        <div class="btn-wrap wow fadeIn" data-wow-delay="0.4s">
                            <?php 
                            $button = get_field('instagram_page_top_button');
                            $acuity_url = get_field('package_booking_form')          
                            ?>
                            <?php if ($acuity_url === '') { ?>
                                <a href="<?php echo esc_url( home_url( '/party-booking/' ) ); ?>" class="btn">CUSTOMIZE YOUR PACKAGE</a>
                            <?php } else { ?>
                                <a class="btn open-booking-form">CUSTOMIZE YOUR PACKAGE</a>
                            <?php }
                            ?>
                            
                            
                        </div>
                        <div class="choose-your-ball hide-mobile">
                            <img src="<?php echo get_template_directory_uri()?>/img/choose-colors.svg" alt="Choose Your Ball Colors">
                        </div>
                        <div class="modal choose-your-ball-modal">
                            <div class="modal-content">
                                <div class="close-modal"></div>
                                <img class="title-img" src="<?php echo get_template_directory_uri()?>/img/choose-colors-sm.svg" alt="Choose Your Ball Colors">
                                <h3 class="title">JUMBO 3 INCH COMMERCIAL BUSINESS GRADE BALLS</h3>
                                <?php 
                                $images = get_field('ball_colors_package_page', 'option');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if ($images): ?>
                                    <div class="gallery-grid">
                                        <?php foreach ($images as $image): ?>
                                            <div class="gallery-item">
                                                <figure>
                                                    <?php echo wp_get_attachment_image($image['ID'], $size); ?>
                                                </figure>
                                                <?php if (!empty($image['title'])): ?>
                                                    <p class="gallery-title"><?php echo esc_html($image['title']); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </section>
    <section class="cta-block">
        <div class="container">
            <div class="flex">
                <div class="col-50 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text">
                        <h2 class="title wow fadeIn" data-wow-delay="0.4s"><?php the_field('package_cta_title') ?></h2>
                        <h3 class="subtitle title wow fadeIn" data-wow-delay="0.4s"><?php the_field('package_cta_subtitle') ?></h3>
                        <div class="description wow fadeIn" data-wow-delay="0.5s"><?php the_field('package_cta_description') ?></div>
                        <div class="socials wow fadeIn" data-wow-delay="0.5s">
                            <a href="<?php the_field('instagram_url', 'option'); ?>" target="_blanc"><i class="ico ico-instagram"></i></a>
                            <a href="<?php the_field('facebook_url', 'option'); ?>" target="_blanc"><i class="ico ico-facebook"></i></a>
                            <a href="<?php the_field('yelp_url', 'option'); ?>" target="_blanc"><i class="ico ico-yelp"></i></a>
                            <a href="<?php the_field('pinterest_url', 'option'); ?>" target="_blanc"><i class="ico ico-pinterest"></i></a>
                        </div>
                        <?php $button = get_field('instagram_page_cta_button')?>
                        <?php if ($acuity_url === '') { ?>
                                <a href="<?php echo esc_url( home_url( '/party-booking/' ) ); ?>" data-wow-delay="0.6s" class="btn fadeIn">RESERVE YOUR PARTY</a>
                            <?php } else { ?>
                                <a class="btn open-booking-form fadeIn" data-wow-delay="0.6s">RESERVE YOUR PARTY</a>
                            <?php }?>
                    </div>
                </div>
                <div class="col-50 wow fadeIn">
                    <?php $video = get_field('package_cta_media'); ?>
                    <div class="video-container">
                        <video id="reserveVideo" src="<?php  echo $video[0]['url'] ?>" autoplay loop muted playsinline data-wf-ignore="true" data-object-fit="cover"> 
                            <source src="<?php  echo $video[0]['url'] ?>" type="video/mp4">
                            <p class="video-error"><?php esc_html_e( 'Your browser doesen\'t support HTML5 video', 'partybaby' ); ?></p>
                        </video>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="booking-form" id="booking_form">
        <div class="container">
            <?php the_field('package_booking_form')?>
        </div>
    </section>
    <section class="phone-block wow fadeIn">
        <div class="container">
        <img class="wow fadeIn" data-wow-delay="0.1s" src="<?php echo get_template_directory_uri()?>/img/inst.png" alt="Photo" />
        <div class="content">
            <h2 class="title wow fadeIn" data-wow-delay="0.2s">Add a Customized IG Reel to Capture Every Moment of Your Event!</h2>
            <?php $button = get_field('instagram_page_phone_block_button') ?>
            <a href="<?php echo esc_url( home_url( '/instagram-reels-add-on/' ) ); ?>" class="btn wow fadeIn" data-wow-delay="0.4s">Learn More About Our IG Reel Add-on</a>
        </div>
        </div>
    </section>
    <section class="insta-counter wow fadeIn">
        <div class="container">
            <div class="flex">
                <div class="col-50 wow fadeIn" data-wow-delay="0.2s">
                    <div class="counter num title" data-start="2500000" data-end="4000000">4,000,000</div>
                    <div class="text">Total Views</div>
                </div>
                <div class="col-50 wow fadeIn" data-wow-delay="0.4s">
                    <div class="counter num title" data-start="300" data-end="500">500</div>  
                    <div class="text">Total Reels Produced</div>
                </div>
            </div>
            <div class="bottom-text wow fadeIn" data-wow-delay="0.1s">
                Available as an Add-on for any Party Package
            </div>
        </div>
    </section>
    <section class="add-ons">
        <div class="container">
            <h3 class="add-ons-title wow fadeIn" data-wow-delay="0.2s">POPULAR ADD-ONS:</h3>      
            <?php
                $args = array(
                    'post_type' => 'package', 
                    'posts_per_page' => 4,  
                    'order' => 'asc',
                    'cat' => 10
                );

                $packages_query = new WP_Query($args);
                ?>
                <?php if ($packages_query->have_posts()): ?>
                    <div class="packages-container wow fadeIn" data-wow-delay="0.2s">
                        <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                            <a class="" href="<?php the_permalink(); ?>">
                                <div class="package-item wow fadeIn" data-wow-delay="0.4s">
                                    <?php if (has_post_thumbnail()): ?>
                                        <div class="package-image">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="package-title title"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>No packages found.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); 
            ?>
        </div>
    </section>
    <section class="category-package cat-luxe recent-posts wow fadeIn"> 
        <?php 
            $categories = get_the_category(); 
            if ( ! empty( $categories ) ) {
                $category = $categories[0]; // Get the first category
                ?>
                <h2>OUR OTHER <?php echo esc_html( $category->name ); ?></h2>
                <?php
            } else {
                // Handle case where there is no category
                ?>
                <h2>OUR OTHER POSTS</h2>
                <?php
            }
        ?>
        <div class="container">
                <?php
                
                    $args = array(
                        'post_type' => 'package', 
                        'posts_per_page' => 5,  
                        'orderby' => 'rand',
                        'cat' => $category->term_id
                    );

                    $packages_query = new WP_Query($args);
                    ?>

                    <?php if ($packages_query->have_posts()): ?>
                        <div class="packages-container">
                            <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="package-item wow fadeIn" data-wow-delay="0.2s">
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="package-image">
                                                    <?php the_post_thumbnail('medium'); ?>
                                                    <div class="bage">
                                                        <?php the_field('package_age'); ?> 
                                                        <?php if (get_field('package_price')) { ?>
                                                            <?php echo '| $'; the_field('package_price');?> 
                                                    <?php }?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <h3 style="color: <?php the_field('package_title_color')?>" class="package-title title"><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p>No packages found.</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); 
                ?>
            </div>
            <div class="return-link-wrap wow fadeIn" data-wow-delay="0.4s">
            <a href="<?php echo get_permalink_by_slug('packages')?>" class="return-to-packages">RETURN TO PACKAGES</a>
        </div>
    </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
</div>

<?php get_footer();?>
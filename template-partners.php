<?php
/**
 * Template Name: Partners Page
 *
 */

get_header(); ?>



<div class="page partners-page">
    <section class="partners-hero wow fadeIn">
        <div class="container" style="background: url(<?php the_field('partners_page_hero_background_url') ?>); background-size: cover;">
            <h1 class="bianka wow fadeIn" data-wow-delay="0.2s"><?php the_field('partners_page_hero_title_1') ?></h1>
            <h2 class="title wow fadeIn" data-wow-delay="0.3s"><?php the_field('partners_page_hero_title_2') ?></h2>
            <div class="steps">
                <div class="flex">
                    <div class="col-30 wow fadeIn" data-wow-delay="0.4s">
                        <div class="item">
                            <span class="title">01</span>
                            <p><?php the_field('partners_page_herostep_1') ?></p>
                        </div>
                    </div>
                    <div class="col-30 wow fadeIn" data-wow-delay="0.5s">
                        <div class="item">
                            <span class="title">02</span>
                            <p><?php the_field('partners_page_herostep_2') ?></p>
                        </div>
                    </div>
                    <div class="col-30 wow fadeIn" data-wow-delay="0.6s">
                        <div class="item">
                            <span class="title">03</span>
                            <p><?php the_field('partners_page_herostep_3') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners-image-left-text wow fadeIn">
        <div class="container">
            <div class="flex">
                <div class="col-50 wow fadeIn" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php the_field('image_left_text_image_url') ?>" alt="<?php bloginfo( 'name' ); ?>">
                    </figure>
                </div>
                <div class="col-50 wow fadeIn" data-wow-delay="0.3s">
                    <div class="content">
                        <?php the_field('image_left_text_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners-cta wow fadeIn">
        <div class="container">
            <?php 
                $button_1 = get_field('partners_page_cta_button_1'); 
                $button_2 = get_field('partners_page_cta_button_2'); 
            ?>
            <a class="btn-sqr wow fadeIn" href="#join" data-wow-delay="0.1s"><?php echo $button_1['title'] ?></a>
            <div class="text wow fadeIn" data-wow-delay="0.2s"><?php the_field('partners_page_cta_text_1') ?></div>
            <a class="btn-sqr wow fadeIn" href="#join" data-wow-delay="0.3s"><?php echo $button_2['title'] ?></a>
            <div class="text wow fadeIn" data-wow-delay="0.4s"><?php the_field('partners_page_cta_text_2') ?></div>
        </div>
    </section>
    <section class="partners-benefits">
        <div class="container">
            <?php $count = 2; if (have_rows('partners_page_benefits_items')) : ?>
                <div class="benefits-list">
                    <?php while (have_rows('partners_page_benefits_items')) : the_row(); ?>
                        <?php 
                        $benefit = get_sub_field('partners_page_benefits_item'); 
                        ?>
                        <?php if ($benefit) : ?>
                            <li class="benefit-item wow fadeIn" data-wow-delay="0.<?php echo $count ?>s">
                                <h3 class="benefit-title">
                                    <?php echo esc_html($benefit['title']); ?>
                                </h3>
                                <p class="benefit-description">
                                    <?php echo esc_html($benefit['description']); ?>
                                </p>
                            </li>
                        <?php endif; ?>
                    <?php $count++; endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="partners-text-image-right wow fadeIn">
        <div class="container">
            <div class="flex">
                <div class="content wow fadeIn" data-wow-delay="0.3s">
                    <?php the_field('partners_page_text_image_right_content') ?>
                </div>
                <figure class="wow fadeIn" data-wow-delay="0.1s">
                    <img src="<?php the_field('partners_page_text_image_right_image_url') ?>" alt="<?php bloginfo( 'name' ); ?>">
                </figure>
            </div>
        </div>
    </section>
    <section class="partners-how-it-works wow fadeIn">
        <div class="container">
            <?php if (have_rows('partners_page_how_it_works_items')) : ?>
                <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php the_field('partners_page_how_it_works_title') ?></h2>
                <ul class="how-it-works-list wow fadeIn" data-wow-delay="0.3s">
                    <?php while (have_rows('partners_page_how_it_works_items')) : the_row(); ?>
                        <?php 
                        // Get the 'item' text field
                        $item_text = get_sub_field('item'); 
                        ?>
                        <?php if ($item_text) : ?>
                            <li class="how-it-works-item">
                                <?php echo esc_html($item_text); ?>
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <section class="partners-videos">
        <div class="container">
            <div class="flex">
                <div class="col-50 wow fadeIn" data-wow-delay="0.2s">
                    <img class="hide-mobile" src="<?php echo get_template_directory_uri()?>/img/partners.svg" alt="<?php bloginfo( 'name' ); ?>">
                    <img class="hide-desktop "src="<?php echo get_template_directory_uri()?>/img/partners2.svg" alt="<?php bloginfo( 'name' ); ?>">    
                </div>
                <div class="col-50">
                    <div class="partners-videos-slider wow fadeIn" data-wow-delay="0.5s">
                        <?php 
                            $videos = get_field('partners_page_slider_videos'); 

                            if ($videos) : 
                                foreach ($videos as $video) : 
                                    $video_url = $video['url']; 
                            ?>
                            <div class="video-container">
                                <video src="<?php echo esc_url($video_url); ?>"  loop muted playsinline  data-wf-ignore="true" data-object-fit="cover"> 
                                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                                    <p class="video-error"><?php esc_html_e( 'Your browser doesn\'t support HTML5 video', 'partybaby' ); ?></p>
                                </video>
                                <div class="action">
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4096 7.35309C17.8899 7.60849 18.2916 7.98976 18.5718 8.45604C18.852 8.92232 19 9.45604 19 10C19 10.544 18.852 11.0777 18.5718 11.544C18.2916 12.0103 17.8899 12.3915 17.4096 12.6469L4.59715 19.6137C2.53408 20.7367 0 19.2767 0 16.9678V3.03322C0 0.723286 2.53408 -0.735671 4.59715 0.385296L17.4096 7.35309Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                                
                            <?php 
                                endforeach;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="partners-gallery wow fadeIn">
        <div class="container">
            <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php the_field('partners_page_photo_gallery_title') ?></h2>
        </div>
        <div class="home-gallery">
            <?php 
                $gallery_images = get_field('partners_page_photo_gallery_slider'); 
                if ($gallery_images) :
                    $count = 0;
                    foreach ($gallery_images as $index => $image) : 
                        if ($index % 2 === 0) : // Начинаем новый контейнер для каждых двух изображений
                            if ($index > 0) : 
                                echo '</div>'; // Закрываем предыдущий контейнер
                            endif;
                            echo '<div class="gallery-items">';
                        endif;
                        ?>
                        <div class="item wow fadeIn <?php if (empty($image['caption'])) : ?>no-caption<?php endif; ?>" data-wow-delay="0.<?php echo $count?>s">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php if (!empty($image['url']) ) : ?>
                                <div class="desc" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    <!-- <?php if (!empty($image['caption'])) : ?><h3><?php echo esc_html($image['caption']); ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($image['description'])) : ?><p><?php echo esc_html($image['description']); ?></p>
                                    <?php endif; ?> -->
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php 
                        $count++;
                    endforeach;
                    if ($count % 2 !== 0) : // Если нечетное количество, закрываем контейнер
                        echo '</div>';
                    endif;
                endif;
            ?>
        </div>
    </section>
    <section class="partners-text-block-full-width wow fadeIn">
        <div class="container">
            <div class="content wow fadeIn" data-wow-delay="0.3s">
                <?php the_field('partners_page_text_block_full_width') ?>
            </div>
        </div>
    </section>
    <section class="home-testimonials ">
        <div class="container wow fadeIn" data-wow-delay="0.3s">
            <h2 class="title"><?php esc_html_e( 'What Our Customers Are Saying', 'partybaby' ); ?></h2>
            <?php echo do_shortcode('[reviews-feed feed=1]')?>
        </div>
    </section>
    <section class="image-comparison wow fadeIn" data-component="image-comparison-slider">
            <?php
                $compare_img_before = get_field('partners_page_photo_before_url');
                $compare_img_after = get_field('partners_page_photo_after_url');
            ?>
        <h2 class="mob-title">Before/After</h2>
            <div class="image-comparison__slider-wrapper">
                <label for="image-comparison-range" class="image-comparison__label">Move image comparison slider</label>
                <input type="range" min="0" max="100" value="50" class="image-comparison__range" id="image-compare-range" data-image-comparison-range="">

                <div class="image-comparison__image-wrapper  image-comparison__image-wrapper--overlay" data-image-comparison-overlay="">
                <figure class="image-comparison__figure image-comparison__figure--overlay">
                    <picture class="image-comparison__picture">
                    <source media="(max-width: 40em)" srcset="<?php echo $compare_img_before ?>">
                    <source media="(min-width: 40.0625em) and (max-width: 48em)" srcset="<?php echo $compare_img_before ?>">
                    <img src="<?php echo $compare_img_before ?>" alt="Before" class="image-comparison__image">
                    </picture>

                    <figcaption class="image-comparison__caption image-comparison__caption--before wow fadeIn" data-wow-delay="0.2s">
                    <span class="image-comparison__caption-body">Before</span>
                    </figcaption>
                </figure>
                </div>

                <div class="image-comparison__slider" data-image-comparison-slider="">
                <span class="image-comparison__thumb" data-image-comparison-thumb="">
            
                </span>
                </div>

                <div class="image-comparison__image-wrapper">
                <figure class="image-comparison__figure">
                    <picture class="image-comparison__picture">
                    <source media="(max-width: 40em)" srcset="<?php echo $compare_img_after ?>">
                    <source media="(min-width: 40.0625em) and (max-width: 48em)" srcset="<?php echo $compare_img_after ?>">
                    <img src="<?php echo $compare_img_after ?>" alt="After" class="image-comparison__image">
                    </picture>

                    <figcaption class="image-comparison__caption image-comparison__caption--after wow fadeIn" data-wow-delay="0.4s">
                    <span class="image-comparison__caption-body">After</span>
                    </figcaption>
                </figure>
                </div>
            </div>
    </section>
    <section class="partners-form" id="join">
        <div class="heading">
            <div class="wrap">
                <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php the_field('partners_page_form_title') ?></h2>
                <p class="text wow fadeIn" data-wow-delay="0.4s"><?php the_field('partners_page_form_subtitle') ?></p>
            </div>
        </div>
        <div class="form-wrap wow fadeIn" data-wow-delay="0.5s">
            <?php echo do_shortcode('[contact-form-7 id="902846d" title="Partners Venue"]')?>
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
                    <div class="counter num title" data-start="2500000" data-end="3000000">2,500,000</div>
                    <div class="text">Total Views</div>
                </div>
                <div class="col-50 wow fadeIn" data-wow-delay="0.4s">
                    <div class="counter num title" data-start="300" data-end="400">300</div>  
                    <div class="text">Total Reels Produced</div>
                </div>
            </div>
            <div class="bottom-text wow fadeIn" data-wow-delay="0.5s">
                Available as an Add-on for any Party Package
            </div>
        </div>
    </section>
    <section class="bottom-text-block">
        <div class="container  wow fadeIn" data-wow-delay="0.3s">
            <?php the_field('partners_page_bottom_text') ?>
        </div>
    </section>
    <?php the_field('') ?>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
</div>



<?php

get_footer();
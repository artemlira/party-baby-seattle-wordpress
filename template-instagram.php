<?php
/**
 * Template Name: Instagram Add On Page
 *
 */

get_header(); ?>

  <script src="https://player.vimeo.com/api/player.js"></script>

  <div class="page single-product page-instagram-add-on">
    <section class="top-product-info" id="info">
      <div class="container">
        <div class="flex">
          <div class="col-50">
            <h1 class="title hide-desktop wow fadeIn"
                data-wow-delay="0.1s"><?php the_field('instagram_page_top_title') ?></h1>
            <div class="gallery-container wow fadeIn" data-wow-delay="0.4s">
              <?php
              $gallery_images = get_field('instagram_page_top_images'); // Отримуємо галерею як масив зображень
              if ($gallery_images): ?>
                <div class="product-slider-for">
                  <?php foreach ($gallery_images as $image): ?>
                    <div class="slider-item" src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">

                      <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" class="slider-image">
                    </div>
                  <?php endforeach; ?>
                </div>

                <div class="product-slider-nav wow fadeIn" data-wow-delay="0.6s">
                  <?php foreach ($gallery_images as $image): ?>
                    <div class="slider-item-nav">
                      <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                           class="slider-thumbnail">
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-50">
            <div class="text-container">
              <h1 class="title hide-mobile wow fadeIn"
                  data-wow-delay="0.3s"><?php the_field('instagram_page_top_title') ?></h1>
              <div class="content wow fadeIn"
                   data-wow-delay="0.4s"><?php the_field('instagram_page_top_description') ?></div>
              <div class="price wow fadeIn" data-wow-delay="0.5s">
                Add-on Cost: $<?php the_field('instagram_page_top_price') ?>/Event
              </div>
              <div class="recomend wow fadeIn" data-wow-delay="1.7s">
                <div class="heading">IDEAL FOR:</div>
                <div class="text"><?php the_field('instagram_page_top_ideal_for') ?></div>
              </div>
              <div class="btn-wrap wow fadeIn" data-wow-delay="0.5s">
                <?php $button = get_field('instagram_page_top_button'); ?>
                <a class="btn open-booking-form"><?php echo $button['title'] ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="booking-form" id="booking_form">
      <div class="container">
        <?php echo get_field('instagram_page_booking_form'); ?>
      </div>
    </section>
    <section class="video-carousel wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php the_field('instagram_page_videos_title') ?></h2>
        <?php if (have_rows('instagram_page_videos')): ?>
          <div class="video-gallery vimeo-video-container wow fadeIn" data-wow-delay="0.3s">
            <?php while (have_rows('instagram_page_videos')): the_row(); ?>
              <?php
              $image_url = get_sub_field('image');
              $iframe = get_sub_field('iframe');
              ?>
              <div class="video-item" data-video="<?php echo esc_attr($iframe); ?>">
                <div class="overlay">
                  <div class="text">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M7.9385 11.9808L11.775 9.5095C11.9698 9.38767 12.0673 9.2185 12.0673 9.002C12.0673 8.78533 11.9698 8.61483 11.775 8.4905L7.9385 6.01925C7.73983 5.87825 7.53375 5.86608 7.32025 5.98275C7.10675 6.09958 7 6.28158 7 6.52875V11.4713C7 11.7184 7.10675 11.9004 7.32025 12.0173C7.53375 12.1339 7.73983 12.1217 7.9385 11.9808ZM9.00325 18C7.75875 18 6.58867 17.7638 5.493 17.2915C4.3975 16.8192 3.4445 16.1782 2.634 15.3685C1.8235 14.5588 1.18192 13.6067 0.70925 12.512C0.236417 11.4175 0 10.2479 0 9.00325C0 7.75875 0.236167 6.58867 0.7085 5.493C1.18083 4.3975 1.82183 3.4445 2.6315 2.634C3.44117 1.8235 4.39333 1.18192 5.488 0.70925C6.5825 0.236417 7.75208 0 8.99675 0C10.2413 0 11.4113 0.236167 12.507 0.708501C13.6025 1.18083 14.5555 1.82183 15.366 2.6315C16.1765 3.44117 16.8181 4.39333 17.2908 5.488C17.7636 6.5825 18 7.75208 18 8.99675C18 10.2413 17.7638 11.4113 17.2915 12.507C16.8192 13.6025 16.1782 14.5555 15.3685 15.366C14.5588 16.1765 13.6067 16.8181 12.512 17.2908C11.4175 17.7636 10.2479 18 9.00325 18ZM9 17C11.2333 17 13.125 16.225 14.675 14.675C16.225 13.125 17 11.2333 17 9C17 6.76667 16.225 4.875 14.675 3.325C13.125 1.775 11.2333 1 9 1C6.76667 1 4.875 1.775 3.325 3.325C1.775 4.875 1 6.76667 1 9C1 11.2333 1.775 13.125 3.325 14.675C4.875 16.225 6.76667 17 9 17Z"
                          fill="white"/>
                    </svg>
                    <span>
                                            Play video
                                        </span>
                  </div>
                </div>
                <img src="<?php echo esc_url($image_url); ?>" alt="Instagram Video Thumbnail" class="video-thumbnail">
              </div>
            <?php endwhile; ?>
          </div>
          <div id="video-modal" class="modal">
            <div class="modal-content">
              <span class="close-btn">&times;</span>
              <div id="modal-video-container"></div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="cta-block">
      <div class="container">
        <div class="flex">
          <div class="col-50">
            <div class="text">
              <h2 class="title wow fadeIn" data-wow-delay="0.3s"><?php the_field('instagram_page_cta_title') ?></h2>
              <h3 class="subtitle title wow fadeIn"
                  data-wow-delay="0.4s"><?php the_field('instagram_page_cta_subtitle') ?></h3>
              <div class="description wow fadeIn"
                   data-wow-delay="0.4s"><?php the_field('instagram_page_cta_description') ?></div>
              <div class="socials wow fadeIn" data-wow-delay="0.5s">
                <a href="<?php the_field('instagram_url', 'option'); ?>" target="_blanc"><i
                      class="ico ico-instagram"></i></a>
                <a href="<?php the_field('facebook_url', 'option'); ?>" target="_blanc"><i class="ico ico-facebook"></i></a>
                <a href="<?php the_field('yelp_url', 'option'); ?>" target="_blanc"><i class="ico ico-yelp"></i></a>
                <a href="<?php the_field('pinterest_url', 'option'); ?>" target="_blanc"><i
                      class="ico ico-pinterest"></i></a>
              </div>
              <?php $button = get_field('instagram_page_cta_button') ?>
              <a data-wow-delay="0.6s" class="btn wow fadeIn"
                 href="<?php echo $button['url'] ?>"><?php echo $button['title'] ?></a>
            </div>
          </div>
          <div class="col-50 wow fadeIn" data-wow-delay="0.1s">

            <?php $video = get_field('instagram_page_cta_image'); ?>
            <div class="video-container">
              <video id="reserveVideo" src="<?php echo $video[0]['url'] ?>" autoplay loop muted playsinline
                     data-wf-ignore="true" data-object-fit="cover">
                <source src="<?php echo $video[0]['url'] ?>" type="video/mp4">
                <p class="video-error"><?php esc_html_e('Your browser doesen\'t support HTML5 video', 'partybaby'); ?></p>
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home-gallery-section wow fadeIn">
      <div class="container">
        <div class="home-gallery">
          <div class="gallery-items">
            <div class="item wow fadeIn" data-wow-delay="0.1s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-011.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-011.jpg">
                <h3></h3>
              </div>
            </div>
            <div class="item wow fadeIn" data-wow-delay="0.2s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-02.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-02.jpg"><h3></h3></div>
            </div>
          </div>
          <div class="gallery-items">
            <div class="item wow fadeIn" data-wow-delay="0.3s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-03.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-03.jpg"><h3></h3></div>
            </div>
            <div class="item wow fadeIn" data-wow-delay="0.4s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-04.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-03.jpg"><h3></h3></div>
            </div>
          </div>
          <div class="gallery-items">
            <div class="item wow fadeIn" data-wow-delay="0.4s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-05.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-05.jpg"><h3></h3></div>
            </div>
            <div class="item wow fadeIn" data-wow-delay="0.5s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-06.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-06.jpg"><h3></h3></div>
            </div>
          </div>
          <div class="gallery-items">
            <div class="item wow fadeIn" data-wow-delay="0.6s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-07.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-07.jpg"><h3></h3></div>
            </div>
            <div class="item wow fadeIn" data-wow-delay="0.7s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-08.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-08.jpg"><h3></h3></div>
            </div>
          </div>
          <div class="gallery-items">
            <div class="item wow fadeIn" data-wow-delay="0.8s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-09.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-09.jpg"><h3></h3></div>
            </div>
            <div class="item wow fadeIn" data-wow-delay="0.9s">
              <img src="<?php echo get_template_directory_uri() ?>/img/home-gallery-10.jpg" alt="Photo"/>
              <div class="desc" src="<?php echo get_template_directory_uri() ?>/img/home-gallery-10.jpg"><h3></h3></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="phone-block wow fadeIn"
             style="background: url(<?php the_field('instagram_page_phone_block_background') ?>)">
      <div class="container">
        <img class="wow fadeIn" src="<?php echo get_template_directory_uri() ?>/img/inst.png" alt="Photo"
             data-wow-delay="0.1s">
        <div class="content">
          <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php the_field('instagram_page_phone_block_title') ?></h2>
          <?php $button = get_field('instagram_page_phone_block_button') ?>
          <a href="#info" data-wow-delay="0.3s" class="btn wow fadeIn"><?php echo $button['title'] ?></a>
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
        <div class="bottom-text wow fadeIn" data-wow-delay="0.5s">
          Available as an Add-on for any Party Package
        </div>
      </div>
    </section>
    <section class="category-package cat-luxe recent-posts wow fadeIn">
      <h2 class="wow fadeIn" data-wow-delay="0.2s">ADD ME TO THESE PACKAGES:</h2>
      <div class="container">
        <?php

        $args = array(
          'post_type' => 'package',
          'posts_per_page' => 5,
          'orderby' => 'rand',
        );

        $packages_query = new WP_Query($args);
        $increment = 0.1;
        $initial_delay = 0.3;
        ?>

        <?php if ($packages_query->have_posts()): ?>
          <div class="packages-container">
            <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="package-item wow fadeIn" data-wow-delay="<?php echo number_format($initial_delay, 1); ?>s">
                  <?php if (has_post_thumbnail()): ?>
                    <div class="package-image">
                      <?php the_post_thumbnail('medium'); ?>
                      <div class="bage">
                        <?php the_field('package_age'); ?>
                        <?php if (get_field('package_price')) { ?>
                          <?php echo '| $';
                          the_field('package_price'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <h3 style="color: <?php the_field('package_title_color') ?>"
                      class="package-title title"><?php the_title(); ?></h3>


                </div>
              </a>
              <?php $initial_delay += $increment; endwhile; ?>
          </div>
        <?php else: ?>
          <p>No packages found.</p>
        <?php endif; ?>
        <?php wp_reset_postdata();
        ?>
      </div>
      <div class="return-link-wrap">
        <a href="<?php echo get_permalink_by_slug('packages') ?>" class="return-to-packages wow fadeIn"
           data-wow-delay="0.6s">RETURN TO PACKAGES</a>
      </div>
    </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
  </div>


<?php get_footer(); ?>
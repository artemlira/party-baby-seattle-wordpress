<?php
/**
 * Template Name: About Page
 *
 */

get_header(); ?>
  <div class="page page-about">
    <section class="home-hero about-hero wow fadeIn">
      <div class="container hero-title-box-wrap">
        <div class="hero-title-box wow fadeIn" data-wow-delay="0.2s">
          <h1><?php esc_html_e('MEET PARTY BABY', 'partybaby'); ?></h1>
          <p><?php esc_html_e('SEATTLE\'S PREMIER MOBILE SOFT PLAY ENTERTAINMENT SERVICE FOR KIDS AGES 0-5', 'partybaby'); ?></p>
          <a href="<?php echo esc_url(home_url('/party-booking')); ?>"
             class="btn"><?php esc_html_e('LET\'S PARTY', 'partybaby'); ?></a>
        </div>
      </div>
      <div class="home-hero-slider">
        <div class="item">
          <img src="<?php echo get_template_directory_uri() ?>/img/about-hero-1.jpg" alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri() ?>/img/about-hero-2.jpg" alt="<?php bloginfo('name'); ?>">
        </div>
      </div>
    </section>
    <section class="about-block-2">
      <div class="container">
        <h2 class="title wow fadeIn"
            data-wow-delay="0.2s"><?php esc_html_e('Experience the unmatched Party Baby experience', 'partybaby'); ?></h2>
        <div class="text wow fadeIn" data-wow-delay="0.3s">
          <p><?php esc_html_e('Whether you\'re a parent planning a birthday party or an event planner working on a large corporate gathering, you\'ll enjoy a seamless and professional booking and party experience. You don\'t have to lift a finger.', 'partybaby'); ?></p>
          <p><?php esc_html_e('We consult with you on the best location, size, and package for your party\'s needs, as well as handle the delivery, set-up, and take-down. You\'ll wonder how you ever got by without Party Baby Seattle!', 'partybaby'); ?></p>
        </div>
        <div class="btn-wrap wow fadeIn" data-wow-delay="0.4s">
          <a href="<?php echo esc_url(home_url('/party-booking')); ?>"
             class="btn"><?php esc_html_e('BOOK THE FUN', 'partybaby'); ?></a>
        </div>
      </div>
    </section>
    <section class="about-block-3 wow fadeIn">
      <div class="top-gradient"></div>
      <div class="container">
        <div class="flex">
          <div class="col-50">
            <h2 class="title wow fadeIn"
                data-wow-delay="0.3s"><?php esc_html_e('You deserve an easy, stress-free way to keep the kids playing at your event', 'partybaby'); ?></h2>
            <div class="text wow fadeIn" data-wow-delay="0.4s">
              <p><?php esc_html_e('We\'re parents, so we know how hard it can be to keep little ones entertained.', 'partybaby'); ?></p>
              <p><?php esc_html_e('We bring the fun to you. You know the kids will have a safe, clean, fun area to play, which means the adults can relax and enjoy the party.', 'partybaby'); ?></p>
              <p><?php esc_html_e('You\'ll be impressed by the quality of both our products and personnel. But you\'ll love the memories made during your event even more.', 'partybaby'); ?></p>
            </div>
            <img class="wow fadeIn" data-wow-delay="0.5s"
                 src="<?php echo get_template_directory_uri() ?>/img/about-3.2.png"
                 alt="<?php esc_html_e('Sign', 'partybaby'); ?>">
          </div>
          <div class="col-50 wow fadeIn" data-wow-delay="0.1s">
            <img src="<?php the_field('about_block_3_jeany_photo') ?>" alt="<?php esc_html_e('Photo', 'partybaby'); ?>">
          </div>
        </div>
      </div>
    </section>
    <section class="about-block-4 home-testimonials wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn"
            data-wow-delay="0.2s"><?php esc_html_e('Hear from other parents and event planners', 'partybaby'); ?></h2>

        <div class="wow fadeIn" data-wow-delay="0.3s">
          <?php echo do_shortcode('[reviews-feed feed=1]') ?>
        </div>
      </div>
    </section>
    <section class="about-block-5 wow fadeIn">
      <div class="container">
        <div class="flex">
          <div class="col-50">
            <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php esc_html_e('What is', 'partybaby'); ?>
              <span><?php esc_html_e('soft play?', 'partybaby'); ?></span></h2>
            <div class="text wow fadeIn" data-wow-delay="0.4s">
              <p><?php esc_html_e('Mobile soft play equipment or soft play rentals are just like they sound–soft and irresistibly fun play set-ups for little kids to keep them occupied for hours, whether inside your own home or out in the backyard. Play areas typically include some or all of the following fun activities:', 'partybaby'); ?></p>
              <ul>
                <li>
                  <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="#151515"/>
                  </svg>
                  <?php esc_html_e('Ball pits', 'partybaby'); ?>
                </li>
                <li>
                  <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="#151515"/>
                  </svg>
                  <?php esc_html_e('Rubber animals', 'partybaby'); ?>
                </li>
                <li>
                  <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="#151515"/>
                  </svg>
                  <?php esc_html_e('Tunnels', 'partybaby'); ?>
                </li>
                <li>
                  <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="#151515"/>
                  </svg>
                  <?php esc_html_e('Climbing sets', 'partybaby'); ?>
                </li>
                <li>
                  <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="#151515"/>
                  </svg>
                  <?php esc_html_e('Inflatables', 'partybaby'); ?>
                </li>
                <li>
                  <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="#151515"/>
                  </svg>
                  <?php esc_html_e('And more!', 'partybaby'); ?>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-50 wow fadeIn" data-wow-delay="0.1s">
            <img src="<?php echo get_template_directory_uri() ?>/img/about-5.png"
                 alt="<?php esc_html_e('Photo', 'partybaby'); ?>">
          </div>
        </div>
      </div>
    </section>
    <section class="about-block-6 wow fadeIn">
      <div class="container">
        <h3 class="title wow fadeIn"
            data-wow-delay="0.1s"><?php esc_html_e('BROWSE SOFT PLAY PACKAGES', 'partybaby'); ?></h3>
        <div class="btn-wrap">
          <a href="<?php echo esc_url(home_url('/soft-play-packages/')); ?>" class="btn wow fadeIn"
             data-wow-delay="0.2s"><?php esc_html_e('FOR PARENTS', 'partybaby'); ?></a>
          <?php $page_id = 71; // corporate events
          $page_url = get_permalink($page_id);
          ?>
          <a href="<?php echo $page_url; ?>" class="btn wow fadeIn"
             data-wow-delay="0.3s"><?php esc_html_e('FOR EVENT PLANNERS', 'partybaby'); ?></a>
        </div>
      </div>
    </section>
    <section class="about_faq faq wow fadeIn" id="faq">
      <?php
      $faq_title = get_field('about_page_faq_title');
      $faq_description = get_field('about_page_faq_subtitle');
      $faq_question = get_field('about_page_faq_question');
      $faq_button = get_field('about_page_faq_button');
      ?>
      <div class="container">
        <div class="titleBlock">
          <?php if ($faq_title): ?>
            <h2 class="section-title wow fadeIn"
                data-wow-delay="0.1s"><?php echo $faq_title; ?></h2>
          <?php endif; ?>
          <?php if ($faq_description): ?>
            <h3 class="description"><?php echo $faq_description; ?></h3>
          <?php endif; ?>
        </div>
      </div>
      <?php if (have_rows('about_page_faq_content')): ?>
        <div class="accordion wow fadeIn" data-wow-delay="0.3s">
          <?php while (have_rows('about_page_faq_content')): the_row() ?>
            <div class="accordion-item">
              <button class="accordion-header">
                <span><?php the_sub_field('title') ?></span>
                <div class="chevron-container">
                  <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 -6.99382e-07L16 7.63251L14.5667 9L8 2.73498L1.43333 9L1.1955e-07 7.63251L8 -6.99382e-07Z"
                        fill="white"/>
                  </svg>
                </div>
              </button>
              <div class="accordion-content"><?php the_sub_field('text') ?></div>
            </div>
          <?php endwhile ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($faq_button) || $faq_description): ?>
        <div class="btn-wrap wow fadeIn" data-wow-delay="0.2s">
          <?php if ($faq_question): ?>
            <h4 class="btn-title"><?php echo $faq_question; ?></h4>
          <?php endif; ?>
          <?php if (!empty($faq_button)): ?>
            <a href="<?php echo $faq_button['url']; ?>"
               class="btn"><?php echo $faq_button['title']; ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </section>
    <section class="about-block-7">
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php esc_html_e('WE\'RE ON A MISSION', 'partybaby'); ?></h2>
        <p class="text wow fadeIn"
           data-wow-delay="0.3s"><?php esc_html_e('to help parents and event organizers alike keep the littles entertained and safe during your next event.', 'partybaby'); ?></p>
      </div>
    </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
  </div>


<?php get_footer(); ?>
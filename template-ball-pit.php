<?php
/**
 * Template Name: Ball Pits Packages Page
 *
 */

get_header(); ?>

  <div class="page page-package-category page-ball-pit-packages">
    <section class="soft-packages-heading">
      <div class="container">
        <h1 class="title wow fadeIn" data-wow-delay="0.2s"><span class="sup">THE</span>BALL PIT<span
              class="bianka wow fadeIn" data-wow-delay="0.4s">plus add-ons! </span></h1>
        <p class="subtitle wow fadeIn" data-wow-delay="0.3s">CHOOSE YOUR BALL PIT FOR ADDED FUN FOR HOURS!</p>
        <p class="subtitle wow fadeIn" data-wow-delay="0.4s"><i>Available as an add-on only (with the exception of the
            Super Luxe). Our minimum rental fee is $500</i></p>
      </div>
    </section>
    <section class="category-package cat-luxe cat-ball-pit">
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
        <?php $count = 5;
        if ($packages_query->have_posts()): ?>
          <div class="packages-container">
            <?php while ($packages_query->have_posts()): $packages_query->the_post(); ?>
              <div class="package-item wow fadeIn" data-wow-delay="0.<?php echo $count ?>s">
                <?php if (has_post_thumbnail()): ?>
                  <div class="color-wrap">
                    <a class="" href="<?php the_permalink(); ?>">
                      <div class="package-image">
                        <?php the_post_thumbnail(); ?>
                        <div class="bage">
                          <?php the_field('package_age'); ?> | $<?php the_field('package_price'); ?>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endif; ?>
                <h3 style="color: <?php the_field('package_title_color') ?>"
                    class="package-title title"><?php the_field('package_top_heading_title') ?>
                  <br><?php the_field('package_top_heading_title_italic') ?></h3>
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
    <section class="ball-pits-colors">
      <div class="ball-pits-colors-heading">
        <div class="bianka wow fadeIn" data-wow-delay="0.2s">choose your</div>
        <h2 class="title wow fadeIn" data-wow-delay="0.3s">BALL <span class="l1">C</span><span class="l2">O</span><span
              class="l3">L</span><span class="l4">O</span><span class="l5">R</span><span class="l6">S</span><span
              class="l7">!</span></h2>
        <div class="subtitle wow fadeIn" data-wow-delay="0.4s">JUMBO 3 INCH COMMERCIAL BUSINESS GRADE BALLS</div>
      </div>
      <div class="container">
        <?php
        if (have_rows('ball_pits_color')):
          $initial_delay = 0.4;
          $increment = 0.05;
          ?>
          <div class="ball-pits-grid">
            <?php while (have_rows('ball_pits_color')): the_row(); ?>
              <?php
              $title = get_sub_field('title');
              $image_url = get_sub_field('image');
              ?>
              <div class="ball-pit-item wow fadeIn" data-wow-delay="<?php echo number_format($initial_delay, 1); ?>s">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>"
                     class="ball-pit-image">
                <p class="ball-pit-title"><?php echo esc_html($title); ?></p>
              </div>
              <?php
              $initial_delay += $increment;
              ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <div class="container">
      <div class="return-link-wrap wow fadeIn" data-wow-delay="1.6s">
        <a href="<?php echo get_permalink_by_slug('packages') ?>" class="return-to-packages">RETURN TO PACKAGES</a>
      </div>
    </div>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
  </div>

<?php get_footer(); ?>
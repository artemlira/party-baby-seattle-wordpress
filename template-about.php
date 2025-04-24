<?php
/**
 * Template Name: About Page
 *
 */

get_header();
$hero_title = get_field('about_page_hero_title');
$hero_text = get_field('about_page_hero_text');
$hero_btn = get_field('about_page_hero_btn');
$hero_slider = get_field('about_page_hero_slider');
$about_2_title = get_field('about_page_about_2_title');
$about_2_text = get_field('about_page_about_2_text');
$about_2_btn = get_field('about_page_about_2_btn');
$about_3_title = get_field('about_page_about_3_title');
$about_3_text = get_field('about_block_3_jeany_text');
$about_3_signature = get_field('about_block_3_jeany_signature');
$about_3_image = get_field('about_block_3_jeany_photo');
$about_4_title = get_field('about_page_about_4_title');
$about_4_shortcode = get_field('about_page_about_4_shortcode');
$about_5_title = get_field('about_page_about_5_title');
$about_5_text = get_field('about_page_about_5_text');
$about_5_list = get_field('about_page_about_5_list');
$about_5_image = get_field('about_page_about_5_image');
$about_6_title = get_field('about_page_about_6_title');
$about_6_btn_1 = get_field('about_page_about_6_btn_1');
$about_6_btn_2 = get_field('about_page_about_6_btn_2');
$about_7_title = get_field('about_page_about_7_title');
$about_7_text = get_field('about_page_about_7_text');
$cto_background = get_field('about_page_cta_block_bg');
$cto_title = get_field('about_page_cta_block_title');
$cto_text = get_field('about_page_cta_block_text');
$cto_button = get_field('about_page_cta_block_btn');
?>
  <div class="page page-about">
    <section class="home-hero about-hero wow fadeIn">
      <div class="container hero-title-box-wrap">
        <div class="hero-title-box wow fadeIn" data-wow-delay="0.2s">
          <h1><?php echo $hero_title; ?></h1>
          <p><?php echo $hero_text; ?></p>
          <a href="<?php echo $hero_btn['url']; ?>"
             class="btn"><?php echo $hero_btn['title']; ?></a>
        </div>
      </div>
      <?php if (!empty($hero_slider)) : ?>
        <div class="home-hero-slider">
          <?php foreach ($hero_slider as $slide) :
            $image = $slide['image']; ?>
            <div class="item">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
          <?php endforeach; ?>
        </div>
      <? endif; ?>
    </section>
    <section class="about-block-2">
      <div class="container">
        <h2 class="title wow fadeIn"
            data-wow-delay="0.2s"><?php echo $about_2_title; ?></h2>
        <div class="text wow fadeIn" data-wow-delay="0.3s">
          <?php echo $about_2_text; ?>
        </div>
        <div class="btn-wrap wow fadeIn" data-wow-delay="0.4s">
          <a href="<?php echo $about_2_btn['url']; ?>"
             class="btn"><?php echo $about_2_btn['title']; ?></a>
        </div>
      </div>
    </section>
    <section class="home-cta-3 wow fadeIn">
      <div class="box wow fadeIn" data-wow-delay="0.1s"
           style='background-image: url("<?php echo $cto_background['url']; ?>")'>
        <div class="item wow fadeIn" data-wow-delay="0.2s">
          <?php if (!empty($cto_title)) : ?>
            <h2 class="title"><?php echo $cto_title; ?></h2>
          <?php endif; ?>
          <?php if (!empty($cto_text)) : ?>
            <p class="text wow fadeIn" data-wow-delay="0.3s"><?php echo $cto_text; ?></p>
          <?php endif; ?>
          <?php if (!empty($cto_button)): ?>
            <div class="btn-wrap wow fadeIn" data-wow-delay="0.4s">
              <a href="<?php echo $cto_button['url'] ?>" target="<?php echo $cto_button['target'] ?>"
                 class="btn"><?php echo $cto_button["title"]; ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="about-block-3 wow fadeIn">
      <div class="top-gradient"></div>
      <div class="container">
        <div class="flex">
          <div class="col-50">
            <h2 class="title wow fadeIn"
                data-wow-delay="0.3s"><?php echo $about_3_title; ?></h2>
            <div class="text wow fadeIn" data-wow-delay="0.4s">
              <?php echo $about_3_text; ?>
            </div>
            <img class="wow fadeIn" data-wow-delay="0.5s" src="<?php echo $about_3_signature['url']; ?>"
                 alt="<?php echo $about_3_signature['alt']; ?>">
          </div>
          <div class="col-50 wow fadeIn" data-wow-delay="0.1s">
            <img src="<?php echo $about_3_image['url']; ?>" alt="<?php echo $about_3_image['alt']; ?>">
          </div>
        </div>
      </div>
    </section>
    <section class="about-block-4 home-testimonials wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn"
            data-wow-delay="0.2s"><?php echo $about_4_title; ?></h2>
        <div class="wow fadeIn" data-wow-delay="0.3s">
          <?php echo do_shortcode($about_4_shortcode); ?>
        </div>
      </div>
    </section>
    <section class="about-block-5 wow fadeIn">
      <div class="container">
        <div class="flex">
          <div class="col-50">
            <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php echo $about_5_title; ?></h2>
            <div class="text wow fadeIn" data-wow-delay="0.4s">
              <?php echo $about_5_text; ?>
              <?php if (!empty($about_5_list)) : ?>
                <ul>
                  <?php foreach ($about_5_list as $item) : ?>
                    <li>
                      <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="#151515"/>
                      </svg>
                      <?php echo $item['text']; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-50 wow fadeIn" data-wow-delay="0.1s">
            <img src="<?php echo $about_5_image['url']; ?>"
                 alt="<?php echo $about_5_image['alt']; ?>">
          </div>
        </div>
      </div>
    </section>
    <section class="about-block-6 wow fadeIn">
      <div class="container">
        <h3 class="title wow fadeIn"
            data-wow-delay="0.1s"><?php echo $about_6_title; ?></h3>
        <div class="btn-wrap">
          <a href="<?php echo $about_6_btn_1['url']; ?>" class="btn wow fadeIn"
             data-wow-delay="0.2s"><?php echo $about_6_btn_1['title']; ?></a>
          <a href="<?php echo $about_6_btn_2['url']; ?>" class="btn wow fadeIn"
             data-wow-delay="0.3s"><?php echo $about_6_btn_2['title']; ?></a>
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
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $about_7_title; ?></h2>
        <p class="text wow fadeIn"
           data-wow-delay="0.3s"><?php echo $about_7_text; ?></p>
      </div>
    </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
  </div>


<?php get_footer(); ?>
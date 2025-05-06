<?php
/**
 * Template Name: Events Page
 *
 */

get_header(); ?>


  <div class="page page-events">
    <?php
    $hero_title = get_field('events_page_hero_title');
    $hero_subtitle = get_field('events_page_hero_subtitle');
    $hero_link = get_field('events_page_hero_link');
    $hero_description = get_field('events_page_hero_description');
    $hero_bg = get_field('events_page_hero_background_image');
    $intro_info_btn = get_field('events_page_intro_info_btn');
    $events_cta_3_bg = get_field('events_page_cta_3_image');
    $events_cta_3_title = get_field('events_page_cta_3_title');
    $events_cta_3_text = get_field('events_page_cta_3_text');
    $events_cta_3_button = get_field('events_page_cta_3_link');
    $events_cta_3_background = get_field('events_page_cta_3_background');
    $events_cta_4_title = get_field('events_page_cta_4_title');
    $events_cta_4_text = get_field('events_page_cta_4_text');
    $events_cta_4_button = get_field('events_page_cta_4_link');
    $events_cta_4_background = get_field('events_page_cta_4_background');
    $events_green_line_2_title = get_field('events_page_green_line_2_title');
    $events_green_line_2_list = get_field('events_page_green_line_2_list');
    $events_conferences_title = get_field('events_page_conferences_title');
    $events_conferences_description = get_field('events_page_conferences_description');
    $events_conferences_gallery = get_field('events_page_conferences_gallery');
    $events_conferences_text = get_field('events_page_conferences_text');
    $events_green_yellow_line_title = get_field('events_page_green_yellow_line_title');
    $events_title_decor_line_title = get_field('events_page_title_decor_line_title');
    $events_title_decor_line_2_title = get_field('events_page_title_decor_line_2_title');
    $events_form_title = get_field('events_page_form_title');
    $events_form_description = get_field('events_page_form_description');
    ?>
    <section class="events-hero wow fadeIn"
             style="background-image: url(<?php echo $hero_bg ?>); background-size: cover; background-position: center;">
      <div class="container">
        <h1 class="title  wow fadeIn" data-wow-delay="0.1s"><?php echo $hero_title ?></h1>
        <div class="bianka  wow fadeIn" data-wow-delay="0.2s"><?php echo $hero_subtitle ?></div>
        <h2 class="title subtitle-2 wow fadeIn" data-wow-delay="0.3s"><?php echo $hero_description ?></h2>
        <a href="<?php echo $hero_link['url'] ?>" class="btn wow fadeIn"
           data-wow-delay="0.4s"><?php echo $hero_link['title'] ?></a>
      </div>
    </section>
    <section class="green-line wow fadeIn">
      <?php
      $item_image_1 = get_field('events_page_green_line_img_1');
      $item_image_2 = get_field('events_page_green_line_img_2');
      $item_image_3 = get_field('events_page_green_line_img_3');
      ?>
      <div class="container">
        <div class="flex wow fadeIn" data-wow-delay="0.2s">
                <span><svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.0068 37.75C16.4141 37.75 13.9764 37.258 11.6937 36.274C9.41146 35.2899 7.42604 33.9545 5.7375 32.2677C4.04896 30.5809 2.71233 28.5972 1.7276 26.3167C0.742534 24.0365 0.25 21.5998 0.25 19.0068C0.25 16.4141 0.742188 13.9764 1.72656 11.6937C2.71094 9.41146 4.04688 7.42604 5.73438 5.7375C7.42188 4.04896 9.40625 2.71233 11.6875 1.7276C13.9688 0.742534 16.4062 0.25 19 0.25C20.8003 0.25 22.5372 0.501043 24.2104 1.00313C25.8837 1.50521 27.4762 2.22778 28.988 3.17083C29.2686 3.34167 29.4535 3.57135 29.5427 3.8599C29.6323 4.14844 29.5837 4.41545 29.3969 4.66094C29.2097 4.90677 28.9632 5.05243 28.6573 5.09792C28.3517 5.14306 28.0681 5.08021 27.8062 4.90938C26.4812 4.06806 25.0729 3.42847 23.5812 2.99062C22.0896 2.55243 20.5625 2.33333 19 2.33333C14.3819 2.33333 10.4497 3.9566 7.20312 7.20312C3.9566 10.4497 2.33333 14.3819 2.33333 19C2.33333 23.6181 3.9566 27.5503 7.20312 30.7969C10.4497 34.0434 14.3819 35.6667 19 35.6667C23.6181 35.6667 27.5503 34.0434 30.7969 30.7969C34.0434 27.5503 35.6667 23.6181 35.6667 19C35.6667 18.4715 35.6446 17.9594 35.6005 17.4635C35.5564 16.9681 35.4769 16.4613 35.362 15.9432C35.2925 15.646 35.3319 15.362 35.4802 15.0911C35.6285 14.8203 35.8533 14.6516 36.1547 14.5849C36.4384 14.5182 36.6964 14.5703 36.9286 14.7411C37.1609 14.912 37.3118 15.1417 37.3812 15.4302C37.5042 15.9965 37.5964 16.5748 37.6578 17.1651C37.7193 17.7557 37.75 18.3674 37.75 19C37.75 21.5938 37.258 24.0312 36.274 26.3125C35.2899 28.5938 33.9545 30.5781 32.2677 32.2656C30.5809 33.9531 28.5972 35.2891 26.3167 36.2734C24.0365 37.2578 21.5998 37.75 19.0068 37.75ZM16.0031 24.1922L35.5385 4.64479C35.7333 4.45 35.9703 4.34392 36.2495 4.32656C36.5286 4.3092 36.7859 4.41823 37.0214 4.65365C37.2373 4.86962 37.3453 5.1125 37.3453 5.38229C37.3453 5.65208 37.2345 5.89774 37.013 6.11927L17.1812 25.963C16.8444 26.2995 16.4517 26.4677 16.0031 26.4677C15.5545 26.4677 15.162 26.2995 14.8255 25.963L9.32865 20.4661C9.13351 20.2714 9.02934 20.0323 9.01614 19.749C9.0026 19.466 9.10677 19.2137 9.32865 18.9922C9.55017 18.7703 9.79583 18.6594 10.0656 18.6594C10.3354 18.6594 10.5812 18.7703 10.8031 18.9922L16.0031 24.1922Z"
                        fill="white"/>
                </svg><img src="<?php echo $item_image_1 ?>"></span>
          <span><svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.0068 37.75C16.4141 37.75 13.9764 37.258 11.6937 36.274C9.41146 35.2899 7.42604 33.9545 5.7375 32.2677C4.04896 30.5809 2.71233 28.5972 1.7276 26.3167C0.742534 24.0365 0.25 21.5998 0.25 19.0068C0.25 16.4141 0.742188 13.9764 1.72656 11.6937C2.71094 9.41146 4.04688 7.42604 5.73438 5.7375C7.42188 4.04896 9.40625 2.71233 11.6875 1.7276C13.9688 0.742534 16.4062 0.25 19 0.25C20.8003 0.25 22.5372 0.501043 24.2104 1.00313C25.8837 1.50521 27.4762 2.22778 28.988 3.17083C29.2686 3.34167 29.4535 3.57135 29.5427 3.8599C29.6323 4.14844 29.5837 4.41545 29.3969 4.66094C29.2097 4.90677 28.9632 5.05243 28.6573 5.09792C28.3517 5.14306 28.0681 5.08021 27.8062 4.90938C26.4812 4.06806 25.0729 3.42847 23.5812 2.99062C22.0896 2.55243 20.5625 2.33333 19 2.33333C14.3819 2.33333 10.4497 3.9566 7.20312 7.20312C3.9566 10.4497 2.33333 14.3819 2.33333 19C2.33333 23.6181 3.9566 27.5503 7.20312 30.7969C10.4497 34.0434 14.3819 35.6667 19 35.6667C23.6181 35.6667 27.5503 34.0434 30.7969 30.7969C34.0434 27.5503 35.6667 23.6181 35.6667 19C35.6667 18.4715 35.6446 17.9594 35.6005 17.4635C35.5564 16.9681 35.4769 16.4613 35.362 15.9432C35.2925 15.646 35.3319 15.362 35.4802 15.0911C35.6285 14.8203 35.8533 14.6516 36.1547 14.5849C36.4384 14.5182 36.6964 14.5703 36.9286 14.7411C37.1609 14.912 37.3118 15.1417 37.3812 15.4302C37.5042 15.9965 37.5964 16.5748 37.6578 17.1651C37.7193 17.7557 37.75 18.3674 37.75 19C37.75 21.5938 37.258 24.0312 36.274 26.3125C35.2899 28.5938 33.9545 30.5781 32.2677 32.2656C30.5809 33.9531 28.5972 35.2891 26.3167 36.2734C24.0365 37.2578 21.5998 37.75 19.0068 37.75ZM16.0031 24.1922L35.5385 4.64479C35.7333 4.45 35.9703 4.34392 36.2495 4.32656C36.5286 4.3092 36.7859 4.41823 37.0214 4.65365C37.2373 4.86962 37.3453 5.1125 37.3453 5.38229C37.3453 5.65208 37.2345 5.89774 37.013 6.11927L17.1812 25.963C16.8444 26.2995 16.4517 26.4677 16.0031 26.4677C15.5545 26.4677 15.162 26.2995 14.8255 25.963L9.32865 20.4661C9.13351 20.2714 9.02934 20.0323 9.01614 19.749C9.0026 19.466 9.10677 19.2137 9.32865 18.9922C9.55017 18.7703 9.79583 18.6594 10.0656 18.6594C10.3354 18.6594 10.5812 18.7703 10.8031 18.9922L16.0031 24.1922Z"
                        fill="white"/>
                </svg><img src="<?php echo $item_image_2 ?>"></span>
          <span><svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.0068 37.75C16.4141 37.75 13.9764 37.258 11.6937 36.274C9.41146 35.2899 7.42604 33.9545 5.7375 32.2677C4.04896 30.5809 2.71233 28.5972 1.7276 26.3167C0.742534 24.0365 0.25 21.5998 0.25 19.0068C0.25 16.4141 0.742188 13.9764 1.72656 11.6937C2.71094 9.41146 4.04688 7.42604 5.73438 5.7375C7.42188 4.04896 9.40625 2.71233 11.6875 1.7276C13.9688 0.742534 16.4062 0.25 19 0.25C20.8003 0.25 22.5372 0.501043 24.2104 1.00313C25.8837 1.50521 27.4762 2.22778 28.988 3.17083C29.2686 3.34167 29.4535 3.57135 29.5427 3.8599C29.6323 4.14844 29.5837 4.41545 29.3969 4.66094C29.2097 4.90677 28.9632 5.05243 28.6573 5.09792C28.3517 5.14306 28.0681 5.08021 27.8062 4.90938C26.4812 4.06806 25.0729 3.42847 23.5812 2.99062C22.0896 2.55243 20.5625 2.33333 19 2.33333C14.3819 2.33333 10.4497 3.9566 7.20312 7.20312C3.9566 10.4497 2.33333 14.3819 2.33333 19C2.33333 23.6181 3.9566 27.5503 7.20312 30.7969C10.4497 34.0434 14.3819 35.6667 19 35.6667C23.6181 35.6667 27.5503 34.0434 30.7969 30.7969C34.0434 27.5503 35.6667 23.6181 35.6667 19C35.6667 18.4715 35.6446 17.9594 35.6005 17.4635C35.5564 16.9681 35.4769 16.4613 35.362 15.9432C35.2925 15.646 35.3319 15.362 35.4802 15.0911C35.6285 14.8203 35.8533 14.6516 36.1547 14.5849C36.4384 14.5182 36.6964 14.5703 36.9286 14.7411C37.1609 14.912 37.3118 15.1417 37.3812 15.4302C37.5042 15.9965 37.5964 16.5748 37.6578 17.1651C37.7193 17.7557 37.75 18.3674 37.75 19C37.75 21.5938 37.258 24.0312 36.274 26.3125C35.2899 28.5938 33.9545 30.5781 32.2677 32.2656C30.5809 33.9531 28.5972 35.2891 26.3167 36.2734C24.0365 37.2578 21.5998 37.75 19.0068 37.75ZM16.0031 24.1922L35.5385 4.64479C35.7333 4.45 35.9703 4.34392 36.2495 4.32656C36.5286 4.3092 36.7859 4.41823 37.0214 4.65365C37.2373 4.86962 37.3453 5.1125 37.3453 5.38229C37.3453 5.65208 37.2345 5.89774 37.013 6.11927L17.1812 25.963C16.8444 26.2995 16.4517 26.4677 16.0031 26.4677C15.5545 26.4677 15.162 26.2995 14.8255 25.963L9.32865 20.4661C9.13351 20.2714 9.02934 20.0323 9.01614 19.749C9.0026 19.466 9.10677 19.2137 9.32865 18.9922C9.55017 18.7703 9.79583 18.6594 10.0656 18.6594C10.3354 18.6594 10.5812 18.7703 10.8031 18.9922L16.0031 24.1922Z"
                        fill="white"/>
                </svg><img src="<?php echo $item_image_3 ?>"></span>
        </div>
      </div>
    </section>
    <section class="intro-info wow fadeIn">
      <?php
      $intro_info_title = get_field('events_page_intro_info_title');
      $intro_info_description = get_field('events_page_intro_info_description');
      ?>
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php esc_html_e($intro_info_title, 'partybaby'); ?></h2>
        <div class="text wow fadeIn" data-wow-delay="0.2s"><?php echo($intro_info_description); ?></div>
      </div>
      <?php if (!empty($intro_info_btn)): ?>
        <div class="intro-info-button-wrapper">
          <a class="intro-info-button btn" href="<?php echo $intro_info_btn['url']; ?>"
             target="<?php echo $intro_info_btn['target']; ?>"><?php echo $intro_info_btn['title']; ?></a>
        </div>
      <?php endif; ?>
    </section>
    <section class="events-cta-4 wow fadeIn">
      <div class="box wow fadeIn" data-wow-delay="0.1s"
        <?php if ($events_cta_4_background): ?>
          style='background-image: url("<?php echo $events_cta_4_background['url']; ?>")' <?php endif; ?>>
        <div class="item">
          <h2 class="title"><?php echo $events_cta_4_title; ?></h2>
          <p class="text wow fadeIn" data-wow-delay="0.3s"><?php echo $events_cta_4_text; ?></p>
          <div class="btn-wrap wow fadeIn" data-wow-delay="0.4s">
            <a href="<?php echo $events_cta_4_button['url'] ?>" target="<?php echo $events_cta_4_button['target'] ?>"
               class="btn"><?php echo $events_cta_4_button["title"]; ?></a>
          </div>
        </div>
      </div>
    </section>
    <section class="logos-carousel wow fadeIn">
      <?php
      $carousel_title = get_field('events_page_carousel_title');
      $carousel_subtitle = get_field('events_page_carousel_subtitle');
      $carousel_images = get_field('events_page_carousel_logo_images');
      //var_dump($carousel_images);
      ?>
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php echo $carousel_title ?></h2>
        <p class="subtitle wow fadeIn" data-wow-delay="0.3s"><?php echo $carousel_subtitle ?></p>
        <?php if ($carousel_images): ?>
          <div class="carousel-logos wow fadeIn" data-wow-delay="0.4s">
            <?php foreach ($carousel_images as $logo): ?>
              <div class="carousel-logo-item">
                <img src="<?php echo esc_url($logo['image']['url']); ?>" alt="Logo">
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="green-line-2 wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $events_green_line_2_title; ?></h2>
        <?php if (!empty($events_green_line_2_list)): ?>
          <ul class="green-line-2-list wow fadeIn" data-wow-delay="0.2s">
            <?php foreach ($events_green_line_2_list as $item):
              $image = $item['image']; ?>
              <li class="green-line-2-item">
                <div class="green-line-2-item-img-wrapper">
                  <img
                      class="green-line-2-item-img"
                      src="<?php echo $image['url']; ?>"
                      alt="<?php echo $image['alt']; ?>"
                      loading="lazy"
                  >
                </div>
                <p class="green-line-2-item-text"><?php echo $item['text']; ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </section>
    <section class="text-image-block wow fadeIn">
      <?php
      $tib_title = get_field('events_page_text_and_image_block_title');
      $tib_description = get_field('events_page_text_and_image_block_description');
      $tib_image = get_field('events_page_text_and_image_block_image');
      ?>
      <div class="container">
        <div class="flex">
          <div class="content">
            <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php echo $tib_title ?></h2>
            <div class="description wow fadeIn" data-wow-delay="0.3s">
              <?php echo $tib_description ?>
            </div>
          </div>
          <div class="img-wrap wow fadeIn" data-wow-delay="0.1s">
            <img class="hide-mobile" src="<?php echo $tib_image['url'] ?>" alt="">
            <img class="hide-desktop" src="<?php echo $tib_image['url'] ?>" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="home-booking" style="background-image: url('<?php echo $events_cta_3_background; ?>')">
      <?php
      $title = get_field('events_page_booking_cta_title');
      $item_1 = get_field('events_page_booking_cta_item_1');
      $item_2 = get_field('events_page_booking_cta_item_2');
      $item_3 = get_field('events_page_booking_cta_item_3');
      $link = get_field('events_page_booking_link');
      ?>
      <div class="container wow fadeIn">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $title ?></h2>
        <div class="items flex">
          <div class="item wow fadeIn" data-wow-delay="0.2s">
            <div class="number"><?php esc_html_e('01', 'partybaby'); ?></div>
            <div class="item-content">
              <div class="item-title"><?php echo $item_1['title'] ?></div>
              <div class="item-text"><?php echo $item_1['description'] ?></div>
            </div>
          </div>
          <div class="item wow fadeIn" data-wow-delay="0.3s">
            <div class="number"><?php esc_html_e('02', 'partybaby'); ?></div>
            <div class="item-content">
              <div class="item-title"><?php echo $item_2['title'] ?></div>
              <div class="item-text"><?php echo $item_2['description'] ?></div>
            </div>
          </div>
          <div class="item wow fadeIn" data-wow-delay="0.4s">
            <div class="number"><?php esc_html_e('03', 'partybaby'); ?></div>
            <div class="item-content">
              <div class="item-title"><?php echo $item_3['title'] ?></div>
              <div class="item-text"><?php echo $item_3['description'] ?></div>
            </div>
          </div>
        </div>
        <div class="btn-wrap wow fadeIn" data-wow-delay="0.5s">
          <a href="<?php echo $link['url'] ?>" class="btn">
            <div class="number"><?php echo $link['title'] ?></div>
          </a>
        </div>
      </div>
    </section>
    <section class="events-conferences wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $events_conferences_title; ?></h2>
        <div class="events-conferences-description wow fadeIn" data-wow-delay="0.2s">
          <?php echo $events_conferences_description; ?>
        </div>
        <div class="events-conferences-gallery wow fadeIn" data-wow-delay="0.3s">
          <div class="gallery-wrapper">
            <?php

            // Массив с подписями к изображениям (опционально)
            //            $gallery_captions = array(
            //              'Подпись к изображению 1',
            //              'Подпись к изображению 2',
            //              'Подпись к изображению 3',
            //              'Подпись к изображению 4'
            //            );

            // Выводим изображения для галереи
            foreach ($events_conferences_gallery as $index => $image_url) {
              $caption = isset($gallery_captions[$index]) ? $gallery_captions[$index] : '';
              ?>
              <a href="<?php echo $image_url['url']; ?>" data-fancybox="gallery" data-caption="<?php echo $caption; ?>"
                 class="gallery-item">
                <img src="<?php echo $image_url['url']; ?>" alt="<?php echo $caption; ?>" class="gallery-image">
              </a>
            <?php } ?>
          </div>

        </div>
        <div class="events-conferences-text" data-wow-delay="0.4s">
          <?php echo $events_conferences_text; ?>
        </div>
      </div>
    </section>
    <section class="green-yellow-line wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $events_green_yellow_line_title; ?></h2>
      </div>
    </section>
    <section class="home-packages-list wow fadeIn">
      <div class="container">
        <div class="heading">
          <h2 class="title wow fadeIn"
              data-wow-delay="0.1s"><?php esc_html_e('Soft Play & Bounce House Packages', 'partybaby'); ?></h2>
          <p class="subtitle wow fadeIn"
             data-wow-delay="0.2s"><?php esc_html_e('WE OFFER THE FOLLOWING 4-HOUR PLAY PACKAGES IN THE SEATTLE AREA', 'partybaby'); ?></p>
          <h3 class="list-title wow fadeIn"
              data-wow-delay="0.3s"><?php esc_html_e('Our Collections', 'partybaby'); ?></h3>
        </div>
        <div class="packages-list">
          <div class="package-item wow fadeIn" data-wow-delay="0.4s">
            <div class="title">
              SUPER LUXE<br> PACKAGES
            </div>
            <figure class="package-image">
              <i class="art-line"></i>
              <div class="image-tag"><?php esc_html_e('AGE 1-5 | $825', 'partybaby'); ?></div>
              <img src="<?php echo get_template_directory_uri() ?>/img/events-pack-1.jpeg" alt="Item 1">
            </figure>
            <div class="package-description">
              <p><strong>What's better than Luxe? Super Luxe!</strong> Our most popular package, the Super Luxe
                Packages, includes an upgrade to our popular Mini Bounce House.</p>
              <p>This larger bounce house includes an attached ball pit, perfect for more kids to jump and play for
                hours on end.</p>
            </div>
            <div class="package-price-text">
              <?php esc_html_e('Four hour jump package | $825', 'partybaby'); ?>
            </div>
            <a href="<?php echo esc_url(home_url('/packages/#category-luxe')); ?>"
               class="btn btn-line"><?php esc_html_e('View more', 'partybaby'); ?></a>
          </div>
          <div class="package-item wow fadeIn" data-wow-delay="0.5s">
            <div class="title">
              <?php esc_html_e('THE BUBBLE COLLECTION', 'partybaby'); ?>
            </div>
            <figure class="package-image">
              <i class="art-line"></i>
              <div class="image-tag"><?php esc_html_e('ALL AGES | $700', 'partybaby'); ?></div>
              <img src="<?php echo get_template_directory_uri() ?>/img/events-pack-3.png" alt="Item 1">
            </figure>
            <div class="package-description">
              <p><strong>Seattle's original Bubble House provider! Amazing party vibes with our HUGE Bubble House
                  collection.</strong></p>
              <p>Choose from multiple options: Mini, Standard, or even a Double Bubble! Includes 2 attendants to help
                the kids have fun and stay safe, plus 100 balloons in your color choice circulating inside the bubble.
                Book in advance!</p>
            </div>
            <div class="package-price-text">
              <?php esc_html_e('Four hour jump package starts at $600', 'partybaby'); ?>
            </div>
            <a href="<?php echo esc_url(home_url('/bounce-and-bubbles-houses/#the-bubble-collection')); ?>"
               class="btn btn-line"><?php esc_html_e('View more', 'partybaby'); ?></a>
          </div>
          <div class="package-item wow fadeIn" data-wow-delay="0.6s">
            <div class="title">
              SUPER LUXE<br> BALL PIT
            </div>
            <figure class="package-image">
              <i class="art-line"></i>
              <div class="image-tag"><?php esc_html_e('AGE 2 & UP | $675 ', 'partybaby'); ?></div>
              <img src="<?php echo get_template_directory_uri() ?>/img/events-pack-6.jpg" alt="Item 1">
            </figure>
            <div class="package-description">
              <p><strong>What's better than a ball pit? Super Luxe Ball Pit + Slide with over 4,000 balls!</strong></p>
              <p>Your little guests will love wiggling around in this inflatable ball pit for hours, plus it’s a great
                sensory experience for busy bodies.</p>
            </div>
            <div class="package-price-text">
              <?php esc_html_e('Four hour jump package | $550', 'partybaby'); ?><br>
              <?php esc_html_e('With slide | $675', 'partybaby'); ?>
            </div>
            <a href="<?php echo esc_url(home_url('/the-super-luxe/')); ?>"
               class="btn btn-line"><?php esc_html_e('View more', 'partybaby'); ?></a>
          </div>

        </div>
        <div class="btn-wrap wow fadeIn" data-wow-delay="0.6s">
          <a href="<?php echo esc_url(home_url('/packages/')); ?>"
             class="btn"><?php esc_html_e('VIEW ALL PACKAGES', 'partybaby'); ?></a>
        </div>
      </div>
    </section>
    <section class="events-cta-3 wow fadeIn">
      <div class="box wow fadeIn" data-wow-delay="0.1s"
           style='background-image: url("<?php echo $events_cta_3_bg['url']; ?>")'>
        <div class="item wow fadeIn" data-wow-delay="0.2s">
          <h2 class="title"><?php echo $events_cta_3_title; ?></h2>
          <p class="text wow fadeIn" data-wow-delay="0.3s"><?php echo $events_cta_3_text; ?></p>
          <div class="btn-wrap wow fadeIn" data-wow-delay="0.4s">
            <a href="<?php echo $events_cta_3_button['url'] ?>" target="<?php echo $events_cta_3_button['target'] ?>"
               class="btn"><?php echo $events_cta_3_button["title"]; ?></a>
          </div>
        </div>
      </div>
    </section>
    <section class="title-decor-line wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $events_title_decor_line_title; ?></h2>
      </div>
    </section>
    <section class="image-comparison wow fadeIn" data-component="image-comparison-slider">
      <?php

      $compare_img_before = get_field('events_page_photo_before');
      $compare_img_after = get_field('events_page_photo_after');

      ?>
      <h2 class="mob-title">Before/After</h2>
      <div class="image-comparison__slider-wrapper">
        <label for="image-comparison-range" class="image-comparison__label">Move image comparison slider</label>
        <input type="range" min="0" max="100" value="50" class="image-comparison__range" id="image-compare-range"
               data-image-comparison-range="">

        <div class="image-comparison__image-wrapper  image-comparison__image-wrapper--overlay"
             data-image-comparison-overlay="">
          <figure class="image-comparison__figure image-comparison__figure--overlay">
            <picture class="image-comparison__picture">
              <source media="(max-width: 40em)" srcset="<?php echo $compare_img_before ?>">
              <source media="(min-width: 40.0625em) and (max-width: 48em)" srcset="<?php echo $compare_img_before ?>">
              <img src="<?php echo $compare_img_before ?>" alt="Before" class="image-comparison__image">
            </picture>

            <figcaption class="image-comparison__caption image-comparison__caption--before wow fadeIn"
                        data-wow-delay="0.2s">
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

            <figcaption class="image-comparison__caption image-comparison__caption--after wow fadeIn"
                        data-wow-delay="0.4s">
              <span class="image-comparison__caption-body">After</span>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>
    <section class="events_faq" id="events_faq">
      <div class="container">
        <div class="titleBlock">
          <h2><?php echo get_field('events_page_faq_title') ?></h2>
          <h3 class="description"><?php echo get_field('events_page_faq_subtitle') ?></h3>
        </div>
        <?php if (have_rows('events_page_faq_content')): ?>
          <div class="accordion wow fadeIn" data-wow-delay="0.3s">
            <?php while (have_rows('events_page_faq_content')): the_row() ?>
              <div class="accordion-item">
                <button class="accordion-header">
                  <span><?php the_sub_field('title') ?></span>
                  <div class="chevron-container">
                    <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M8 -6.99382e-07L16 7.63251L14.5667 9L8 2.73498L1.43333 9L1.1955e-07 7.63251L8 -6.99382e-07Z"
                          fill="#fff"/>
                    </svg>
                  </div>
                </button>
                <div class="accordion-content"><?php the_sub_field('text') ?></div>
              </div>
            <?php endwhile ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="home-testimonials wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn"
            data-wow-delay="0.2s"><?php esc_html_e('What Our Customers Are Saying', 'partybaby'); ?></h2>
        <div class="wow fadeIn" data-wow-delay="0.3s">
          <?php
          $reviews_feed_shortcode = get_field('events_page_reviews_feed_shortcode');
          echo do_shortcode($reviews_feed_shortcode)
          ?>
        </div>
      </div>
    </section>
    <section class="home-cta-2 wow fadeIn">
      <?php
      $cta2_bg = get_field('events_page_cta_bg_image');
      $cta2_title = get_field('events_page_cta_2_title');
      $cta2_description = get_field('events_page_cta_bg_description');
      $cta2_link = get_field('events_page_cta_bg_link');
      ?>
      <div class="box" style="background-image: url('<?php echo $cta2_bg ?>')">
        <div class="item wow fadeIn" data-wow-delay="0.2s">
          <?php if ($cta2_title): ?>
            <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $cta2_title; ?></h2>
          <?php endif; ?>
          <div class="text wow fadeIn" data-wow-delay="0.4s"><?php echo $cta2_description ?></div>
          <div class="btn-wrap wow fadeIn" data-wow-delay="0.5s">
            <a href="<?php echo $cta2_link['url'] ?>" class="btn"><?php echo $cta2_link['title'] ?></a>
          </div>
        </div>
      </div>
    </section>
    <section class="title-decor-line-2 wow fadeIn">
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $events_title_decor_line_2_title; ?></h2>
      </div>
    </section>
    <section class="cta-bottom wow fadeIn">
      <?php
      $cta_bottom_title = get_field('events_page_cta_bottom_title');
      $cta_bottom_link = get_field('events_page_cta_bottom_link');
      $cta_bottom_image = get_field('events_page_cta_bottom_image');
      ?>
      <div class="box" style="background-image: url('<?php echo $cta_bottom_image ?>')">
        <div class="item wow fadeIn" data-wow-delay="0.1s">
          <h2 class="bianka wow fadeIn" data-wow-delay="0.2s"><?php echo $cta_bottom_title ?></h2>
          <div class="btn-wrap wow fadeIn" data-wow-delay="0.3s">
            <a href="<?php echo $cta_bottom_link['url'] ?>" class="btn"><?php echo $cta_bottom_link['title'] ?></a>
          </div>
        </div>
      </div>
    </section>
    <section class="sign-info wow fadeIn">
      <?php
      $title = get_field('events_page_sign_info_title');
      $subtitle = get_field('events_page_sign_info_subtitle');
      $sign = get_field('events_page_sign_info_sign');
      ?>
      <div class="container">
        <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $title ?></h2>
        <p class="subtitle wow fadeIn" data-wow-delay="0.3s"><?php echo $subtitle ?></p>
        <p class="sign wow fadeIn" data-wow-delay="0.5s"><?php echo $sign ?></p>
      </div>
    </section>
    <section class="events-form" id="events-form">
      <div class="container">
        <div class="innerWrap">
          <div class="titleBlock">
            <?php if ($events_form_title): ?>
              <h2 class="section-title"><?php echo $events_form_title; ?></h2>
            <?php endif; ?>
            <?php if ($events_form_description): ?>
              <div class="description"><?php echo $events_form_description; ?></div>
            <?php endif; ?>
          </div>
          <div class="hb-p-62b618fe3cd6df00081819e8-15"></div>
          <img height="1" width="1" style="display:none"
               src="https://www.honeybook.com/p.png?pid=62b618fe3cd6df00081819e8">
          <script>
            (function (h, b, s, n, i, p, e, t) {
              h._HB_ = h._HB_ || {};
              h._HB_.pid = i;
              ;
              ;
              ;
              t = b.createElement(s);
              t.type = "text/javascript";
              t.async = !0;
              t.src = n;
              e = b.getElementsByTagName(s)[0];
              e.parentNode.insertBefore(t, e);
            })(window, document, "script", "https://widget.honeybook.com/assets_users_production/websiteplacements/placement-controller.min.js", "62b618fe3cd6df00081819e8");
          </script>
        </div>
      </div>
    </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
  </div>

<?php get_footer(); ?>
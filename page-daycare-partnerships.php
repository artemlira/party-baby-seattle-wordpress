<?php get_header();
$hero_title = get_field('daycare_page_hero_title');
$hero_subtitle = get_field('daycare_page_hero_subtitle');
$hero_description = get_field('daycare_page_hero_description');
$hero_link = get_field('daycare_page_hero_button');
$hero_bg = get_field('daycare_page_hero_background_image');
$green_line_title = get_field('daycare_page_green_line_title');
$green_line_title_value = get_field('daycare_page_green_line_title_value');
$green_line_text = get_field('daycare_page_green_line_text');
$celebrations_title = get_field('daycare_page_celebrations_title');
$celebrations_subtitle = get_field('daycare_page_celebrations_subtitle');
$celebrations_description = get_field('daycare_page_celebrations_description');
$celebrations_list = get_field('daycare_page_celebrations_list');
$celebrations_text = get_field('daycare_page_celebrations_text');
$celebrations_link = get_field('daycare_page_celebrations_link');
$instagram_video_title = get_field('daycare_page_instagram_video_title');
$instagram_video_subtitle = get_field('daycare_page_instagram_video_subtitle');
$instagram_video_description = get_field('daycare_page_instagram_video_description');
$instagram_video_text = get_field('daycare_page_instagram_video_text');
$instagram_video_bg = get_field('daycare_page_instagram_video_bg');
$instagram_video_video = get_field('daycare_page_instagram_video_video');
$sensory_play_title = get_field('daycare_page_sensory_play_title');
$sensory_play_subtitle = get_field('daycare_page_sensory_play_subtitle');
$sensory_play_description = get_field('daycare_page_sensory_play_description');
$sensory_play_list = get_field('daycare_page_sensory_play_list');
$sensory_play_text = get_field('daycare_page_sensory_play_text');
$sensory_play_link = get_field('daycare_page_sensory_play_link');
$graduation_header_text = get_field('daycare_page_graduation_header_text');
$graduation_title = get_field('daycare_page_graduation_title');
$graduation_text = get_field('daycare_page_graduation_text');
$graduation_quote = get_field('daycare_page_graduation_quote');
$graduation_quote_signature = get_field('daycare_page_graduation_quote_signature');
$graduation_quote_author = get_field('daycare_page_graduation_quote_author');
$graduation_image = get_field('daycare_page_graduation_image');
$video_title = get_field('daycare_page_video_title');
$video_description = get_field('daycare_page_video_description');
$video_text = get_field('daycare_page_video_text');
$video_url = get_field('daycare_page_video_youtube_url');
$video_thumbnail = get_field('daycare_page_video_thumbnail');
$green_yellow_line_title = get_field('daycare_page_green_yellow_line_title');
?>
<div class="page page-daycare">
  <section class="daycare-hero wow fadeIn"
           style="background-image: url(<?php echo $hero_bg ?>); background-size: cover; background-position: center;">
    <div class="container">
      <h1 class="title  wow fadeIn"><?php echo $hero_title ?></h1>
      <p class="subtitle-2 wow fadeIn" data-wow-delay="0.2s"><?php echo $hero_description; ?></p>
      <div class="bianka  wow fadeIn" data-wow-delay="0.1s"><?php echo $hero_subtitle ?></div>
      <a href="<?php echo $hero_link['url'] ?>" class="btn wow fadeIn" target="<?php echo $hero_link['target']; ?>"
         data-wow-delay="0.3s"><?php echo $hero_link['title'] ?></a>
    </div>
  </section>
  <section class="daycare-green-line wow fadeIn">
    <div class="container">
      <?php if ($green_line_title): ?>
      <<?= $green_line_title_value; ?> class="title wow fadeIn"
      data-wow-delay="0.1s"><?php echo $green_line_title; ?></<?= $green_line_title_value; ?>>
    <?php endif; ?>
    <?php if ($green_line_text): ?>
      <div class="text wow fadeIn" data-wow-delay="0.2s">
        <?= $green_line_text; ?>
      </div>
    <?php endif; ?>


</div>
</section>
<section class="daycare-celebrations wow fadeIn">
  <div class="container decor">
    <?php if ($celebrations_title): ?>
      <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?= $celebrations_title; ?></h2>
    <?php endif; ?>
    <?php if ($celebrations_subtitle): ?>
      <p class="subtitle wow fadeIn" data-wow-delay="0.2s"><?= $celebrations_subtitle; ?></p>
    <?php endif; ?>
    <?php if ($celebrations_description): ?>
      <div class="description wow fadeIn" data-wow-delay="0.3s"><?= $celebrations_description; ?></div>
    <?php endif; ?>
    <?php if (!empty($celebrations_list)): ?>
      <ul class="list wow fadeIn" data-wow-delay="0.4s">
        <?php foreach ($celebrations_list as $celebration):
          $item_image = $celebration['image'];
          $item_text = $celebration['text'];
          ?>
          <li class="item">
            <img
                class="item-image"
                src="<?= $item_image['url']; ?>"
                alt="<?= $item_image['alt']; ?>"
                loading="lazy"
            >
            <p class="item-text"><?= $item_text; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <?php if ($celebrations_text): ?>
      <div class="text wow fadeIn" data-wow-delay="0.5s"><?= $celebrations_text; ?></div>
    <?php endif; ?>
    <?php if (!empty($celebrations_link)): ?>
      <div class="btn-wrap wow fadeIn" data-wow-delay="0.6s">
        <a class="btn" href="<?= $celebrations_link['url'] ?>"
           target="<?= $celebrations_link['target'] ?>"><?= $celebrations_link['title']; ?></a></div>
    <?php endif; ?>
  </div>
</section>
<section class="daycare-instagram-video wow fadeIn"
         style='background:url("<?php echo $instagram_video_bg; ?>") center / cover no-repeat;'>
  <div class="container decor">
    <div class="phone-container wow fadeIn" data-wow-delay="0.1s">
      <video class="phone-video" controls muted loop autoplay>
        <source src="<?php echo get_template_directory_uri() ?>/video/Copy_of_Reel_10_11.mp4" type="video/mp4">
      </video>
    </div>

    <div class="content wow fadeIn" data-wow-delay="0.2s">
      <h2 class="title"><?= $instagram_video_title; ?></h2>
      <p class="subtitle"><?= $instagram_video_subtitle; ?></p>
      <div class="description"><?= $instagram_video_description; ?></div>
      <p class="text"><?= $instagram_video_text; ?></p>
    </div>
  </div>
  <script>
    const video = document.querySelector('.phone-video');
    video.addEventListener('error', () => {
      console.error('Ошибка загрузки видео:', video.error);
    });
  </script>
</section>
<section class="daycare-graduation wow fadeIn">
  <header class="daycare-graduation-header">
    <div class="container">
      <p class="daycare-graduation-header-text wow fadeIn"
         data-wow-delay="0.1s"><?= $graduation_header_text; ?></p>
    </div>
  </header>
  <div class="container">
    <div class="content">
      <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?= $graduation_title; ?></h2>
      <p class="text wow fadeIn" data-wow-delay="0.3s"><?= $graduation_text; ?></p>
      <div class="quote-wrapper wow fadeIn" data-wow-delay="0.3s">
        <div class="quote"><?= $graduation_quote; ?></div>
        <div class="quote-signature">
          <img
              class="quote-image"
              src="<?= $graduation_quote_signature['url']; ?>"
              alt="<?= $graduation_quote_signature['alt']; ?>"
              loading="lazy"
          >
          <p class="signature-author"><?= $graduation_quote_author; ?></p>
        </div>
      </div>
    </div>
    <div class="image-wrap">
      <img
          src="<?= $graduation_image['url']; ?>"
          alt="<?= $graduation_image['alt']; ?>"
          loading="lazy"
      >
    </div>
  </div>
</section>
<section class="daycare-sensory-play wow fadeIn">
  <div class="container decor">
    <?php if ($sensory_play_title): ?>
      <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?= $sensory_play_title; ?></h2>
    <?php endif; ?>
    <?php if ($sensory_play_subtitle): ?>
      <p class="subtitle wow fadeIn" data-wow-delay="0.2s"><?= $sensory_play_subtitle; ?></p>
    <?php endif; ?>
    <?php if ($sensory_play_description): ?>
      <div class="description wow fadeIn" data-wow-delay="0.3s"><?= $sensory_play_description; ?></div>
    <?php endif; ?>
    <?php if (!empty($sensory_play_list)): ?>
      <ul class="list wow fadeIn" data-wow-delay="0.4s">
        <?php foreach ($sensory_play_list as $item):
          $item_image = $item['image'];
          $item_text = $item['text'];
          ?>
          <li class="item">
            <img
                class="item-image"
                src="<?= $item_image['url']; ?>"
                alt="<?= $item_image['alt']; ?>"
                loading="lazy"
            >
            <p class="item-text"><?= $item_text; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <?php if ($sensory_play_text): ?>
      <div class="text wow fadeIn" data-wow-delay="0.5s"><?= $sensory_play_text; ?></div>
    <?php endif; ?>
    <?php if (!empty($sensory_play_link)): ?>
      <div class="btn-wrap wow fadeIn" data-wow-delay="0.6s">
        <a class="btn" href="<?= $sensory_play_link['url'] ?>"
           target="<?= $sensory_play_link['target'] ?>"><?= $sensory_play_link['title']; ?></a></div>
    <?php endif; ?>
  </div>
</section>
<section class="daycare-video wow fadeIn">
  <div class="container">
    <div class="flex">
      <div class="col-50">
        <div class="content wow fadeIn" data-wow-delay="0.1s">
          <h2 class="title"><?php echo $video_title; ?></h2>
          <p class="description"><?php echo $video_description; ?></p>
          <p class="text"><?php echo $video_text; ?></p>
        </div>
      </div>
      <div class="col-50">
        <?php if ($video_url) :
          $video_id = '';
          if (preg_match('/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $video_url, $matches)) {
            $video_id = $matches[1];
          }

          if (!empty($video_thumbnail)) {
            $thumbnail_url = $video_thumbnail['url'];
          } else {
            $thumbnail_url = "https://img.youtube.com/vi/{$video_id}/maxresdefault.jpg";
          }
          ?>
          <div class="daycare-video-wrapper">
            <div class="daycare-video-preview" data-video-id="<?php echo esc_attr($video_id); ?>">
              <div class="daycare-video-rounded-thumbnail"
                   style="background-image: url('<?php echo esc_url($thumbnail_url); ?>')">
                <button class="daycare-video-play-button" aria-label="Play video"></button>
              </div>
            </div>
            <div class="daycare-video-modal" id="modal-<?php echo esc_attr($video_id); ?>">
              <div class="daycare-video-modal-overlay"></div>
              <div class="daycare-video-modal-content">
                <button class="daycare-video-close-button" aria-label="Close">&times;</button>
                <div class="daycare-video-player-container"
                     id="player-container-<?php echo esc_attr($video_id); ?>"></div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
<section class="daycare-text-image-block wow fadeIn">
  <?php
  $tib_title = get_field('daycare_page_text_and_image_block_title');
  $tib_description = get_field('daycare_page_text_and_image_block_description');
  $tib_image = get_field('daycare_page_text_and_image_block_image');
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
        <img class="hide-mobile" src="<?php echo $tib_image['url'] ?>" alt="<?php echo $tib_image['alt']; ?>">
        <img class="hide-desktop" src="<?php echo $tib_image['url'] ?>" alt="<?php echo $tib_image['alt']; ?>">
      </div>
    </div>
  </div>
</section>
<section class="green-yellow-line wow fadeIn">
  <div class="container">
    <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $green_yellow_line_title; ?></h2>
  </div>
</section>
<section class="daycare-image-text-block daycare-text-image-block wow fadeIn">
  <?php
  $tib_title = get_field('daycare_page_image_and_text_block_title');
  $tib_description = get_field('daycare_page_image_and_text_block_description');
  $tib_image = get_field('daycare_page_image_and_text_block_image');
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
        <img class="hide-mobile" src="<?php echo $tib_image['url'] ?>" alt="<?php echo $tib_image['alt']; ?>">
        <img class="hide-desktop" src="<?php echo $tib_image['url'] ?>" alt="<?php echo $tib_image['alt']; ?>">
      </div>
    </div>
  </div>
</section>
<section class="sign-info wow fadeIn">
  <?php
  $title = get_field('daycare_page_sign_info_title');
  $subtitle = get_field('daycare_page_sign_info_subtitle');
  $sign = get_field('daycare_page_sign_info_sign');
  $text = get_field('daycare_page_sign_info_text');
  ?>
  <div class="container decor">
    <h2 class="title wow fadeIn" data-wow-delay="0.1s"><?php echo $title ?></h2>
    <p class="subtitle wow fadeIn" data-wow-delay="0.3s"><?php echo $subtitle ?></p>
    <p class="sign wow fadeIn" data-wow-delay="0.5s"><?php echo $sign ?></p>
    <p class="text wow fadeIn" data-wow-delay="0.7s"><?php echo $text ?></p>
  </div>
</section>

<section class="daycare-gallery wow fadeIn">
  <div class="container">
    <div class="titleBlock">
      <h2 class="title"><?php echo get_field('daycare_page_gallery_title') ?></h2>
      <div class="description"><?php echo get_field('daycare_page_gallery_description') ?></div>
    </div>
    <?php if (have_rows('daycare_page_gallery_content')): ?>
      <div class="contentBlock">
        <?php while (have_rows('daycare_page_gallery_content')): the_row();
          $image = get_sub_field('image');
          $item_id = 'content-item-' . get_row_index();
          ?>
          <div class="contentItem">
            <a href="javascript:;" data-src="#<?php echo $item_id; ?>" data-fancybox>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </a>
            <div id="<?php echo $item_id; ?>" style="display: none;">
              <div class="fancybox-custom-container">
                <button class="fancybox-custom-close">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.5 20.7156L10.4895 29.7256C10.3289 29.8865 10.1318 29.9724 9.89826 29.9833C9.66496 29.9944 9.457 29.9085 9.27437 29.7256C9.09146 29.543 9 29.3405 9 29.1181C9 28.8956 9.09146 28.6931 9.27437 28.5105L18.2844 19.5L9.27437 10.4895C9.1135 10.3289 9.02762 10.1318 9.01675 9.89826C9.00558 9.66496 9.09146 9.457 9.27437 9.27437C9.457 9.09146 9.65952 9 9.88194 9C10.1044 9 10.3069 9.09146 10.4895 9.27437L19.5 18.2844L28.5105 9.27437C28.6711 9.1135 28.8682 9.02762 29.1017 9.01674C29.335 9.00558 29.543 9.09146 29.7256 9.27437C29.9085 9.457 30 9.65952 30 9.88194C30 10.1044 29.9085 10.3069 29.7256 10.4895L20.7156 19.5L29.7256 28.5105C29.8865 28.6711 29.9724 28.8682 29.9833 29.1017C29.9944 29.335 29.9085 29.543 29.7256 29.7256C29.543 29.9085 29.3405 30 29.1181 30C28.8956 30 28.6931 29.9085 28.5105 29.7256L19.5 20.7156Z"
                        fill="#363636"/>
                  </svg>
                </button>
                <div class="fancybox-custom-content">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
              </div>
            </div>
          </div>
        <?php endwhile ?>
      </div>
    <?php endif; ?>
    <div class="text"><?php echo get_field('daycare_page_gallery_text'); ?></div>
    <div class="slogan"><?php echo get_field('daycare_page_gallery_slogan'); ?></div>
  </div>
</section>


<?php get_template_part('template-parts/instagram-feed-5'); ?>
<?php get_template_part('template-parts/subscribe-form'); ?>
</div>
<?php get_footer(); ?>

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
      <div class="text">
        <?= $green_line_text; ?>
      </div>
    <?php endif; ?>


</div>
</section>
<section class="daycare-celebrations">
  <div class="container decor">
    <?php if ($celebrations_title): ?>
      <h2 class="title"><?= $celebrations_title; ?></h2>
    <?php endif; ?>
    <?php if ($celebrations_subtitle): ?>
      <p class="subtitle"><?= $celebrations_subtitle; ?></p>
    <?php endif; ?>
    <?php if ($celebrations_description): ?>
      <div class="description"><?= $celebrations_description; ?></div>
    <?php endif; ?>
    <?php if (!empty($celebrations_list)): ?>
      <ul class="list">
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
      <div class="text"><?= $celebrations_text; ?></div>
    <?php endif; ?>
    <?php if (!empty($celebrations_link)): ?>
      <div class="btn-wrap">
        <a class="btn" href="<?= $celebrations_link['url'] ?>"
           target="<?= $celebrations_link['target'] ?>"><?= $celebrations_link['title']; ?></a></div>
    <?php endif; ?>
  </div>
</section>
<section class="daycare-instagram-video"
         style='background:url("<?php echo $instagram_video_bg; ?>") center / cover no-repeat;'>
  <div class="container decor">
    <div class="phone-container">
      <video class="phone-video" controls muted loop autoplay>
        <source src="<?php echo get_template_directory_uri() ?>/video/Copy_of_Reel_10_11.mp4" type="video/mp4">
      </video>
    </div>

    <div class="content">
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
</div>

<?php get_template_part('template-parts/subscribe-form'); ?>
<?php get_footer(); ?>

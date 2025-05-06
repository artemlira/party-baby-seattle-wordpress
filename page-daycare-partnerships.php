<?php get_header();
$hero_title = get_field('daycare_page_hero_title');
$hero_subtitle = get_field('daycare_page_hero_subtitle');
$hero_description = get_field('daycare_page_hero_description');
$hero_link = get_field('daycare_page_hero_button');
$hero_bg = get_field('daycare_page_hero_background_image');
$green_line_title = get_field('daycare_page_green_line_title');
$green_line_title_value = get_field('daycare_page_green_line_title_value');
$green_line_text = get_field('daycare_page_green_line_text');
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
</div>

<?php get_template_part('template-parts/subscribe-form'); ?>
<?php get_footer(); ?>

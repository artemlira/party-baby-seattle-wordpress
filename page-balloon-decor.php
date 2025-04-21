<?php get_header(); ?>
<section class="balloon_hero">
  <div class="container">
    <div class="innerWrapper">
      <h1><?php the_field('first_title')?></h1>
      <div class="secLine"><?php the_field('first_second_line')?></div>
      <div class="thirdLine"><?php the_field('first_pretty_text')?></div>
    </div>
  </div>
</section>
<section class="balloon_secondSection">
  <div class="container">
    <div class="innerWrapper">
      <h2><?php the_field('second_title')?></h2>
      <div class="description"><?php the_field('second_description')?></div>
      <?php $btn = get_field('second_button')?>
      <?php if($btn):?>
        <div class="btnWrap">
          <a href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>" class="btn"><?php echo $btn['title']; ?></a>
        </div>
      <?php endif;?>
    </div>
  </div>
</section>
<section class="balloon_thirdSection">
  <div class="container">
    <div class="titleBlock">
      <h2><?php the_field('third_title')?></h2>
      <div class="description"><?php the_field('third_description')?></div>
    </div>
    <?php if(have_rows('third_content')):?>
      <div class="contentBlock">
        <?php while(have_rows('third_content')): the_row();?>
          <div class="contentItem">
            <div class="imgWrap">
              <img src="<?php the_sub_field('icon')?>" alt="">
            </div>
            <div class="itemTitle"><?php the_sub_field('title')?></div>
            <div class="itemText"><?php the_sub_field('text')?></div>
          </div>
        <?php endwhile?>
      </div>
    <?php endif?>
  </div>
</section>
<section class="balloon_fourthSection">
  <div class="container">
    <h2><?php the_field('fourth_title')?></h2>
    <div class="description"><?php the_field('fourth_description')?></div>
  </div>
</section>
<section class="balloon_fifthSection">
  <div class="container">
    <div class="titleBlock">
      <h2><?php the_field('fifth_title')?></h2>
      <div class="description"><?php the_field('fifth_description')?></div>
    </div>
  </div>
  <div class="bgBlock">
    <div class="container">
      <?php if(have_rows('fifth_content')):?>
        <div class="blockContent">
          <?php while(have_rows('fifth_content')): the_row();?>
            <div class="contentItem">
              <div class="itemTitle"><?php the_sub_field('title')?></div>
              <div class="itemText"><?php the_sub_field('text')?></div>
            </div>
          <?php endwhile;?>
        </div>
      <?php endif;?>
      <?php $btn = get_field('fifth_button')?>
      <?php if($btn):?>
        <div class="btnWrap">
          <a href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>" class="btn"><?php echo $btn['title']; ?></a>
        </div>
      <?php endif;?>
    </div>
  </div>
</section>
<section class="balloon_sixthSection">
  <div class="container">
    <div class="titleBlock">
      <h2><?php the_field('sixth_title')?></h2>
      <div class="description"><?php the_field('sixth_description')?></div>
    </div>
    <?php if(have_rows('sixth_content')):?>
      <div class="contentBlock">
        <?php while(have_rows('sixth_content')): the_row();
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $item_id = 'content-item-' . get_row_index();
          ?>
          <div class="contentItem">
            <a href="javascript:;" data-src="#<?php echo $item_id; ?>" data-fancybox>
              <img src="<?php echo $image; ?>" alt="">
              <div class="bage"><?php echo $title; ?></div>
            </a>
            <div id="<?php echo $item_id; ?>" style="display: none;">
              <div class="fancybox-custom-container">
                <button class="fancybox-custom-close">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 20.7156L10.4895 29.7256C10.3289 29.8865 10.1318 29.9724 9.89826 29.9833C9.66496 29.9944 9.457 29.9085 9.27437 29.7256C9.09146 29.543 9 29.3405 9 29.1181C9 28.8956 9.09146 28.6931 9.27437 28.5105L18.2844 19.5L9.27437 10.4895C9.1135 10.3289 9.02762 10.1318 9.01675 9.89826C9.00558 9.66496 9.09146 9.457 9.27437 9.27437C9.457 9.09146 9.65952 9 9.88194 9C10.1044 9 10.3069 9.09146 10.4895 9.27437L19.5 18.2844L28.5105 9.27437C28.6711 9.1135 28.8682 9.02762 29.1017 9.01674C29.335 9.00558 29.543 9.09146 29.7256 9.27437C29.9085 9.457 30 9.65952 30 9.88194C30 10.1044 29.9085 10.3069 29.7256 10.4895L20.7156 19.5L29.7256 28.5105C29.8865 28.6711 29.9724 28.8682 29.9833 29.1017C29.9944 29.335 29.9085 29.543 29.7256 29.7256C29.543 29.9085 29.3405 30 29.1181 30C28.8956 30 28.6931 29.9085 28.5105 29.7256L19.5 20.7156Z" fill="#363636"/>
                  </svg>
                </button>
                <div class="fancybox-custom-content">
                  <img src="<?php echo $image; ?>" alt="">
                  <div class="fancybox-custom-caption"><?php echo $title; ?></div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile?>
      </div>
    <?php endif;?>
  </div>
</section>
<section class="balloon_seventhSection">
  <div class="container">
    <div class="titleBlock">
      <h2><?php the_field('seventh_title')?></h2>
      <div class="description"><?php the_field('seventh_description')?></div>
    </div>
  </div>
</section>
<section class="balloon_eighthSection">
  <div class="container">
    <div class="contentBlock">
      <div class="titleBlock">
        <h2><?php the_field('eighth_title')?></h2>
        <div class="description"><?php the_field('eighth_description')?></div>
      </div>
      <div class="contentText"><?php the_field('eighth_content')?></div>
    </div>
  </div>
</section>
<?php if(have_rows('packages_content')):?>
  <section class="balloon_packages">
    <div class="container">
      <div class="contentWrapper">
        <?php while(have_rows('packages_content')): the_row();?>
          <div class="packageItem">
          <figure>
            <img src="<?php the_sub_field('image')?>" alt="">
          </figure>
          <div class="textWrap">
            <h5 class="itemTitle"><?php the_sub_field('title')?></h5>
            <div class="itemPrice"><?php the_sub_field('price')?></div>
            <div class="itemText"><?php the_sub_field('text')?></div>
          </div>
          <div class="btnWrap">
            <a href="#formSection" class="btn">Get a Quote</a>
          </div>
        </div>
        <?php endwhile?>
        <?php $additionalInfo = get_field('packages_additional_info')?>
        <?php if($additionalInfo):?>
        <div class="additionalInfoBlock"><?php echo $additionalInfo; ?></div>
        <?php endif;?>
        <?php $addons = get_field('packages_addons_section');?>
        <?php if($addons):?>
          <div class="addonBlock">
            <div class="imgWrap">
              <img src="<?php echo $addons['image']?>" alt="">
            </div>
            <div class="textWrap">
              <div class="addonTitle"><?php echo $addons['title']?></div>
              <div class="addonInfo"><?php echo $addons['info']?></div>
              <?php if($addons['list']): ?>
                <ul>
                  <?php foreach($addons['list'] as $item): ?>
                    <li><?php echo $item['item']; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <div class="note"><?php echo $addons['note_text']?></div>
            </div>
          </div>
        <?php endif;?>
      </div>
    </div>
  </section>
<?php endif;?>
<section class="balloon_ninthSection">
  <div class="container">
    <div class="contentBlock">
      <h2><?php the_field('ninth_title')?></h2>
      <div class="contentText"><?php the_field('ninth_text')?></div>
      <?php $btn = get_field('ninth_button')?>
      <?php if($btn):?>
        <div class="btnWrap">
          <a href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>" class="btn"><?php echo $btn['title']; ?></a>
        </div>
      <?php endif;?>
    </div>
  </div>
</section>
<section class="balloon_testimonials">
  <div class="container">
    <h2><?php the_field('testimonials_title')?></h2>
    <?php echo do_shortcode('[reviews-feed feed=1]')?>
  </div>
</section>
<section class="balloon_tenthSection">
  <div class="container">
    <div class="innerWrapper">
      <h2><?php the_field('tenth_title')?></h2>
      <div class="contentText"><?php the_field('tenth_text')?></div>
      <div class="prettyText"><?php the_field('tenth_pretty_text')?></div>
    </div>
  </div>
</section>
<section class="balloon_faq" id="faq">
  <div class="container">
    <div class="titleBlock">
      <h2><?php the_field('faq_title')?></h2>
      <div class="description"><?php the_field('faq_description')?></div>
    </div>
    <?php if(have_rows('faq_content')):?>
      <div class="accordion wow fadeIn" data-wow-delay="0.3s">
        <?php while(have_rows('faq_content')): the_row()?>
          <div class="accordion-item">
          <button class="accordion-header">
            <span><?php the_sub_field('title')?></span>
            <div class="chevron-container">
              <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 -6.99382e-07L16 7.63251L14.5667 9L8 2.73498L1.43333 9L1.1955e-07 7.63251L8 -6.99382e-07Z" fill="#363636"/>
              </svg>
            </div>
          </button>
          <div class="accordion-content"><?php the_sub_field('text')?></div>
        </div>
        <?php endwhile?>
    </div>
    <?php endif;?>
  </div>
</section>
<section class="balloon_form" id="formSection">
  <div class="container">
    <div class="innerWrapper">
      <div class="titleBlock">
        <h2><?php the_field('form_title')?></h2>
        <div class="description"><?php the_field('form_description')?></div>
      </div>
      <div class="hb-p-62b618fe3cd6df00081819e8-14"></div><img height="1" width="1" style="display:none" src="https://www.honeybook.com/p.png?pid=62b618fe3cd6df00081819e8">
      <script>
        (function(h,b,s,n,i,p,e,t) {
          h._HB_ = h._HB_ || {};h._HB_.pid = i;;;;
          t=b.createElement(s);t.type="text/javascript";t.async=!0;t.src=n;
          e=b.getElementsByTagName(s)[0];e.parentNode.insertBefore(t,e);
        })(window,document,"script","https://widget.honeybook.com/assets_users_production/websiteplacements/placement-controller.min.js","62b618fe3cd6df00081819e8");
      </script>
    </div>
  </div>
</section>
<div class="balloon_bottomElements">
  <div class="container">
    <div class="titleBlock">
      <h2><?php the_field('bottom_title')?></h2>
      <div class="insta"><?php the_field('bottom_second_line')?></div>
    </div>
    <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
  </div>
</div>
<?php get_template_part('template-parts/subscribe-form'); ?>
<?php get_footer(); ?>

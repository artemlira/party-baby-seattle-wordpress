<?php
/**
 * Template Name: Portal Page
 *
 */

get_header(); ?>

<div class="page portal-page">
    <section class="hero-portal" style="background: url(<?php the_field('portal_page_background_image_url') ?>); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="bianka"><?php the_field('portal_page_title') ?></h1>
            <h2 class="title"><?php the_field('portal_page_subtitle') ?></h2>
            <?php $button = get_field('portal_page_button') ?>
            <a href="<?php echo $button['url'] ?>" class="btn"><?php echo $button['title'] ?></a>
        </div>
        <div class="overlay"></div>
    </section>
    <?php get_template_part('template-parts/instagram-feed-5'); ?>
    <?php get_template_part('template-parts/subscribe-form'); ?>
</div>



<?php get_footer(); ?>
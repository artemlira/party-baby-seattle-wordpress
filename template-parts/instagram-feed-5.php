<section class="instagram-feed">
    <h2 class="title wow fadeIn" data-wow-delay="0.2s"><?php esc_html_e( 'GET INSPIRED!', 'partybaby' ); ?></h2>
    <div class="link-wrap wow fadeIn" data-wow-delay="0.4s">
        <a href="<?php the_field('instagram_url', 'option'); ?>" target="_blanc" class="instagram-link"><?php esc_html_e( '@PARTYBABYSEATTLE', 'partybaby' ); ?></a>
    </div>
    <div class="container wow fadeIn" data-wow-delay="0.6s">
        <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
    </div>
</section>
<section class="instagram-feed wow fadeIn">
    <h2 class="title"><?php esc_html_e( 'GET INSPIRED!', 'partybaby' ); ?></h2>
    <div class="link-wrap">
        <a href="<?php the_field('instagram_url', 'option'); ?>" target="_blanc" class="instagram-link"><?php esc_html_e( '@PARTYBABYSEATTLE', 'partybaby' ); ?></a>
    </div>
    <div class="container">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
</section>
<?php

	$privacy_url = get_permalink_by_slug('privacy-policy');
	$terms_url = get_permalink_by_slug('terms-and-conditions');

?>
<footer id="footer" class="site-footer">
	<div class="container">
		<nav class="footer-menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-footer',
						'menu_id'        => 'menu-footer',
					)
				);
			?>
		</nav>
		<div class="sign"></div>
		<div class="footer-info">
			<?php esc_html_e( 'We deliver fun, unforgettable, and Instagram-worthy play areas directly to your home or venue so you can keep the kids safe and entertained - and adults have fun, too.', 'partybaby' ); ?>
		</div>
		<div class="btn-wrap">
			<a href="<?php echo esc_url( home_url( '/party-booking' ) ); ?>" class="btn"><?php esc_html_e( 'BOOK NOW', 'partybaby' ); ?></a>
		</div>
		<div class="socials">
			<a href="<?php the_field('instagram_url', 'option'); ?>" target="_blanc"><i class="ico ico-instagram"></i></a>
			<a href="<?php the_field('facebook_url', 'option'); ?>" target="_blanc"><i class="ico ico-facebook"></i></a>
			<a href="<?php the_field('yelp_url', 'option'); ?>" target="_blanc"><i class="ico ico-yelp"></i></a>
			<a href="<?php the_field('pinterest_url', 'option'); ?>" target="_blanc"><i class="ico ico-pinterest"></i></a>
			<a href="<?php the_field('youtube_url', 'option'); ?>" target="_blanc"><i class="ico ico-youtube"></i></a>
		</div>
		<div class="footer-contacts">
			<a href="tel:<?php the_field('option_footer_phone_number', 'option'); ?>"><?php the_field('option_footer_phone_text', 'option'); ?></a>
			<a href="mailto:<?php the_field('option_email', 'option'); ?>"><?php the_field('option_email', 'option'); ?></a>
		</div>
		<div class="footer-bottom">
			<div class="footer-logo">
				 <a href="https://partybabyessentials.com/pages/how-to-plan-a-kids-birthday-party" target="_blanc"> <img src="<?php echo get_template_directory_uri()?>/img/logopbe.svg"></a>
				<p>
					Step-by-Step Guide & Stunning<br> 
					Online Invitations - All in One Place
				</p>
			</div>
			<a href="<?php echo $privacy_url ?>"><?php esc_html_e( '', 'partybaby' ); ?>PRIVACY POLICY</a>
			<span>(c) <?php echo date('Y')?> PARTY BABY LLC</span>
			<a href="<?php echo $terms_url ?>"><?php esc_html_e( '', 'partybaby' ); ?>TERMS & CONDITIONS</a>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php // get_template_part('template-parts/pop-up-download-guide'); ?>

<?php wp_footer(); ?>
</body>
</html>

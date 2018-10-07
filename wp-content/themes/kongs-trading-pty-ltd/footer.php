<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kongs_Trading_Pty_Ltd
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kongs-trading-pty-ltd' ) ); ?>"></a>
			<div class="foot-head">
				<div class="footer-title">
					<h3>COPYRIGHT@MASHBURGERSAUSTRALIA</h3>
					<h3>All Rights Reserved</h3>
				</div>
		
				<!-- burger footer logo -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/mb-logo.png" alt"Logo">
				</a>
			</div>
				
				
			<div class="foot-head">
				<div class="footer-title">
					<h3>FOLLOW US</h3>
				</div>
				
				<!-- social media -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/icon/icon_facebook.png" alt"Logo">
				</a>
				
				<!-- social media -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/icon/icon_twitter.png" alt"Logo">
				</a>

				<!-- social media -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/icon/icon_instagram.png" alt"Logo">
				</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

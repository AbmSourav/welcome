<?php 
defined( 'ABSPATH' ) || die();

if ( ! function_exists( 'get_field' ) ) return;
?>

<section class="content-wrapper contact" data-title="<?php _e( 'Contact', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'Contact', 'welcome' ); ?></h2>
		<div class="content-close"><i class="fas fa-times"></i></div>
	</div>
	<div class="content-inner-wrapper">
		<div class="social-media">
			<?php
			$social_icons = get_field( 'social_icons', 'option' );
			if ( ! empty( $social_icons ) ) :
			foreach ( $social_icons as $social_icon ) :
			?>
			<li>
				<a href="<?php echo esc_attr( $social_icon['social_link'] ); ?>" target="_blank">
					<i class="<?php echo esc_attr( $social_icon['icon_class'] ); ?>"></i>
				</a>
			</li>
			<?php
			endforeach;
			endif; 
			?>
		</div>

		<div class="contact-detail-wrapper">
			<?php if ( ! function_exists( 'get_field' ) ) return;  ?>
			<div class="contact-detail">
				<div class="email-contact">
					<p><?php _e( 'Contact me through Email:', 'welcome' ); ?> </p> 
					<span>
						<a href="<?php echo esc_url( get_field( 'email', 'option' ) ); ?>" title="<?php echo esc_attr( get_field( 'email', 'option' ) ); ?>">
							<i class="fas fa-envelope"></i>
						</a>
					</span>
				</div>
				<div class="messenger-contact">
					<p><?php _e( 'Send Direct Message on:', 'welcome' ); ?> </p>
					<span>
						<a href="<?php echo esc_url( get_field( 'messenger', 'option' ) ); ?>" target="_blank" title="Messenger">
							<i class="fab fa-facebook-messenger"></i>
						</a>
					</span>
				</div>
			</div>
			<div class="blog-detail">
				<p>
					<span><?php _e( 'Read my Blog', 'welcome' ); ?></span> 
					<a class="blog-link" href="<?php echo esc_url( get_field( 'personal_blog_link', 'option' ) ); ?>" target="_blank" title="Personal Blog">
						<i class="fas fa-external-link-alt"></i>
					</a>
					<span> <?php _e( 'and also on', 'welcome' ); ?></span>
					<a href="<?php echo esc_url( get_field( 'dev_link', 'option' ) ); ?>" target="_blank" title="DevCommunity">
						<i class="fab fa-dev"></i>
					</a>
				</p>
			</div>
		</div>
	</div>
</section>

<?php
defined( 'ABSPATH' ) || die();


if ( ! function_exists( 'get_field' ) ) return;

$resume = get_field( 'resume_image', 'option' );
$download_link = get_field( 'download_link', 'option' );
?>

<section class="content-wrapper resume" data-title="<?php _e( 'Resume', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'Resume', 'welcome' ); ?></h2>
		<div class="content-close"><i class="fas fa-times"></i></div>
	</div>
	<div class="content-inner-wrapper">
		<a download href="<?php echo esc_url( $download_link ); ?>" class="resume-download" title="Download Resume"><i class="fas fa-file-download"></i></a>
		<div class="resume-wrapper">
			<img loading="lazy" src="<?php echo esc_url( wp_get_attachment_image_url( $resume['id'], 'full' ) ); ?>" alt="Resume">
		</div>
	</div>
</section>

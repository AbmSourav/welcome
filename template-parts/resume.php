<?php
defined( 'ABSPATH' ) || die();


if ( ! function_exists( 'get_field' ) ) return;

$resume = get_field( 'resume_image', 'option' );
$download_link = get_field( 'download_link', 'option' );
?>

<section class="content-wrapper resume" data-title="<?php _e( 'Resume', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'Resume', 'welcome' ); ?></h2>
		<div class="content-close" title="Close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#d60303" viewBox="0 0 24 24" width="22px" height="22px"><circle cx="12" cy="12" r="10" opacity="1"/></svg>
        </div>
	</div>
	<div class="content-inner-wrapper">
		<a download href="<?php echo esc_url( $download_link ); ?>" class="resume-download" title="Download Resume (pdf)">
            <svg fill="#02b702" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="45px" height="45px">
                <path d="M19.355,10.036C18.674,6.595,15.641,4,12,4C9.108,4,6.603,5.639,5.352,8.036C2.343,8.36,0,10.906,0,14c0,3.314,2.686,6,6,6 h13c2.761,0,5-2.239,5-5C24,12.36,21.948,10.221,19.355,10.036z M12,18l-5-5h3V9h4v4h3L12,18z"/>
            </svg>
        </a>
		<div class="resume-wrapper">
			<img loading="lazy" src="<?php echo esc_url( wp_get_attachment_image_url( $resume['id'], 'full' ) ); ?>" alt="Resume">
		</div>
	</div>
</section>

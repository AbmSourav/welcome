<?php 
defined( 'ABSPATH' ) || die();


if ( ! function_exists( 'get_field' ) ) return;

$about_section = get_field( 'about_section', 'option' );
$genarel_skills = get_field( 'genarel_skills', 'option' );
?>

<section class="content-wrapper" data-title="<?php _e( 'About', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'About', 'welcome' ); ?></h2>
		<div class="content-close" title="Close">
			<div class="close-btn"></div>
		</div>
	</div>
	
	<div class="content-inner-wrapper">
		<div class="skill-item professional-skills">
			<?php echo $about_section; ?>
		</div>
	</div>
</section>

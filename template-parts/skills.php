<?php 
defined( 'ABSPATH' ) || die();


if ( ! function_exists( 'get_field' ) ) return;

$about_section = get_field( 'about_section', 'option' );
$genarel_skills = get_field( 'genarel_skills', 'option' );
?>

<section class="content-wrapper" data-title="<?php _e( 'About & Skills', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'About & Skills', 'welcome' ); ?></h2>
		<div class="content-close" title="Close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#d60303" viewBox="0 0 24 24" width="22px" height="22px"><circle cx="12" cy="12" r="10" opacity="1"/></svg>
        </div>
	</div>
	
	<div class="content-inner-wrapper">
		<div class="skill-item professional-skills">
			<p class="content-detail"><?php echo $about_section; ?></p>
		</div>
	</div>
</section>

<?php 
defined( 'ABSPATH' ) || die();


if ( ! function_exists( 'get_field' ) ) return;

$production_skills = get_field( 'production_skills', 'option' );
$genarel_skills = get_field( 'genarel_skills', 'option' );
?>

<section class="content-wrapper" data-title="<?php _e( 'Skills', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'Skills', 'welcome' ); ?></h2>
		<div class="content-close"><i class="fas fa-times"></i></div>
	</div>
	
	<div class="content-inner-wrapper">
		<div class="skill-item professional-skills">
			<h4 class="skill-title"><?php _e( 'Production Skills', 'welcome' ); ?></h4>
			<p class="content-detail"><?php echo $production_skills; ?></p>
		</div>
		<div class="skill-item genarel-skills">
			<h4 class="skill-title"><?php _e( 'Genarel Skills', 'welcome' ); ?></h4>
			<p class="content-detail"><?php echo $genarel_skills; ?></p>
		</div>
	</div>
</section>

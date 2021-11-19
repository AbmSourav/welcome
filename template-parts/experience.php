<?php 
defined( 'ABSPATH' ) || die();


$company = get_field( 'company', 'option' );
if ( empty( $company ) ) return;
?>

<section class="content-wrapper experience" data-title="<?php _e( 'Experience', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'Experience', 'welcome' ); ?></h2>
		<div class="content-close"><i class="fas fa-times"></i></div>
	</div>
	
	<div class="content-inner-wrapper">
		<div class="job-wrapper">
			<?php foreach ( $company as $team ) : ?>
				<div class="job-detail">
					<div class="designation">
						<h4><?php echo esc_html( $team['designation'] ); ?></h4>
						<span><i class="fas fa-minus"></i></span>
						<h6><?php echo esc_html( $team['company_name'] ); ?></h6>
					</div>
					<div class="work-duration"><?php echo esc_html( $team['time_duration'] ); ?></div>
					<div class="responsibilities"><?php echo $team['job_detail']; ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

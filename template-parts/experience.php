<?php 
defined( 'ABSPATH' ) || die();


$company = get_field( 'company', 'option' );
if ( empty( $company ) ) return;
?>

<section class="content-wrapper experience" data-title="<?php _e( 'Experience', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'Experience', 'welcome' ); ?></h2>
		<div class="content-close" title="Close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#d60303" viewBox="0 0 24 24" width="22px" height="22px"><circle cx="12" cy="12" r="10" opacity="1"/></svg>
        </div>
	</div>
	
	<div class="content-inner-wrapper">
		<div class="job-wrapper">
			<?php foreach ( $company as $team ) : ?>
				<div class="job-detail">
					<div class="designation">
						<h4><?php echo esc_html( $team['designation'] ); ?></h4>
						<span>
							<svg width="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z"/></svg>
						</span>
						<h6><?php echo esc_html( $team['company_name'] ); ?></h6>
					</div>
					<div class="work-duration"><?php echo esc_html( $team['time_duration'] ); ?></div>
					<div class="responsibilities"><?php echo $team['job_detail']; ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

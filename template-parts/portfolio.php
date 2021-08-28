<?php
defined( 'ABSPATH' ) || die();

if ( ! function_exists( 'get_field' ) ) return;

$projects = get_field( 'porjects', 'option' );
if ( empty( $projects ) ) return;
?>

<section class="content-wrapper portfolio" data-title="<?php _e( 'Portfolio', 'welcome' ); ?>">
	<div class="content-header">
		<h2 class="content-title"><?php _e( 'Portfolio', 'welcome' ); ?></h2>
		<div class="content-close"><i class="fas fa-times"></i></div>
	</div>
	<div class="content-inner-wrapper">
		<div class="card-wrapper">
			<?php foreach ( $projects as $project ) : ?>
				<div class="work-card">
					<div class="work-content">
						<h4 class="work-title">
							<a href="<?php echo esc_url( $project['project_link'] ); ?>">
								<?php echo esc_html( $project['project_title'] ); ?>
							</a>
						</h4>
						<div class="work-meta">
							<span class="contribution-status">
								<?php echo esc_html( $project['cotribution_status'] ); ?>
							</span>
							<a href="<?php echo esc_url( $project['source_code_link'] ); ?>" title="Source Code"><i class="fab fa-github"></i></a>
						</div>
						<p class="short-description">
							<?php echo esc_html( $project['project_description'] ); ?>
						</p>
					</div>
					<div class="work-media">
						<a href="<?php echo esc_url( $project['project_link'] ); ?>">
							<img src="<?php echo esc_url( wp_get_attachment_image_url( $project['project_image']['id'] ) ); ?>" alt="<?php echo esc_attr( $project['project_title'] ); ?>">
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

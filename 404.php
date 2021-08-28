<?php
defined( 'ABSPATH' ) || die();

get_header();
?>

<div class="container 404-page" id="content">

	<section class="error-404 not-found">

		<div class="page-header">
			<h1 class="page-title text-white mb-2">
				<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'welcome' ); ?>
			</h1>
		</div>

		<div class="page-content">

			<p class="text-white mb-1">
				<?php esc_html_e( 'It looks like nothing was found at this location.', 'welcome' ); ?>
			</p>

			<p class="text-white">
				<?php esc_html_e( 'Go Back to ', 'welcome' ) ?>
				<a href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e( 'Home Page', 'welcome' ) ?></a>
			</p>

		</div>

	</section>

</div>

<?php get_footer(); ?>

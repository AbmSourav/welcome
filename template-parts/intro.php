<?php
defined( 'ABSPATH' ) || die();

if ( ! function_exists( 'get_field' ) ) return;

$profile_image = get_field( 'profile_image', 'option' );
$name = get_field( 'person_name', 'option' );
$short_detail = get_field( 'short_detail', 'option' );
?>

<div class="about">
	<img class="profile-image" data-lazy="<?php echo esc_url( wp_get_attachment_url( $profile_image['id'] ) ); ?>" alt="Keramot Ul Islam">
	
	<h1 class="name"><?php echo esc_html( $name ); ?></h1>

	<?php echo $short_detail; ?>
	
	<!-- <div class="hr-wrapper"><hr class="hr"></div> -->
</div>

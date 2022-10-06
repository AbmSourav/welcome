<?php
defined( 'ABSPATH' ) || die();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="robots" content="ALL"/>
	<meta name="robots" content="index, follow"/>
	<meta name="googlebot" content="index, follow"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-dark'); ?>>
	<?php 
	if ( is_page_template( 'custom-front-page.php' ) && function_exists( 'get_field' ) ) :
		$background_image = get_field( 'page_background_image', 'option' );
		?>
		<div class="body-bg-image" data-lazy="<?php echo esc_url( wp_get_attachment_url( $background_image['id'] ) ); ?>"></div>
		<?php
	endif;

    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
    ?>

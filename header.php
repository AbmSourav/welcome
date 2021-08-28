<?php
defined( 'ABSPATH' ) || die();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="robots" content="ALL"/>
	<meta name="robots" content="index, follow"/>
	<meta name="googlebot" content="index, follow"/>

	<style>
	.main-menu__item[data-title="Skills"] i {
		background: -webkit-linear-gradient(to bottom, #f02df7 0%,#0236ad 100%);
		background: -moz-linear-gradient(to bottom, #f02df7 0%,#0236ad 100%);
		background: linear-gradient(to bottom, #f02df7 0%,#0236ad 100%);
		-webkit-background-clip: text;
		-moz-background-clip: text;
		background-clip: text;
		-webkit-text-fill-color: transparent;
	}

	.main-menu__item[data-title="Portfolio"] i {
		background: -moz-linear-gradient(to bottom, #f9512b 0%,#9887e4 100%);
		background: -webkit-linear-gradient(to bottom, #f9512b 0%,#9887e4 100%);
		background: linear-gradient(to bottom, #f9512b 0%,#9887e4 100%);
		-webkit-background-clip: text;
		-moz-background-clip: text;
		background-clip: text;
		-webkit-text-fill-color: transparent;
	}

	.main-menu__item[data-title="Experience"] i {
		background: -webkit-linear-gradient(to bottom, #f0c005 0%,#c11e0d 100%); 
		background: linear-gradient(to bottom, #f0c005 0%,#c11e0d 100%);
		-webkit-background-clip: text;
		-moz-background-clip: text;
		background-clip: text;
		-webkit-text-fill-color: transparent;
	}

	.main-menu__item[data-title="Resume"] i {
		background: -moz-linear-gradient(to bottom, #f39e35 0%,#9564f5 100%);
		background: linear-gradient(to bottom, #f39e35 0%,#9564f5 100%);
		-webkit-background-clip: text;
		-moz-background-clip: text;
		background-clip: text;
		-webkit-text-fill-color: transparent;
	}

	.main-menu__item[data-title="Contact"] i {
		background: -moz-linear-gradient(to bottom, #dd0505 0%,#5921f4 100%);
		background: linear-gradient(to bottom, #dd0505 0%,#5921f4 100%);
		-webkit-background-clip: text;
		-moz-background-clip: text;
		background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	</style>

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

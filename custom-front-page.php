<?php
/**
 * Template Name: Front Page
 */
defined( 'ABSPATH' ) || die();

get_header();


get_template_part( 'template-parts/header-menu' );
?>

<div class="container">

	<?php 
	get_template_part( 'template-parts/intro' );
	get_template_part( 'template-parts/skills' );
	get_template_part( 'template-parts/portfolio' ); 
	get_template_part( 'template-parts/experience' );
	get_template_part( 'template-parts/resume' );
	get_template_part( 'template-parts/contact' ); 
	?>

	<div class="main-menu">
		<nav class="main-nav">
			<ul class="main-menu__list">
				<li id="skills" class="main-menu__item" data-title="About">
					<div class="main-menu__item-caption"></div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/about-skills.svg' ?>" alt="About">
                </li>
				<li id="portfolio" class="main-menu__item" data-title="Portfolio">
					<div class="main-menu__item-caption"></div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio.svg' ?>" alt="Portfolio">
                </li>
				<li id="experience" class="main-menu__item" data-title="Experience">
					<div class="main-menu__item-caption"></div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/briefcase.svg' ?>" alt="Experience">
                </li>
				<li id="resume" class="main-menu__item" data-title="Resume">
					<div class="main-menu__item-caption"></div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/resume.svg' ?>" alt="Resume">
                </li>
				<li id="contact" class="main-menu__item" data-title="Contact">
					<div class="main-menu__item-caption"></div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/contact.svg' ?>" alt="Contact">
                </li>
			</ul>
		</nav>
		<div class="nav-title"></div>
	</div>

</div>

<?php get_footer(); ?>

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
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/about-skills.svg' ?>" alt="">
                </li>
				<li id="portfolio" class="main-menu__item" data-title="Portfolio">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio.svg' ?>" alt="">
                </li>
				<li id="experience" class="main-menu__item" data-title="Experience">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/briefcase.svg' ?>" alt="">
                </li>
				<li id="resume" class="main-menu__item" data-title="Resume">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/resume.svg' ?>" alt="">
                </li>
				<li id="contact" class="main-menu__item" data-title="Contact">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/contact.svg' ?>" alt="">
                </li>
			</ul>
		</nav>
		<div class="nav-title"></div>
	</div>

</div>

<?php get_footer(); ?>

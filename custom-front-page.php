<?php
/**
 * Template Name: Front Page
 */
defined( 'ABSPATH' ) || die();

get_header();
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
		<nav>
			<ul class="main-menu__list">
				<li id="skills" class="main-menu__item" data-title="About & Skills"><i class="fas fa-list-alt"></i></li>
				<li id="portfolio" class="main-menu__item" data-title="Portfolio"><i class="fas fa-portrait"></i></li>
				<li id="experience" class="main-menu__item" data-title="Experience"><i class="fas fa-briefcase"></i></li>
				<li id="resume" class="main-menu__item" data-title="Resume"><i class="fas fa-file-alt"></i></li>
				<li id="contact" class="main-menu__item" data-title="Contact"><i class="fas fa-envelope"></i></li>
			</ul>
		</nav>
		<div class="nav-title"></div>
	</div>

</div>

<?php get_footer(); ?>

<?php
defined( 'ABSPATH' ) || die();
?>

<div class="context-menu">
    <div class="context-menu__item" id="skills" data-title="About">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/about-skills.svg' ?>" alt="about & skills">
        <div class="title"><?php _e( 'About', 'welcome' ); ?></div>
    </div>
    <div class="context-menu__item" id="portfolio" data-title="Portfolio">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio.svg' ?>" alt="portfolio">
        <div class="title"><?php _e( 'Portfolio', 'welcome' ); ?></div>
    </div>
    <div class="context-menu__item" id="experience" data-title="Experience">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/briefcase.svg' ?>" alt="experience">
        <div class="title"><?php _e( 'Experience', 'welcome' ); ?></div>
    </div>
    <div class="context-menu__item" id="resume" data-title="Resume">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/resume.svg' ?>" alt="resume">
        <div class="title"><?php _e( 'Resume', 'welcome' ); ?></div>
    </div>
    <div class="context-menu__item" id="contact" data-title="Contact">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/contact.svg' ?>" alt="contact">
        <div class="title"><?php _e( 'Contact', 'welcome' ); ?></div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>

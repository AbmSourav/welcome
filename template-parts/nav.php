<?php

defined( 'ABSPATH' ) || die();
?>

<div class="main-menu hide">
    <nav class="main-nav bottom-transition">
        <ul class="main-menu__list">
            <li id="skills" class="main-menu__item" data-title="About">
                <div class="main-menu__item-caption"></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-skills.svg' ?>" alt="About">
            </li>
            <li id="projects" class="main-menu__item" data-title="Projects">
                <div class="main-menu__item-caption"></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/projects.svg' ?>" alt="Portfolio">
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

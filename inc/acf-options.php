<?php

function acf_options() {
	if ( ! function_exists('acf_add_options_page' ) ) return;
	
	acf_add_options_page(
		array(
			'page_title' 	=> 'Theme Options',
			'menu_title'	=> 'Theme Options',
			'menu_slug' 	=> 'theme-options',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'Theme Page Settings',
			'menu_title'	=> 'Page Settings',
			'parent_slug'	=> 'theme-options',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'About Section',
			'menu_title'	=> 'About Section',
			'parent_slug'	=> 'theme-options',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'Skills Section',
			'menu_title'	=> 'Skills Section',
			'parent_slug'	=> 'theme-options',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'Portfolio Section',
			'menu_title'	=> 'Portfolio Section',
			'parent_slug'	=> 'theme-options',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'Experience Section',
			'menu_title'	=> 'Experience Section',
			'parent_slug'	=> 'theme-options',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'Resume Section',
			'menu_title'	=> 'Resume Section',
			'parent_slug'	=> 'theme-options',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'Contact Section',
			'menu_title'	=> 'Contact Section',
			'parent_slug'	=> 'theme-options',
		)
	);
}

acf_options();

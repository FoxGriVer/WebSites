<?php

function register_styles()
{
	wp_register_style('style', get_template_directory_uri() .
	'css/style.css');
	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'register_styles');
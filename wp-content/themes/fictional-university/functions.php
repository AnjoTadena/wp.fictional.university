<?php

function fictional_university_assets ()
{
	wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('fictional_university_main_style', get_stylesheet_uri());
	wp_enqueue_script('custom_javascript', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'fictional_university_assets');
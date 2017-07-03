<?php  
function gmz_theme_styles(){
	wp_enqueue_style('additional_css', get_template_directory_uri() . '/css/additional.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_script','gmz_theme_styles');


?>
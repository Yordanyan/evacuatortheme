<?php function site_styles(){
	wp_enqueue_style('style' , get_template_directory_uri()."/style.css", array(), '1.0' , 'all');
	wp_enqueue_script('style' , get_template_directory_uri()."/script.js", array(), '1.0' , 'all');
}
add_action('wp_enqueue_scripts' , 'site_styles');
?>

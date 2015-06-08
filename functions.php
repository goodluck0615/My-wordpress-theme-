
<!-- include css file -->
<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
function theme_css_style() {
	
	
	wp_enqueue_style( 'approach-block', get_template_directory_uri() . '/css/approach-block.css', array(), '3.0.3' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.0.3' );
	wp_enqueue_style( 'case', get_template_directory_uri() . '/css/case.css', array(), '3.0.3' );
	wp_enqueue_style( 'contactus', get_template_directory_uri() . '/css/contactus.css', array(), '3.0.3' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '3.0.3' );
	wp_enqueue_style( 'gaming', get_template_directory_uri() . '/css/gaming.css', array(), '3.0.3' );
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css', array(), '3.0.3' );
	wp_enqueue_style( 'mediamenu', get_template_directory_uri() . '/css/mediamenu.css', array(), '3.0.3' );
	wp_enqueue_style( 'modal-video', get_template_directory_uri() . '/css/modal-video.css', array(), '3.0.3' );
	wp_enqueue_style( 'our-approach', get_template_directory_uri() . '/css/our-approach.css', array(), '3.0.3' );
	wp_enqueue_style( 'project', get_template_directory_uri() . '/css/project.css', array(), '3.0.3' );
	wp_enqueue_style( 'purpose', get_template_directory_uri() . '/css/purpose.css', array(), '3.0.3' );
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/fonts/stylesheet.css', array(), '3.0.3' );
	wp_enqueue_style( 'resources', get_template_directory_uri() . '/css/resources.css', array(), '3.0.3' );
	wp_enqueue_style( 'support', get_template_directory_uri() . '/css/support.css', array(), '3.0.3' );
	wp_enqueue_style( 'tab_block', get_template_directory_uri() . '/css/tab_block.css', array(), '3.0.3' );
	wp_enqueue_style( 'tabs', get_template_directory_uri() . '/css/tabs.css', array(), '3.0.3' );
	wp_enqueue_style( 'team', get_template_directory_uri() . '/css/team.css', array(), '3.0.3' );
	wp_enqueue_style( 'the-team', get_template_directory_uri() . '/css/the-team.css', array(), '3.0.3' );
	wp_enqueue_style( 'var', get_template_directory_uri() . '/css/var.css', array(), '3.0.3' );
	wp_enqueue_style( 'video', get_template_directory_uri() . '/css/video.css', array(), '3.0.3' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '3.0.3' );
	// wp_enqueue_style( 'specimen_stylesheet', get_template_directory_uri() . '/fonts/specimen_files/specimen_stylesheet.css', array(), '3.0.3' );
	// wp_enqueue_style( 'grid_12-825-55-15', get_template_directory_uri() . '/fonts/specimen_files/grid_12-825-55-15.css', array(), '3.0.3' );

}

add_action( 'wp_enqueue_scripts', 'theme_css_style' );

/* <!-- include js file --> */

function theme_java_scripts() {
	wp_enqueue_style('jquery');
	wp_enqueue_script( 'jquery-1.11.1_min', get_template_directory_uri() . '/js/jquery-1.11.1_min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery-migrate-1.2.1.min', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery.easytabs.min', get_template_directory_uri() . '/js/jquery.easytabs.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery.form.min', get_template_directory_uri() . '/js/jquery.form.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery.form-validator', get_template_directory_uri() . '/js/jquery.form-validator.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery.hashchange.min', get_template_directory_uri() . '/js/jquery.hashchange.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootbox.min', get_template_directory_uri() . '/js/bootbox.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-hover-dropdown', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'hover-tabs', get_template_directory_uri() . '/js/hover-tabs.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'style', get_template_directory_uri() . '/js/style.js', array('jquery'), '1.0.0', true );


}

add_action( 'wp_enqueue_scripts', 'theme_java_scripts' );

/*------add menu location------*/
function register_menus_location() {
  register_nav_menus(
    array(  
    	'header_navigation' => __( 'Header Navigation' ), 
    	'expanded_footer' => __( 'Expanded Footer' )
    )
  );
} 
add_action( 'init', 'register_menus_location' );


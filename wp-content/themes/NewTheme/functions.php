<?php 

/*function load_stylesheets()
{
wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',
array(),false,'all');
	wp_enqueue_style('bootstrap');
}

wp_register_style('style',get_template_directory_uri() . '/style.css',
array(),false,'all');
	wp_enqueue_style('style');

add_action('wp_enqueue_scripts','load_stylesheets');


function include_jquery()
{
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery',get_template_directory_uri() . '/js/jquery-3.5.1.min.js','',1,true);

add_action('wp_enqueue_scripts','include_jquery');
}

function loadjs()
{
	wp_register_script('customjs',get_template_directory_uri() . '/js/script.js','',1,true);
		wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','loadjs');*/


//Navigation 

register_nav_menus(array(
	'primary'  => __('Primary Menu'),
	'footer' =>__('Footer Menu'),
));

add_theme_support('post-thumbnails');






//Add Widget

function wpb_widgets_init() {

	register_sidebar( array(
		'name'          => 'Custom Header Widget Area',
		'id'            => 'custom-header-widget',
		'before_widget' => '<div class="chw-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="chw-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'Newtheme' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

//code for displaying category

function wpdean_catlist_desc() {
    $taxonomy = 'types';
    $postType = 'sliders1';
    $catlist = get_terms( 'category' );
    $terms = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => 0, 'hide_empty' => false]);
   //print_r($term

if ( ! empty( $catlist ) ) {
      
        foreach( $terms as $termi ){ 
            $termi_id = $termi->term_id;?>
           
          <div class="container flexx">
             <div class="image">
                      
            <img class="img-responsive" src="<?php echo get_field('images', $taxonomy . '_' . $termi_id);?>" />
        </div>
            <div class="category">
            <h2><a href="<?php echo get_term_link(  $termi_id  ); ?>"><?php echo $termi->name ?></a></h2>
            
            <p><?php echo $termi->description ?></p>
            </div>
            </div>
   <?php
        }
    }
    }
   
   
    
    add_shortcode('wpdean_categories', 'wpdean_catlist_desc');
    add_filter('widget_text', 'do_shortcode');

//option page 




if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page('header');
	acf_add_options_sub_page('footer');
	
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


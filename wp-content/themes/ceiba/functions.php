<?php

add_theme_support('title-tag');//Para titulos en las pestañas de navegador
add_theme_support('post-thumbnails');//Para agregar soporte a imagenes destacadas

add_image_size('destacada', 1500, 600, true); //Se agrega un tamaño de imagen para destacados
add_image_size('blog', 600, 600, true); //Se agrega un tamaño de imagen para el blog
add_image_size('blog-single', 1600, 700, true); //Se agrega un tamaño de imagen para el blog
add_image_size('img-750-500', 750, 500, true); //Se agrega un para imagenes de dos columnas
add_image_size('img-500-330', 500, 330, true); //Se agrega un para imagenes de tres columnas
// funcion para llamar estilos y scripts
function riviera_style (){

    //llamar estilos

    wp_register_style('fontAwersome', get_template_directory_uri() . '/assets/libs/font-awesome-4/css/font-awesome.min.css' , array(), '1.0');
    wp_register_style('lightbox2', get_template_directory_uri() . '/assets/libs/lightbox2/css/lightbox.min.css' , array(), '1.0');
    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css' , array(), '1.0');

    wp_enqueue_style( 'fontAwersome');
    wp_enqueue_style( 'lightbox2');
    wp_enqueue_style( 'custom');

    //llamar scripts

    wp_register_script( 'jquery3.3.1', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
    wp_register_script('popper',  get_template_directory_uri() . '/assets/libs/popper.min.js', array(), '1.0.0', true ); 
    wp_register_script('bootstrap4',  get_template_directory_uri() . '/assets/libs/bootstrap-4.0.0/js/bootstrap.min.js', array(), '1.0.0', true ); 
    wp_register_script('lightbox2', get_template_directory_uri() . '/assets/libs/lightbox2/js/lightbox.min.js', array(), '1.0.0', true );
    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
    
    //Loading diferent jquery version what default wordpress core
    wp_add_inline_script( 'jquery3.3.1', 'var jQuery3_3_1 = $.noConflict(true);' );
    wp_enqueue_script( 'plugin-javascript', plugins_url( '/assets/js/script.js', __FILE__ ), array( 'jquery3.3.1' ) );

    // //Inserta los scripts
    wp_enqueue_script('popper'); 
    wp_enqueue_script('bootstrap4'); 
    wp_enqueue_script('lightbox2'); 
    wp_enqueue_script('script'); 

    

  
}

// *** Ejecuta la funcion que llama estilos y scripts
add_action('wp_enqueue_scripts', 'riviera_style');

//register new menues
function ceiba_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'Ceiba')
    ));
}
add_action('init', 'ceiba_menus');

//Funciones para hacer editable el logo del sitio
	function theme_prefix_setup() {
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-width' => true,
		) );
	}
	add_action( 'after_setup_theme', 'theme_prefix_setup' );

	function theme_prefix_the_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
    }
//Cambia la cantidad de caracteres en las entradas que se muestran del blog con excerpt
function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Cambia lo que aparece al final del excerpt
// function wpdocs_excerpt_more( $more ) {
//     return '.. Leer más..';
// }
// add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '.. <br> Ver Más', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Widgets

function ceiba_widgets(){
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div class="col-md-12 widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));


}
add_action('widgets_init', 'ceiba_widgets');

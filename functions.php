<?php
function my_queue() {
    wp_enqueue_style('_bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css','','all');
    wp_enqueue_style('_fontawesome', get_template_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css','','all');
    wp_enqueue_style('_font1', 'https://fonts.googleapis.com/css?family=Montserrat:400,700','','all');
    wp_enqueue_style('_font2', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic','','all');
    wp_enqueue_style('_style', get_template_directory_uri().'/style.css',array('_bootstrap','_fontawesome'),'','all');

    wp_enqueue_script('_jQuery', get_template_directory_uri().'/vendor/jquery/jquery.min.js','',true);
	wp_enqueue_script('_poper', get_template_directory_uri().'/vendor/popper/popper.min.js','',true);
	wp_enqueue_script('_bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js','',true);
	wp_enqueue_script('_jquery_easing', get_template_directory_uri().'/vendor/jquery-easing/jquery.easing.min.js','',true);
	wp_enqueue_script('_jqBootstrapValidation', get_template_directory_uri().'/js/jqBootstrapValidation.js','',true);
	wp_enqueue_script('_contact_me', get_template_directory_uri().'/js/contact_me.js','',true);
	wp_enqueue_script('_scripts', get_template_directory_uri().'/js/freelancer.min.js',array('_jQuery','_poper','_bootstrap','_jquery_easing','_jqBootstrapValidation','_contact_me'),'',true);
}
add_action( 'wp_enqueue_scripts', 'my_queue' );

// function remove_posts_menu() {
//     remove_menu_page('edit.php?post_type=page');
// }
// add_action('admin_init', 'remove_posts_menu');

add_post_type_support( 'page', 'excerpt' );

function custom_theme_setup() {
    add_theme_support('post-thumbnails');
    add_image_size( 'portfolio', 350, 253, true );
    add_image_size( 'stack', 350, 200, true );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


function create_posttype() {
    
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' ),

                'add_new_item' => __( 'New Item' ),
                'add_new' => __( 'New' ),
                'edit_item' => __( 'Edit Item' )

            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'rewrite' => array('slug' => 'projects'),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            ),
        )
    );

    register_post_type('stack',
    array(
        'labels' => array(
            'name' => __( 'Stack' ),
            'singular_name' => __( 'Stack' ),

            'add_new_item' => __( 'New Item' ),
            'add_new' => __( 'New' ),
            'edit_item' => __( 'Edit Item' )

        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'skills'),
        'supports' => array(
            'title',
            'thumbnail'
        ),
    )
);

}
add_action('init','create_posttype');



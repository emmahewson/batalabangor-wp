<?php

// add the CSS and JS files

function bb_setup(){
    wp_enqueue_style('fontawesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");
    wp_enqueue_style('bootstrap', "//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_script("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", NULL, microtime(), false);
}

add_action('wp_enqueue_scripts', 'bb_setup');


// Adding Theme Support

function bb_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'bb_init');

// Custom Post Types

function bb_custom_post_type() {

    // Testimonials
    register_post_type('testimonial',
        array(
            'rewrite' => array('slug' => 'testimonial'),
            'labels' => array(
                'name' => 'Testimonials',
                'singular_name' => 'Testimonial',
                'add_new_item' => 'Add New Testimonial',
                'edit_item' => 'Edit Testimonial'
            ),
            'menu_icon' => 'dashicons-testimonial',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'thumbnail', 'editor', 'custom-fields', 'title'
            )
        )
    );

    // About Sections
    register_post_type('about-section',
        array(
            'rewrite' => array('slug' => 'about-section'),
            'labels' => array(
                'name' => 'About Sections',
                'singular_name' => 'About Section',
                'add_new_item' => 'Add About Section',
                'edit_item' => 'Edit About Section'
            ),
            'menu_icon' => 'dashicons-media-text',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'thumbnail', 'editor', 'title', 'custom-fields'
            )
        )
    );
}

add_action('init', 'bb_custom_post_type');


// Stops WP wrapping everything in p elements
add_filter('wpcf7_autop_or_not', '__return_false');

?>



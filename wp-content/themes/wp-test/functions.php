<?php

function wp_test_static() {
    wp_enqueue_style('style_font', get_template_directory_uri().'/fonts/icomoon/style.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
    wp_enqueue_style('jquery-ui', get_template_directory_uri().'/css/jquery-ui.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default', get_template_directory_uri().'/css/owl.theme.default.min.css');
    wp_enqueue_style('bootstrap-datepicker', get_template_directory_uri().'/css/bootstrap-datepicker.css');
    wp_enqueue_style('flaticon', get_template_directory_uri().'/fonts/flaticon/font/flaticon.css');
    wp_enqueue_style('aos_', get_template_directory_uri().'/css/aos.css');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700');


    wp_enqueue_script('jquery-3.3.1', get_template_directory_uri().'/js/jquery-3.3.1.min.js');
    wp_enqueue_script('jquery-migrate-3.0.1', get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js');
    wp_enqueue_script('jquery-ui', get_template_directory_uri().'/js/jquery-ui.js');
    wp_enqueue_script('jquery.easing.1.3', get_template_directory_uri().'/js/jquery.easing.1.3.js');
    wp_enqueue_script('popper.min', get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri().'/js/owl.carousel.min.js');
    wp_enqueue_script('jquery.stellar', get_template_directory_uri().'/js/jquery.stellar.min.js');
    wp_enqueue_script('jquery.countdown', get_template_directory_uri().'/js/jquery.countdown.min.js');
    wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri().'/js/bootstrap-datepicker.min.js');
    wp_enqueue_script('aos', get_template_directory_uri().'/js/aos.js');
    wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js');
}
add_action('wp_enqueue_scripts', 'wp_test_static');

register_nav_menu('top', 'main_menu');


class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array(), $id = 0) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent<ul class=\"dropdown\">";
    }

    function end_lvl(&$output, $depth = 0, $args = array(), $id = 0) {
        $output .= '</ul>';
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = str_repeat("\t", $depth);
        if($this->has_children) {
            $output .= "$indent <li class=\"has-children\"><a href=\"$item->url\"> ".$item->title;
        } else {
            $output .= "$indent<li><a href=\"$item->url\"> ".$item->title;
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= "</a></li>";
    }
}

function people_custom_post_type() {
    $labels = array(
        'name' => 'People',
        'singular_name' => 'Person',
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'revisions',
        'post-formats',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'people',
        ),
        'supports' => $supports,
    );
    register_post_type('people', $args);
}
add_action( 'init', 'people_custom_post_type' );

function contact_custom_post_type() {
    $labels = array(
        'name' => 'Contact',
        'singular_name' => 'Contact',
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'revisions',
        'post-formats',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'contact',
        ),
        'supports' => $supports,
    );
    register_post_type('contact', $args);
}
add_action( 'init', 'contact_custom_post_type' );


add_theme_support( 'post-thumbnails');


function single_post()
{
    $data = array(
        'post_type' => 'contact',
        'post_title' => $_POST['fname'].' '.$_POST['lname']. ' | Subject: '.$_POST['subject']. ' | Email: '.$_POST['email'],
        'post_content' => $_POST['message'],
        'post_status' => 'publish',
    );
    $id = wp_insert_post( $data );
    wp_die();
}

add_action( 'wp_ajax_single_post', 'single_post' );
add_action( 'wp_ajax_nopriv_single_post', 'single_post' );


function newsletter_custom_post_type() {
    $labels = array(
        'name' => 'Newsletter',
        'singular_name' => 'Newsletter',
    );

    $supports = array(
        'title',
        'custom-fields',
        'revisions',
        'post-formats',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'newsletter',
        ),
        'supports' => $supports,
    );
    register_post_type('newsletter', $args);
}
add_action( 'init', 'newsletter_custom_post_type' );

function newsletter()
{
    $data = array(
        'post_type' => 'newsletter',
        'post_title' => $_POST['email'],
        'post_status' => 'publish',
    );
    $id = wp_insert_post( $data );
    $sent = wp_mail(get_option('admin_email'), 'Newsletter', 'You have new subscribe: '.$_POST['email']);
    wp_die();
}

add_action( 'wp_ajax_newsletter', 'newsletter' );
add_action( 'wp_ajax_nopriv_newsletter', 'newsletter' );
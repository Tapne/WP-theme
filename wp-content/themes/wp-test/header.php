<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php wp_title('-', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <!--
    //////////////////////////////////////////////////////

    FREE TEMPLATE
    DESIGNED & DEVELOPED by free-template.co

    Website:    https://free-template.co
    Facebook:   https://www.facebook.com/FreeDashTemplate.co
    Twitter:    https://twitter.com/Free_Templateco

    //////////////////////////////////////////////////////
    -->

    <?php wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".site-navbar-target" data-offset="200" >

<!-- <div class="site-wrap"> -->

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 col-xl-2 site-logo">
                <h1 class="mb-0">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white h2 mb-0">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                        <li><a href="#section-home" class="nav-link">Home</a></li>
                        <li class="has-children">
                            <a href="#section-about" class="nav-link">About Us</a>
                            <ul class="dropdown">
                                <li><a href="#section-how-it-works" class="nav-link">How It Works</a></li>
                                <li><a href="#section-our-team" class="nav-link">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a href="#section-services" class="nav-link">Services</a></li>
                        <li><a href="#section-industries" class="nav-link">Industries</a></li>
                        <li><a href="#section-blog" class="nav-link">Blog</a></li>
                        <li><a href="#section-contact" class="nav-link">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
        </div>
    </div>
</header>
<div class="site-blocks-cover overlay" style="background-image: url('<?php the_field('image_hp'); ?>');" data-stellar-background-ratio="0.5" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8">
                <h1 class="text-white font-weight-light text-uppercase font-weight-bold">We Make Shipping</h1>
                <p class="mb-5">A Logistics Company</p>
                <p><a href="https://free-template.co" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>
            </div>
        </div>
    </div>
</div>




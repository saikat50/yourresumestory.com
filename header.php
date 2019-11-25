<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yourresumestory.com
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Resume Story</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/fonts/css/all.css">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- All css files are included here
    ============================================ -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <!-- Nice select css
    ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/nice-select.css">
    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/core.css">

    <!-- Theme shortcodes/elements style
    ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/shortcode/shortcodes.css">

    <!--  Theme main style
    ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/style.css">

    <!-- Color CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/plugins/color.css">

    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/blog.css">

    <!-- custom /cscss -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/sidebar.css">

    <!-- Modernizr JS -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script data-ad-client="ca-pub-6334265496452655" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


    <!--Main Wrapper Start-->
    <div class="as-mainwrapper">
        <!--Header Area Start-->
        <header id="sticky-header" class="header-area">
            <!-- Header Top Start -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="logo"><a href="<?php site_url(); ?>/home"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/finalogo.png" alt="Your Resume Story"></a></div>
                    </div>
                    <div class="col-sm-6 col-lg-9">
                        <nav id="primary-menu">
                            <ul class="main-menu text-right">
                                <li><a href="<?php site_url(); ?>/home">Home</a></li>
                                <li><a href="">Career Advice <i class="fal fa-chevron-down"></i></a>
                                    <ul class="dropdown">
                                        <?php wp_list_categories( array(
                                            'exclude'  => array( 4,7 ),
                                            'title_li' => ''
                                        ) ); ?>
                                    </ul>
                                </li>
                                <li><a href="<?php site_url(); ?>/about-me">About Me</a></li>
                                <li><a href="<?php site_url(); ?>/blog">Blog</a></li>
                                <li><a href="<?php site_url(); ?>/contact-us">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="right-btn">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="<?php site_url(); ?>/home">Home</a></li>
                                            <li><a href="">Career Advice</a>
                                                <ul class="sub-menu">
                                                    <?php wp_list_categories( array(
                                                        'exclude'  => array( 4,7 ),
                                                        'title_li' => ''
                                                    ) ); ?>
                                                </ul>
                                            </li>
                                            <li><a href="<?php site_url(); ?>/about-me">About Me</a></li>
                                            <li><a href="<?php site_url(); ?>/blog">Blog</a></li>
                                            <li><a href="<?php site_url(); ?>/contact-us">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Mobile Menu Area end -->
        </header>
        <!-- End of Header Area -->

        <div id="content" class="site-content">

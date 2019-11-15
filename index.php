<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TCFTHEME
 */

get_header();
?>
    <div class="banner pl-0 pr-0 bg-banner breadcum_banner" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/blog-banner.jpg')">

        <div class="layer-content">
            <div class="heding-of-banner">
                <h2 class="roboto-m breadcum-txt-head text-white">Read Blog</h2>
                <p class="text-center"><a class="roboto-cn-r font-16 color-main-black" href="">Home</a> <span class="rotate-1" style="font-size: 10px">/</span> <span class="roboto-cn-r font-16 color-main-black">Blog</span></p>
            </div>
        </div>

    </div>

    <div id="primary" class="content-area">
        <main id="main" class="site-main pb-70 pt-70">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        if ( have_posts() ) :

                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>

            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();

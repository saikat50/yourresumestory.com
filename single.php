<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                        while ( have_posts() ) :
                            the_post();

                            include(TEMPLATEPATH . '/template-parts/content-single.php');


                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
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



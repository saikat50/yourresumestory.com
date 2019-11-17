<?php

// Template Name: Contact Us Page

get_header();
?>

<div class="banner pl-0 pr-0 bg-banner breadcum_banner" style="background: url('<?php if(get_field('banner_bg')) the_field('banner_bg'); ?>')">

        <div class="layer-content">
            <div class="heding-of-banner">
                <h2 class="roboto-m breadcum-txt-head text-white"><?php if(get_field('banner_heading')) the_field('banner_heading'); ?></h2>
                <p class="text-center"><a class="roboto-cn-r font-16 color-main-black" href="">Home</a> <span class="rotate-1" style="font-size: 10px">/</span> <span class="roboto-cn-r font-16 color-main-black">Contact Us</span></p>
            </div>
        </div>

    </div>

    <section class="p-5 pl-0 pr-0">
        <div class="contact-us">
            <div class="container pl-50 pr-50">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php if(get_field('form_heading')) the_field('form_heading'); ?></h2>
                        <h3 class="color-gray"><?php if(get_field('form_sub_heading')) the_field('form_sub_heading'); ?></h3>
                    </div>
                </div>

                <div class="mt-90 pb-30 mob-mt-50">
                    <div class="contact-from max-w-1020">
                        <?php
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                the_content();
                                //
                                // Post Content here
                                //
                            } // end while
                        } // end if
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-info p-5">
            <div class="container">
                <div class="row mt-70">
                    <?php if(get_field('google_map_code')) the_field('google_map_code'); ?>
                </div>

            </div>
        </div>

    </section>




<?php
get_footer();
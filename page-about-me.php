<?php

// Template Name: About Me Page


get_header();
?>

    <div class="banner pl-0 pr-0 bg-banner breadcum_banner" style="background: url('<?php if(get_field('banner_bg')) the_field('banner_bg'); ?>')">

        <div class="layer-content">
            <div class="heding-of-banner">
                <h2 class="roboto-m breadcum-txt-head text-white"><?php if(get_field('about_me_heading')) the_field('about_me_heading'); ?></h2>
                <p class="text-center"><a class="roboto-cn-r font-16 color-main-black" href="<?php site_url();?>/home/">Home</a> <span class="rotate-1" style="font-size: 10px">/</span> <span class="roboto-cn-r font-16 color-main-black">Contact Us</span></p>
            </div>
        </div>

    </div>

    <section class="about-sec p-5 pl-0 pr-0">
        <div class="container">
            <div class="row">

            </div>
            <div class="row mt-40">
                <div class="col-md-5">
                    <img class="img-responsive mt-20" src="<?php $image = get_field('left_content_picture'); echo $image['url']; ?>" alt="<?php $image['alt']; ?>">
                </div>
                <div class="col-md-7">
                    <p class="roboto-r color-gray font-16"><?php if(get_field('right_content')) the_field('right_content'); ?></p>
                </div>
            </div>
        </div>
    </section>



<?php
get_footer();

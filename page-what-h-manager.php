<?php

// Template Name: What hiring manager Look For page


get_header();
?>

    <div class="banner pl-0 pr-0 bg-banner breadcum_banner" style="background: url('<?php if(get_field('banner_bg')) the_field('banner_bg'); ?>')">

        <div class="layer-content">
            <div class="heding-of-banner">
                <h2 class="roboto-m breadcum-txt-head text-white"><?php if(get_field('heading')) the_field('heading'); ?></h2>
                <p class="text-center"><a class="roboto-cn-r font-16 color-main-black" href="<?php site_url();?>/home/">Home</a> <span class="rotate-1" style="font-size: 10px">/</span> <span class="roboto-cn-r font-16 color-main-black">What hiring manager look for</span></p>
            </div>
        </div>

    </div>

    <section class="about-sec p-5 pl-0 pr-0">
        <div class="container">
            <div class="row">

            </div>
            <div class="row mt-40">
                <div class="col-md-3">
                    <img class="img-responsive mt-20" src="<?php $image = get_field('left_content_picture'); echo $image['url']; ?>" alt="<?php $image['alt']; ?>">
                </div>
                <div class="col-md-7 h-manager-text">
                    <p class="roboto-r color-gray"><?php if(get_field('right_content')) the_field('right_content'); ?></p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>



<?php
get_footer();


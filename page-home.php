<?php

// Template Name: Home Page


get_header();
?>

    <div class="banner pl-0 pr-0 bg-banner" style="background: url('<?php if(get_field('banner_background_image')) the_field('banner_background_image'); ?>')">

        <div class="layer-content">
            <div class="heding-of-banner">
                <h1 class="first-heading roboto-cn-b text-white text-center"><?php if(get_field('banner_heading')) the_field('banner_heading'); ?></h1>
                <h2 class="secound-heading text-white roboto-cn-l text-center"><?php if(get_field('banner_sub_heading')) the_field('banner_sub_heading'); ?></h2>
                <p class="text-center"><a href="<?php site_url(); ?>/resume-submit/" class="btn btn-submit roboto-cn-b text-white bg-orange">Submit Now</a></p>
            </div>
        </div>

    </div>

    <section class="hr-manager p-5 pr-0 pl-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="roboto-b color-main-black text-center secound-heading mt-20"><?php if(get_field('h_manager_h')) the_field('h_manager_h'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-6 mob-view">
                    <img class="img-fluid mt-30" src="<?php if(get_field('right_image')) {$image = get_field('right_image'); echo $image['url'];} ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <p class="section-para color-gray roboto-r  mt-30"><?php if(get_field('left_content')) the_field('left_content'); ?></p>
                    <p class="mt-20"><a href="<?php site_url(); ?>/what-hiring-manager-look-for/" class="btn btn-read text-white roboto-r bg-blue">Read More</a></p>
                </div>
                <div class="col-md-6 col-sm-6 col-md-6 desk-view">
                    <img class="img-fluid mt-30" src="<?php if(get_field('right_image')) {$image = get_field('right_image'); echo $image['url'];} ?>" alt="<?php echo $image['alt']; ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works p-5 pr-0 pl-0 bg-light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="roboto-b color-main-black text-center secound-heading"><?php if(get_field('how_it_works')) the_field('how_it_works'); ?></h3>
                </div>
            </div>
            <div class="row arrow-line-indicator">
                <div class="img-arrow">
                    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lin-arrow.png" alt="">
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                    <div class="step">
                        <div class="circle-icon">
                            <i class="fal fa-cloud-upload-alt"></i>
                        </div>
                        <p class="text-center roboto-b color-555 mt-25 font-18 mb-0"><?php if(get_field('step1_heading')) the_field('step1_heading'); ?></p>
                        <p class="text-center roboto-r color-555 font-16"><?php if(get_field('step1_sub_heading')) the_field('step1_sub_heading'); ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                    <div class="step">
                        <div class="circle-icon">
                            <i class="fal fa-file-search"></i>
                        </div>
                        <p class="text-center roboto-b color-555 mt-25 font-18 mb-0"><?php if(get_field('step2_heading')) the_field('step2_heading'); ?></p>
                        <p class="text-center roboto-r color-555 font-16"><?php if(get_field('step2_sub_heading')) the_field('step2_sub_heading'); ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                    <div class="step">
                        <div class="circle-icon">
                            <i class="fal fa-user-md-chat"></i>
                        </div>
                        <p class="text-center roboto-b color-555 mt-25 font-18 mb-0"><?php if(get_field('step3_heading')) the_field('step3_heading'); ?></p>
                        <p class="text-center roboto-r color-555 font-16"><?php if(get_field('step3_sub_heading')) the_field('step3_sub_heading'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center"><a href="<?php site_url(); ?>/resume-submit/" class="btn btn-submit roboto-cn-b color-blue bg-white mt-30">Submit Now</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-sec p-5 pl-0 pr-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="roboto-b color-main-black text-center secound-heading"><?php if(get_field('about_heading')) the_field('about_heading'); ?></h3>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-md-5 mob-view">
                    <img class="img-responsive mt-20" src="<?php if(get_field('about_right_content')) {$image2 = get_field('about_right_content'); echo $image2['url'];} ?>" alt="<?php echo $image2['alt']; ?>">
                </div>
                <div class="col-md-7">
                    <p class="roboto-r color-gray font-16">
                        <?php if(get_field('about_left_content')) the_field('about_left_content'); ?>
                        <p class="mt-20"><a href="<?php site_url(); ?>/about-me" class="btn btn-read text-white roboto-r bg-blue">Read More</a></p>
                    </p>
                </div>
                <div class="col-md-5 desk-view">
                    <img class="img-responsive mt-20" src="<?php if(get_field('about_right_content')) {$image2 = get_field('about_right_content'); echo $image2['url'];} ?>" alt="<?php echo $image2['alt']; ?>">
                </div>

            </div>
        </div>
    </section>


    <section class="recent-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="roboto-b color-main-black text-center secound-heading"><?php if(get_field('r_heading')) the_field('r_heading'); ?></h3>
                </div>
            </div>
            <div class="row mt-30">

                <?php

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page'=>3,
                    'order'=>'DESC',
                    'orderby'=>'ID',
                );

                ?>

                <?php $loop = new WP_Query($args); ?>

                <?php if($loop->have_posts()){?>

                    <?php while($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="col-md-4">
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="recent-post">
                                    <div class="img-container">
                                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <h3 class="post-headings roboto-m"><?php $title = get_the_title();  echo $title ?></h3>
                                    <p class="post-time-date roboto-r"><?php the_date('M.d');?> - <?php the_author(); ?> - <?php comments_number(); ?></p>
                                    <p class="post-content roboto-r"><?php echo myTruncate(20); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>


                <?php } ?>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="mt-40 text-center"><a href="<?php site_url(); ?>/blog/" class="btn btn-read text-white roboto-r bg-blue">See All Posts</a></p>
                </div>
            </div>
        </div>
    </section>




<?php
get_footer();

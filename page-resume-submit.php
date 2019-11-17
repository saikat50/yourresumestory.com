<?php

// Template Name: Resume Submit Page

get_header();
?>

<div class="banner pl-0 pr-0 bg-banner breadcum_banner" style="background: url('<?php if(get_field('banner_bg')) the_field('banner_bg'); ?>')">

    <div class="layer-content">
        <div class="heding-of-banner">
            <h2 class="roboto-m breadcum-txt-head text-white"><?php if(get_field('banner_heading')) the_field('banner_heading'); ?></h2>
            <p class="text-center"><a class="roboto-cn-r font-16 color-main-black" href="">Home</a> <span class="rotate-1" style="font-size: 10px">/</span> <span class="roboto-cn-r font-16 color-main-black">Resume Submit</span></p>
        </div>
    </div>

</div>


    <section class="p-5 pl-0 pr-0">
        <div class="contact-us">
            <div class="container pl-50 pr-50">
                <div class="row">
                    <div class="col-md-12">
                        <h2><span class="color-orange"><?php if(get_field('pre_heading')) the_field('pre_heading'); ?></span> <?php if(get_field('form_heading')) the_field('form_heading'); ?></h2>
                        <h3 class="color-gray"><?php if(get_field('form_sub_heading')) the_field('form_sub_heading'); ?></h3>
                    </div>
                </div>

                <div class="mt-90 pb-30 mob-mt-50">
                    <div class="contact-from max-w-1020">
                        <div class="row">
                            <div class="col-md-12">
                                <?php while( have_posts()) : the_post(); ?>

                                    <?php the_content(); ?>

                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
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

<?php

// Template Name: Resume Submit Page

get_header();
?>

<div class="banner pl-0 pr-0 bg-banner breadcum_banner" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/submit-resume.jpg')">

    <div class="layer-content">
        <div class="heding-of-banner">
            <h2 class="roboto-m breadcum-txt-head text-white">Submit Resume For Review</h2>
            <p class="text-center"><a class="roboto-cn-r font-16 color-main-black" href="">Home</a> <span class="rotate-1" style="font-size: 10px">/</span> <span class="roboto-cn-r font-16 color-main-black">Resume Submit</span></p>
        </div>
    </div>

</div>


    <section class="p-5 pl-0 pr-0">
        <div class="contact-us">
            <div class="container pl-50 pr-50">
                <div class="row">
                    <div class="col-md-12">
                        <h2><span class="color-orange">Upload</span> your resume</h2>
                        <h3 class="color-gray">and we will get back to you</h3>
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
                    <h3 class="roboto-b color-main-black text-center secound-heading">Recent Posts </h3>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-4">
                    <a href="">
                        <div class="recent-post">
                            <div class="img-container">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blog1.jpg" alt="">
                            </div>
                            <h3 class="post-headings roboto-m">Recent College Graduate Advice</h3>
                            <p class="post-time-date roboto-r">FEB 13. - ADMIN NAME - 4 COMMENTS</p>
                            <p class="post-content roboto-r">Lorem ipsum dolor sit amet, consectetur
                                adiicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolor magna aliqua.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="recent-post">
                            <div class="img-container">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blog2.jpg" alt="">
                            </div>
                            <h3 class="post-headings roboto-m">High School to College Advice</h3>
                            <p class="post-time-date roboto-r">FEB 13. - ADMIN NAME - 4 COMMENTS</p>
                            <p class="post-content roboto-r">Lorem ipsum dolor sit amet, consectetur
                                adiicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolor magna aliqua.</p>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="recent-post">
                            <div class="img-container">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blog1.jpg" alt="">
                            </div>
                            <h3 class="post-headings roboto-m">Networking</h3>
                            <p class="post-time-date roboto-r">FEB 13. - ADMIN NAME - 4 COMMENTS</p>
                            <p class="post-content roboto-r">Lorem ipsum dolor sit amet, consectetur
                                adiicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolor magna aliqua.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="mt-40 text-center"><a href="" class="btn btn-read text-white roboto-r bg-blue">See All Posts</a></p>
                </div>
            </div>
        </div>
    </section>



<?php
get_footer();

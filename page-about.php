<?php get_header(); ?>

<main>
        <!-- Hero -->
        <section id="hero-about">
            <div class="hero-text txt-cent hero-text-sm">
                <h1 class="main-title">ABOUT US</h1>
            </div>
        </section>
        <!--/ Hero -->
        <!-- About Sections -->
        <!-- About Top -->
        <section class="container-fluid bg-col-red container-fluid-nopad">
            <div class="buffer"></div>
                <div class="row about-row">

                    <?php 
                        $about_section_args = array(
                        'post_type' => 'about-section',
                        'meta_key' => 'order',
                        'meta_value' => 1,
                        );
                        $about_section = new WP_Query($about_section_args);

                        if ($about_section->have_posts()):
                            while ($about_section->have_posts()):
                                $about_section->the_post();
                    ?>


                    <div class="col-lg-7 order-last order-lg-first about-img" id="about-img-top" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>');"></div>
                    <div class="col-lg-5 align-self-center txt-left about-text">
                        <h2 class="section-title about-section-title text-uppercase"><?php the_title() ?></h2>
                        <p><?php the_content()?></p>
                    </div>

                    <?php 
                            endwhile;
                        endif;

                        // Good practice to reset the query after the loop - avoids problems later
                        wp_reset_query();
                    ?>
                    
                </div>
            <div class="buffer"></div>
        </section>
        <!--/ About Top -->


        <!-- About Middle -->
        <section class="container-fluid bg-col-dk container-fluid-nopad">
            <div class="buffer"></div>
            <div class="row about-row">
                <?php 
                    $about_section_args = array(
                    'post_type' => 'about-section',
                    'meta_key' => 'order',
                    'meta_value' => 2,
                    );
                    $about_section = new WP_Query($about_section_args);

                    if ($about_section->have_posts()):
                        while ($about_section->have_posts()):
                            $about_section->the_post();
                ?>

                <div class="col-lg-5 align-self-center txt-right about-text">
                    <h2 class="section-title about-section-title text-uppercase"><?php the_title() ?></h2>
                    <p><?php the_content()?></p>
                </div>
                <div class="col-lg-7 about-img" id="about-img-middle" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>');"></div>

                <?php 
                        endwhile;
                    endif;

                    // Good practice to reset the query after the loop - avoids problems later
                    wp_reset_query();
                ?>
            </div>

            <div class="buffer"></div>
        </section>
        <!--/ About Middle -->


        <!-- About Bottom -->
        <section class="container-fluid bg-col-red container-fluid-nopad">
            <div class="buffer"></div>
            <div class="row about-row">

                <?php 
                    $about_section_args = array(
                    'post_type' => 'about-section',
                    'meta_key' => 'order',
                    'meta_value' => 3,
                    );
                    $about_section = new WP_Query($about_section_args);

                    if ($about_section->have_posts()):
                        while ($about_section->have_posts()):
                            $about_section->the_post();
                ?>


                <div class="col-lg-7 order-last order-lg-first about-img" id="about-img-bottom" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>');"></div>
                <div class="col-lg-5 align-self-center txt-left about-text">
                    <h2 class="section-title about-section-title text-uppercase"><?php the_title() ?></h2>
                    <p><?php the_content()?></p>
                </div>

                <?php 
                        endwhile;
                    endif;

                    // Good practice to reset the query after the loop - avoids problems later
                    wp_reset_query();
                ?>
            </div>
            <div class="buffer"></div>
        </section>
        <!--/ About Bottom -->
        <!--/ About Sections -->
        <!-- Text Section -->
        <section class="bg-col-dk" id="need-drum-container">
            <div class="txt-cent" id="need-drum-text">
                <h2 class="section-title" id="need-drum-title">NEED SOME DRUMMERS?</h2>
                <p class="p-bigger">We could be bringing Brazilian rhythms to your event!</p>
            </div>
            <!-- Button: Book Us -->
            <div class="circle-button-lrg" id="book-us-btn">
                <div class="white-circle">
                    <p class="button-text txt-cent"><a href="<?php echo site_url('/book'); ?>">
                            BOOK US</a></p>
                </div>
                <div class="line-circle-inner line-circle-light"></div>
                <div class="line-circle-middle line-circle-light"></div>
                <div class="line-circle-outer line-circle-light"></div>
            </div>
            <!--/ Button: Book Us -->

            <!-- Link: Join Us -->
            <div id="cta-join-text" class="text-center link-text">
                <p><a href="<?php echo site_url('/join'); ?>">Interested in Joining?</a></p>
            </div>
            <!--/ Link: Join Us -->
        </section>
        <!--/ Text Section -->
    </main>

<?php get_footer(); ?>
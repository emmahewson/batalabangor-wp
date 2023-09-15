<?php get_header(); ?>

<main>
        <!-- Hero -->
        <section id="hero-book">
            <div class="hero-text txt-cent hero-text-sm">
                <h1 class="main-title">BOOK US</h1>
            </div>
        </section>
        <!--/ Hero -->
        <!-- Book Info & Form -->
        <section class="container-fluid bg-col-red form-container">
            <div class="row">
                <div class="col-lg-6 txt-left form-text-block">
                    <h2 class="section-title form-text-title">BOOK US FOR YOUR EVENT!</h2>
                    <p>We bring energy, noise, spirit and dancing to any event.
                    </p>
                    <p>We regularly play at carnivals, fairs, festivals, sporting events, private parties & stage shows
                        across North Wales and beyond. We have played at prestigious events such as The Notting Hill
                        Carnival, Festival No. 6, Rhuddfest, Zip World Rocks & Ddraig Beats.</p>
                    <p>We can perform static sets or parades at day or night events. We are LOUD! The band
                        works best outdoors or in large venues.</p>
                    <p>Below you can see testimonials from some of the events we have performed at over the years.</p>
                    <p>Fill in the form or email <a
                            href="mailto:bookings@batalabangor.com">bookings@batalabangor.com</a> to tell us about your
                        event and someone
                        will be in touch to discuss rates and our availability.</p>
                </div>
                <div class="col-lg-6 txt-left order-first order-lg-last form">
                    <section>

                        <!-- WP Form Rebuild -->

                        <h3 class="form-title tagline-small">BOOKING ENQUIRY</h3>
                        <?php echo do_shortcode('[contact-form-7 id="6a9c0ef" title="Book Us Form"]');?>


                        
                    </section>
                </div>
            </div>
        </section>
        <!--/ Book Info & Form -->
        <!-- Testimonials -->
        <section class="bg-col-dk" id="testimonial-container">
            <h2 class="section-title" id="testimonial-title">TESTIMONIALS</h2>
            <div class="row">

                <?php 
                    $testimonial_args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                    );
                    $testimonials = new WP_Query($testimonial_args);

                    if ($testimonials->have_posts()):
                        while ($testimonials->have_posts()):
                            $testimonials->the_post();
                    ?>

                                <div class="col-12 col-lg-6">
                                    <div class="testi-single">
                                        <div>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="rounded-circle testi-img" height="100"
                                                width="100" alt="Man lifts drum in to air">
                                        </div>
                                        <div class="testi-text">
                                            <?php the_content(); ?>
                                            <p>- <?php echo get_the_title(); ?></p>
                                        </div>
                                    </div>
                                </div>

                <?php 
                        endwhile;
                    endif;

                    // Good practice to reset the query after the loop - avoids problems later
                    wp_reset_query();
                ?>

            </div>
        </section>
        <!--/ Testimonials -->
    </main>

<?php get_footer(); ?>
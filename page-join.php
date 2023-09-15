<?php get_header(); ?>

<main>
        <!-- Hero -->
        <section id="hero-join">
            <div class="hero-text txt-cent hero-text-sm">
                <h1 class="main-title">JOIN US</h1>
            </div>
        </section>
        <!--/ Hero -->
        <!-- Join Info & Form -->
        <section class="container-fluid bg-col-red form-container">
            <div class="row">
                <div class="col-lg-6 txt-left form-text-block">
                    <h2 class="section-title form-text-title">JOIN BATALA BANGOR!</h2>
                    <p>We hold beginners' sessions for new players once or twice a year.
                    </p>
                    <p>No experience is necessary, many of our players had never picked up a musical instrument before
                        joining, though experienced drummers are also very welcome!</p>
                    <p>Drums are supplied by the band and you'll have access to our beginners' kit (beaters, belt etc)
                        to see if you enjoy it before committing to buying your own.</p>
                    <p>Rehearsals are on a Tuesday night in Tregarth. Our gigs are normally held at weekends, with
                        summer and Christmas being the busiest times of year.</p>
                    <p>You would also be joining an international community of over 1000 Batala drummers and have the
                        opportunity take part in Batala Mundo events, drumming with other Batala bands across the world.
                        <a href="about-us.html">Find out more about us.</a></p>
                    <p>If you're interested in joining fill in the form or email
                        <a href="mailto:bookings@batalabangor.com">bookings@batalabangor.com</a></p>
                </div>
                <div class="col-lg-6 txt-left order-first order-lg-last form" id="join-form-container">
                    <section>
                        <form method="get" action="thankyou.html">
                            <h3 class="form-title tagline-small">REGISTER YOUR INTEREST IN JOINING BATALA BANGOR</h3>
                            <label for="join-form-name" class="form-label-text">Full Name</label>
                            <input id="join-form-name" class="form-input-text" type="text" name="name" required>
                            <label for="join-form-email" class="form-label-text">Email Address</label>
                            <input id="join-form-email" class="form-input-text" type="email" name="email" required>
                            <textarea id="join-form-textarea" class="form-input-textarea form-label-text"
                                name="experience-info" required
                                aria-label="Tell us about your drumming or musical experience (beginners are welcome)"
                                rows="5" placeholder="Tell us about your drumming or musical experience (beginners are welcome)"></textarea>
                            <!-- Button: Join Us Form Submit-->
                            <div class="circle-button-sm">
                                <button class="white-circle" type="submit">
                                    <span class="txt-cent submit-btn-txt">SUBMIT</span>
                                </button>
                                <div class="line-circle-inner line-circle-light"></div>
                                <div class="line-circle-middle line-circle-light"></div>
                                <div class="line-circle-outer line-circle-light"></div>
                            </div>
                            <!--/ Button: Join Us Form Submit -->
                        </form>
                    </section>
                </div>
            </div>
        </section>
        <!--/ Join Info & Form -->
        <!-- Photo Gallery -->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6">
            <h2 class="sr-only">Photo Gallery</h2>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_01.jpg" class="img-fluid"
                    alt="Drummers infront of a stage" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_02.jpg" class="img-fluid"
                    alt="Smiling group of people in bright outfits" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_03.jpg" class="img-fluid"
                    alt="Hands with BATALA HEY tattooed on them" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_04.jpg" class="img-fluid"
                    alt="Drummers on a stage with a man on guitar" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_05.jpg" class="img-fluid"
                    alt="Smiling girl plays drum" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_06.jpg" class="img-fluid"
                    alt="Group parading and drumming on a street" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_07.jpg" class="img-fluid"
                    alt="Group of drummers dancing at a festival" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_08.jpg" class="img-fluid"
                    alt="Drumming group on a tropical beach" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_09.jpg" class="img-fluid"
                    alt="Young male drummer with green hair" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_10.jpg" class="img-fluid"
                    alt="Man lifts drum in the air against cloudy sky" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_11.jpg" class="img-fluid"
                    alt="Girl smiling at camera wearing white and red silk tabard" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/join_gallery_12.jpg" class="img-fluid"
                    alt="Female drummer with large drum smiling" width="500" height="500"></div>
        </div>
        <!--/ Photo Gallery -->
    </main>

    <div class="footer-buffer"></div>

<?php get_footer(); ?>
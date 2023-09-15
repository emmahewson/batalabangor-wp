<?php get_header(); ?>

<main>
        <!-- Hero -->
        <section id="hero-home">
            <div class="hero-text hero-text-lg txt-cent">
                <h1 class="main-title">BATALA BANGOR</h1>
                <h2 class="tagline">SAMBA REGGAE DRUMMING BAND<br>NORTH WALES</h2>
            </div>
        </section>
        <!--/ Hero -->
        <!-- Text Section -->
        <section class="container-fluid text-section-container bg-col-red">
            <!-- Welcome Text -->
            <div class="row">
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 txt-cent">
                    <h3 class="section-title" id="batala-hey-title">BATALA HEY!</h3>
                    <p class="p-bigger">We are Batala Bangor, a vibrant Samba-Reggae Percussion band full of energy and
                        uplifting spirit!
                        We
                        play
                        at carnivals, festivals, fairs and private events across North Wales, the UK and around the
                        world.
                    </p>
                    <p class="p-bigger">We bring energy, noise and fun to any event!</p>
                </div>
            </div>
            <!--/ Welcome Text -->
            <!-- Button: Find Out More -->
            <div class="circle-button-lrg" id="find-out-more-btn">
                <div class="white-circle">
                    <p class="button-text txt-cent"><a href="<?php echo site_url('/about'); ?>">
                            FIND OUT MORE</a></p>
                </div>
                <div class="line-circle-inner line-circle-dark"></div>
                <div class="line-circle-middle line-circle-dark"></div>
                <div class="line-circle-outer line-circle-dark"></div>
            </div>
            <!--/ Button: Find Out More -->
        </section>
        <!--/ Text Section -->
        <!-- Photo Gallery -->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6">
            <h2 class="sr-only">Photo Gallery</h2>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/home_gallery_1.jpg" class="img-fluid"
                    alt="Batala Bangor at Portmeirion Festival No. 6" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/home_gallery_2.jpg" class="img-fluid"
                    alt="Girl drumming" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/home_gallery_3.jpg" class="img-fluid"
                    alt="Batala Bangor group photo by the sea" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/home_gallery_4.jpg" class="img-fluid"
                    alt="Smiling drummers" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/home_gallery_5.jpg" class="img-fluid"
                    alt="Man plays drum above his head" width="500" height="500"></div>
            <div class="col gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/img/home_gallery_6.jpg" class="img-fluid"
                    alt="Drummers with arms in the air" width="500" height="500"></div>
        </div>
        <!--/ Photo Gallery -->
        <!-- Video -->
        <div class="container-fluid bg-col-dk video-section-container">
            <div class="row" id="video-row">
                <div class="col col-sm-10 offset-sm-1 txt-cent">
                    <h2 class="section-title">WATCH US IN ACTION!</h2>
                    <div class="video-wrapper ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/l4y8UoNgOng"
                            title="YouTube video player Batala Mundo at the start of Notting Hill Carnival 2018"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Video -->
    </main>

<?php get_footer(); ?>
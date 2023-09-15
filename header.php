<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Batala Bangor are a North Wales Samba-Reggae drumming group, ready to bring our Brazilian rhythms and energy to your event!">

    <!-- CSS & JS links (using the functions.php file) -->
    <?php wp_head(); ?>

</head>

<body>
    <header>
        <!-- Nav Bar -->
        <nav class="navbar navbar-dark bg-col-navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
                <a href="<?php echo site_url(''); ?>" class="nav-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bb_logo.png" alt="Batala Bangor Logo" id="bb-logo" width="60" height="60">
                    <span>BATALA BANGOR</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="active-nl nav-item"><a class="nav-link" href="<?php echo site_url(''); ?>">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/about'); ?>">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/book'); ?>">BOOK US</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/join'); ?>">JOIN US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="nav-behind"></div>
        <!--/ Nav Bar -->
    </header>
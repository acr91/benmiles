<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="d-flex">
        <div class="d-flex navigation-options">
            <button class="btn navigation-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" aria-hidden="true"
                    role="img">
                    <rect x="3" y="5" width="30" height="2" rx="1"></rect>
                    <rect x="3" y="15" width="30" height="2" rx="1"></rect>
                    <rect x="3" y="25" width="30" height="2" rx="1"></rect>
                </svg>
            </button>
            <!--<nav>
                <ul>
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </nav> -->
            <form class="search-form" action="">
                <input id="search" type="text" class="search-input" placeholder="Search">
            </form>
            <div class="header-logo">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/logo-header.png" alt="Ben Niles Podcast">
            </div>
        </div>
        <div class="d-flex actions">
            <button class="btn btn-primary desktop">CONTACT / WORK WITH ME</button>
            <button class="btn btn-primary mobile">CONTACT</button>
        </div>
    </header>
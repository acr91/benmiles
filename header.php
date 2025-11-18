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
        <div class="d-flex section-container">
            <div class="d-flex navigation-options">
                <button class="btn opener navigation-toggler" type="button" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                        aria-hidden="true" role="img">
                        <rect x="3" y="5" width="30" height="2" rx="1"></rect>
                        <rect x="3" y="15" width="30" height="2" rx="1"></rect>
                        <rect x="3" y="25" width="30" height="2" rx="1"></rect>
                    </svg>
                </button>
                <div class="primary-menu-container">
                    <button class="btn navigation-toggler" type="button" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200"
                            role="img" aria-label="Cruz en aspa">
                            <rect x="92" y="-20" width="16" height="240" transform="rotate(45 100 100)" rx="6" />
                            <rect x="92" y="-20" width="16" height="240" transform="rotate(-45 100 100)" rx="6" />
                        </svg>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'primary-menu',
                        'container' => 'nav',
                        'container_class' => 'primary-navigation',
                    ));
                    ?>
                </div>
                <form class="search-form" action="">
                    <input id="search" type="text" class="search-input" placeholder="Search">
                </form>
                <div class="header-logo black">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/logo-header-black.svg"
                        alt="Ben Niles Podcast">
                </div>
                <div class="header-logo white">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/logo-header.png"
                        alt="Ben Niles Podcast">
                </div>
            </div>
            <div class="d-flex actions">
                <a class="btn btn-primary desktop" href="#contact-anchor">CONTACT / WORK WITH ME</a>
                <a class="btn btn-primary mobile" href="#contact-anchor">CONTACT</a>
            </div>
        </div>
    </header>
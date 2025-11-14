<?php

defined("ABSPATH") or die("No direct script access allowed!");
/**
 * Template Name: Home Template
 *
 * Description: Custom template for Home Page.
 *
 * @package Ben_Miles
 */

get_header(); ?>
<section id="banner-anchor" class="d-flex banner bg-white">
    <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/banner-porsche.webp"
        alt="Ben Niles Podcast Banner Background" class="banner-bg-image">
    <div class="banner-logo-title">
        <img class="slide-in-bottom"
            src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/banner-ben-niles.webp"
            alt="The Ben Niles Podcast">
    </div>
    <div class="d-flex podcast-platform-list">
        <h3 class="heading-3">Watch, Listen and Subscribe</h3>
        <div class="d-flex list">
            <a href="#" class="d-flex paragraph-2 social-network-chip">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_spotify.svg"
                    alt="Spotify">
                Spotify
            </a>
            <a href="#" class="d-flex paragraph-2 social-network-chip">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_apple.svg"
                    alt="Apple Podcasts">
                Apple
            </a>
            <a href="#" class="d-flex paragraph-2 social-network-chip">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_youtube.svg"
                    alt="YouTube">
                Youtube
            </a>
            <a href="#" class="d-flex paragraph-2 social-network-chip">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_soundcloud.svg"
                    alt="SoundCloud">
                Sound Clod
            </a>
        </div>
    </div>
    <div class="d-flex chapters-list">
        <div class="d-flex chapter-card">
            <div class="d-flex card-header">
                <h3 class="heading-2">POWER UNDER CONTROL</h3>
                <p class="heading-4 bebas card-episode">E1-S1</p>
            </div>
            <div class="card-content">
                <p class="paragraph-2">
                    E1-S1. Experience a new era of automotive innovation—where cutting-edge
                    technology meets timeless design.
                </p>
            </div>
            <div class="d-flex card-actions">
                <a class="icon-link paragraph-1" href="">
                    Play Episode
                    <img class="icon img-icon-38"
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_play.png"
                        alt="Play Episode">
                </a>
            </div>
        </div>
        <div class="d-flex chapter-card">
            <div class="d-flex card-header">
                <h3 class="heading-2">BUILT TO PERFORM. DESIGNED TO IMPRESS.</h3>
                <p class="heading-4 bebas card-episode">E2-S1</p>
            </div>
            <div class="card-content">
                <p class="paragraph-2">
                    Every detail is engineered with purpose—from raw power under the hood to the
                    sleek contours of its design.
                </p>
            </div>
            <div class="d-flex card-actions">
                <a class="icon-link paragraph-1" href="">
                    Play Episode
                    <img class="icon img-icon-38"
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_play.png"
                        alt="Play Episode">
                </a>
            </div>
        </div>
        <div class="d-flex chapter-card">
            <div class="d-flex card-header">
                <h3 class="heading-2">SMARTER RIDES, BOLDER JOURNEYS.</h3>
                <p class="heading-4 bebas card-episode">E3-S1</p>
            </div>
            <div class="card-content">
                <p class="paragraph-2">
                    Ben merges cutting-edge performance with a bold aesthetic that turns heads
                    and dominates roads.
                </p>
            </div>
            <div class="d-flex card-actions">
                <a class="icon-link paragraph-1" href="">
                    Play Episode
                    <img class=" icon img-icon-38"
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_play.png"
                        alt="Play Episode">
                </a>
            </div>
        </div>
        <div class="d-flex chapter-card">
            <div class="d-flex card-header">
                <h3 class="heading-2">PERFORMANCE TUNED. TECH INFUSED.</h3>
                <p class="heading-4 bebas card-episode">E4-S1</p>
            </div>
            <div class="card-content">
                <p class="paragraph-2">
                    Where raw power meets refined intelligence. The vehicles Ben drives are
                    precision-engineered for speed, control, and efficiency.
                </p>
            </div>
            <div class="d-flex card-actions">
                <a class="icon-link paragraph-1" href="">
                    Play Episode
                    <img class="icon img-icon-38"
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_play.png"
                        alt="Play Episode">
                </a>
            </div>
        </div>
    </div>
</section>
<section id="about-anchor" class="d-flex about bg-black">
    <img class="about-img" src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/about-ben-niles.webp"
        alt="About Ben Niles Podcast">
    <h2 class="heading-1">ABOUT Benjamin</h2>
    <h3 class="heading-3">Car Guy - NCM General Manager Graduate</h3>
    <p class="paragraph-1">Benjamin Miles is an automotive professional with more than 25 years in sales management
        and finance. Ranked number one across multiple franchises and a Top 20 Toyota performer nationwide, he now
        channels his expertise into Shifting Gears and Minds—a podcast and blog where passionate car enthusiasts
        share their stories of speed, craftsmanship, and life on the road.
    </p>
    <div id="work-history-carousel" class="d-flex work-history-carousel">
        <div class="d-flex carousel-navigation">
            <div class="percent-line"></div>
            <div class="d-flex dot active" data-index="1">
                <div class="d-flex upper">
                    <p class="paragraph-2">Salesman, Assistant Manager, BDC Manager, Desk Manager</p>
                    <p class="paragraph-1">Van Tyul Corp</p>
                </div>
                <div class="d-flex lower">
                    <p class="paragraph-1">1999-2001</p>
                    <p class="paragraph-1">2 YEARS, 4 MONTHS</p>
                </div>
            </div>
            <div class="d-flex dot" data-index="2">
                <div class="d-flex upper">
                    <p class="paragraph-2">General Sales Manager</p>
                    <p class="paragraph-1">Nissan</p>
                </div>
                <div class="d-flex lower">
                    <p class="paragraph-1">2001-2004</p>
                    <p class="paragraph-1">2 YEARS, 4 MONTHS</p>
                </div>
            </div>
            <div class="d-flex dot" data-index="3">
                <div class="d-flex upper">
                    <p class="paragraph-2">General Sales Manager Suzuki</p>
                    <p class="paragraph-1">#1 Nation in 3 locations</p>
                </div>
                <div class="d-flex lower">
                    <p class="paragraph-1">2004-2008</p>
                    <p class="paragraph-1">4 YEARS, 9 MONTHS</p>
                </div>
            </div>
            <div class="d-flex dot" data-index="4">
                <div class="d-flex upper">
                    <p class="paragraph-2">General Sales Manager Finance Director</p>
                    <p class="paragraph-1">Macon, Warner Robins GA</p>
                </div>
                <div class="d-flex lower">
                    <p class="paragraph-1">2009-2014</p>
                    <p class="paragraph-1">5 YEARS, 1 MONTH</p>
                </div>
            </div>
            <div class="d-flex dot" data-index="5">
                <div class="d-flex upper">
                    <p class="paragraph-2">General Manager General Sales Manager </p>
                    <p class="paragraph-1">Greater Tampa Bay Region</p>
                </div>
                <div class="d-flex lower">
                    <p class="paragraph-1">2014-2025</p>
                    <p class="paragraph-1">11 YEARS, 3 MONTHS</p>
                </div>
            </div>
            <div class="d-flex dot" data-index="6">
                <div class="d-flex upper">
                    <p class="paragraph-2">General Manager</p>
                    <p class="paragraph-1">Porsche Annapolis</p>
                </div>
                <div class="d-flex lower">
                    <p class="paragraph-1">MAY 2025</p>
                    <p class="paragraph-1">6 MONTHS</p>
                </div>
            </div>
        </div>
        <div class="carousel-navigation-mobile">
            <div class="d-flex dots-container rounded-dots">
                <div class="dot active" data-index="1"></div>
                <div class="dot" data-index="2"></div>
                <div class="dot" data-index="3"></div>
                <div class="dot" data-index="4"></div>
                <div class="dot" data-index="5"></div>
                <div class="dot " data-index="6"></div>
            </div>
            <div class="d-flex item-info active" data-index="1">
                <p class="paragraph-2">Salesman, Assistant Manager, BDC Manager, Desk Manager</p>
                <p class="paragraph-1">Van Tyul Corp</p>
                <p class="paragraph-1">1999-2001</p>
                <p class="paragraph-1">2 YEARS, 4 MONTHS</p>
            </div>
            <div class="d-flex item-info" data-index="2">
                <p class="paragraph-2">General Sales Manager</p>
                <p class="paragraph-1">Nissan</p>
                <p class="paragraph-1">2001-2004</p>
                <p class="paragraph-1">2 YEARS, 4 MONTHS</p>
            </div>
            <div class="d-flex item-info" data-index="3">
                <p class="paragraph-2">General Sales Manager Suzuki</p>
                <p class="paragraph-1">#1 Nation in 3 locations</p>
                <p class="paragraph-1">2004-2008</p>
                <p class="paragraph-1">4 YEARS, 9 MONTHS</p>
            </div>
            <div class="d-flex item-info" data-index="4">
                <p class="paragraph-2">General Sales Manager Finance Director</p>
                <p class="paragraph-1">Macon, Warner Robins GA</p>
                <p class="paragraph-1">2009-2014</p>
                <p class="paragraph-1">5 YEARS, 1 MONTH</p>
            </div>
            <div class="d-flex item-info" data-index="5">
                <p class="paragraph-2">General Manager General Sales Manager </p>
                <p class="paragraph-1">Greater Tampa Bay Region</p>
                <p class="paragraph-1">2014-2025</p>
                <p class="paragraph-1">11 YEARS, 3 MONTHS</p>
            </div>
            <div class="d-flex item-info" data-index="6">
                <p class="paragraph-2">General Manager</p>
                <p class="paragraph-1">Porsche Annapolis</p>
                <p class="paragraph-1">MAY 2025</p>
                <p class="paragraph-1">6 MONTHS</p>
            </div>
        </div>
        <div class="d-flex carousel-container">
            <div class="carousel-item active" data-item="1">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/van_tyul.webp"
                    alt="Ben Niles Podcast">
            </div>
            <div class="carousel-item" data-item="2">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/nissan.webp"
                    alt="Ben Niles Podcast">
            </div>
            <div class="carousel-item" data-item="3">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/suzuki.webp"
                    alt="Ben Niles Podcast">
            </div>
            <div class="carousel-item" data-item="4">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/macon_warner.webp"
                    alt="Ben Niles Podcast">
            </div>
            <div class="carousel-item" data-item="5">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/greater.webp"
                    alt="Ben Niles Podcast">
            </div>
            <div class="carousel-item porsche" data-item="6">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/porsche.webp"
                    alt="Ben Niles Podcast">
            </div>
        </div>
    </div>
</section>
<section id="blog-anchor" class="d-flex blog bg-gray">
    <h2 class="heading-1">Blog</h2>
    <div id="blog-carousel" class="blog-carousel">
        <div class="d-flex carousel-container">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'post_status' => 'publish'
            );
            $blog_query = new WP_Query($args);
            $item_index = 1;

            if ($blog_query->have_posts()):
                while ($blog_query->have_posts()):
                    $blog_query->the_post();
                    $category = get_the_category();
                    $category_name = !empty($category) ? esc_html($category[0]->name) : 'UNCATEGORIZED';
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $active_class = ($item_index === 1) ? 'active' : '';
                    ?>
                    <article data-item="<?php echo $item_index; ?>" class="d-flex carousel-item <?php echo $active_class; ?>"
                        style="background-image: url('<?php echo esc_url($featured_image); ?>');">
                        <div class="d-flex article-heading">
                            <span class="article-category paragraph-2"><?php echo strtoupper($category_name); ?></span>
                            <h3 class="heading-2"><?php echo get_the_title(); ?></h3>
                        </div>
                        <div class="d-flex article-content">
                            <p class="paragraph-1 article-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </p>
                            <a href="<?php echo get_permalink(); ?>" class="btn btn-tertiary">Explore</a>
                        </div>
                    </article>
                    <?php
                    $item_index++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="carousel-indicators">
            <div class="d-flex arrows-container">
                <span class="arrow-back icon img-icon-38"><img
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/forward_arrow.svg"
                        alt=""></span>
                <span class="arrow-next icon img-icon-38"><img
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/forward_arrow.svg"
                        alt=""></span>
            </div>
            <div class="dots-container">
            </div>
        </div>
    </div>
</section>
<section id="latest-podcasts-anchor" class="d-flex latest-podcasts bg-black">
    <h2 class="heading-1">Latest Podcasts</h2>
    <iframe src="https://www.youtube.com/embed/2EbCJgmrh8o?si=Gr0hglcFKV6dLvTT" frameborder="0"></iframe>
    <div class="d-flex podcast-actions">
        <div class="current-video-info">
            <h3 class="heading-2">POWER UNDER CONTROL</h3>
            <p class="paragraph-1">EPISODE 1-SEASON 1</p>
        </div>
        <div class="d-flex actions-list">
            <p class="viewers-info paragraph-1">3.3K listeners</p>
            <a href="" class="btn btn-tertiary">BE A GUEST</a>
            <div class="d-flex streaming-platforms">
                <a href="#" class="d-flex paragraph-2 social-network-chip">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_spotify.svg"
                        alt="Spotify">
                    Spotify
                </a>
                <a href="#" class="d-flex paragraph-2 social-network-chip">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_apple.svg"
                        alt="Apple Podcasts">
                    Apple
                </a>
                <a href="#" class="d-flex paragraph-2 social-network-chip">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_youtube.svg"
                        alt="YouTube">
                    Youtube
                </a>
                <a href="#" class="d-flex paragraph-2 social-network-chip">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/icons_soundcloud.svg"
                        alt="SoundCloud">
                    Sound Clod
                </a>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray gallery">
    <h2 class="heading-1">Gallery</h2>
    <div id="gallery-carousel" class="gallery-carousel">
        <div class="d-flex carousel-container">
            <?php
            $gallery_args = array(
                'post_type' => 'gallery',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $gallery_query = new WP_Query($gallery_args);
            $gallery_index = 1;

            if ($gallery_query->have_posts()):
                while ($gallery_query->have_posts()):
                    $gallery_query->the_post();
                    $gallery_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $active_class = ($gallery_index === 1) ? 'active' : '';
                    ?>
                    <img class="carousel-item <?php echo $active_class; ?>" data-item="<?php echo $gallery_index; ?>"
                        src="<?php echo esc_url($gallery_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <?php
                    $gallery_index++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="d-flex carousel-indicators">
            <div class="d-flex arrows-container">
                <span class="arrow-back icon img-icon-38"><img
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/forward_arrow.svg"
                        alt=""></span>
                <span class="arrow-next icon img-icon-38"><img
                        src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/forward_arrow.svg"
                        alt=""></span>
            </div>
            <div class="d-flex dots-container">
                <?php
                $gallery_query->rewind_posts();
                $dot_index = 1;
                while ($gallery_query->have_posts()):
                    $gallery_query->the_post();
                    $active_dot = ($dot_index === 1) ? 'active' : '';
                    ?>
                    <div class="dot <?php echo $active_dot; ?>" data-index="<?php echo $dot_index; ?>"></div>
                    <?php
                    $dot_index++;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<footer id="contact-anchor" class=" d-flex bg-black contact">
    <div class="d-flex section-container">
        <h2 class="heading-1 ">Contact</h2>
        <h3 class="heading-3">What do you want to know, Ben will help you</h3>
        <?php echo do_shortcode('[contact-form-7 id="873edd4" title="Contact form 1"]'); ?>
        <!-- <form id="contact-form" action="" class="d-flex contact-form">
            <input type="text" name="name" class="fb-50" placeholder="Name:">
            <input type="text" name="nickname" class="fb-50" placeholder="Nick Name">
            <input type="number" name="phone" class="fb-50" placeholder="Phone Number:" inputmode="numeric">
            <input type="text" name="email" class="fb-50" placeholder="Email Address:">
            <textarea name="message" id="message" class="fb-100" placeholder="Message"></textarea>
            <div class="d-flex form-actions fb-100">
                <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                <button class="btn btn-secondary">SUBSCRIBE TO NEWSLETTER</button>
            </div>
        </form> -->
        <div class="d-flex footer-navigation">
            <div class="d-flex logo-footer">
                <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/bin-niles-grey-logo.svg"
                    alt="Ben Niles Podcast">
            </div>
            <div class="d-flex email-address">
                <h4 class="heading-4">Email</h4>
                <p class="paragraph-1"><a
                        href="mailto:<?php echo esc_attr(get_theme_mod('benmiles_email', 'benmilespodcast@gmail.com')); ?>"><?php echo esc_html(get_theme_mod('benmiles_email', 'benmilespodcast@gmail.com')); ?></a>
                </p>
                <h4 class="heading-4">Address</h4>
                <p class="paragraph-1">
                    <?php echo esc_html(get_theme_mod('benmiles_address', '2004 HARBOUR GATES DR APT 85 ANNAPOLIS MD 21401-5348 USA')); ?>
                </p>
            </div>
            <div class="d-flex">
                <h4 class="heading-4">Phone Number</h4>
                <p class="paragraph-1"><a
                        href="tel:<?php echo esc_attr(get_theme_mod('benmiles_phone', '+18005559473')); ?>"><?php echo esc_html(get_theme_mod('benmiles_phone', '+1 (800) 555-9473')); ?></a>
                </p>
            </div>
            <div class="d-flex footer-menu-container">
                <h4 class="heading-4">Explore</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'explore',
                    'container' => false,
                    'menu_class' => '',
                    'items_wrap' => '<ul role="navigation">%3$s</ul>',
                    'fallback_cb' => false
                ));
                ?>
            </div>
            <div class="d-flex footer-menu-container">
                <h4 class="heading-4">Resources</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'resources',
                    'container' => false,
                    'menu_class' => '',
                    'items_wrap' => '<ul role="navigation">%3$s</ul>',
                    'fallback_cb' => false
                ));
                ?>
            </div>
            <div class="d-flex about-podcast">
                <h4 class="heading-4">The Ben Miles Podcast</h4>
                <p class="paragraph-1">
                    Podcast and blog where passionate car enthusiasts share their stories of speed,
                    craftsmanship, and life on the road.
                </p>
                <div class="d-flex social-links-container">
                    <?php
                    // Get social media links from theme customizer
                    $facebook_url = get_theme_mod('benmiles_facebook', '#');
                    $spotify_url = get_theme_mod('benmiles_spotify', '#');
                    $instagram_url = get_theme_mod('benmiles_instagram', '#');
                    $twitter_url = get_theme_mod('benmiles_twitter', '#');
                    ?>
                    <?php if ($facebook_url): ?>
                        <a href="<?php echo esc_url($facebook_url); ?>" class="icon img-icon-54"><img
                                src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/facebook.svg"
                                alt="Facebook"></a>
                    <?php endif; ?>
                    <?php if ($spotify_url): ?>
                        <a href="<?php echo esc_url($spotify_url); ?>" class="icon img-icon-54"><img
                                src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/spotify.svg"
                                alt="Spotify"></a>
                    <?php endif; ?>
                    <?php if ($instagram_url): ?>
                        <a href="<?php echo esc_url($instagram_url); ?>" class="icon img-icon-54"><img
                                src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/instagram.svg"
                                alt="Instagram"></a>
                    <?php endif; ?>
                    <?php if ($twitter_url): ?>
                        <a href="<?php echo esc_url($twitter_url); ?>" class="icon img-icon-54"><img
                                src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/twitter.svg"
                                alt="Twitter"></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
<footer class=" d-flex bg-black contact">
    <h2 class="heading-1 ">Contact</h2>
    <h3 class="heading-3">What do you want to know, Ben will help you</h3>
    <form id="contact-form" action="" class="d-flex contact-form">
        <input type="text" name="name" class="fb-50" placeholder="Name:">
        <input type="text" name="nickname" class="fb-50" placeholder="Nick Name">
        <input type="number" name="phone" class="fb-50" placeholder="Phone Number:" inputmode="numeric">
        <input type="text" name="email" class="fb-50" placeholder="Email Address:">
        <textarea name="message" id="message" class="fb-100" placeholder="Message"></textarea>
        <div class="d-flex form-actions fb-100">
            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
            <button class="btn btn-secondary">SUBSCRIBE TO NEWSLETTER</button>
        </div>
    </form>
    <div class="d-flex footer-navigation">
        <div class="d-flex logo-footer">
            <img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/images/bin-niles-grey-logo.svg" alt="Ben Niles Podcast">
        </div>
        <div class="d-flex email-address">
            <h4 class="heading-4">Email</h4>
            <p class="paragraph-1"><a href="mailto:benmilespodcast@gmail.com">benmilespodcast@gmail.com</a></p>
            <h4 class="heading-4">Address</h4>
            <p class="paragraph-1">2004 HARBOUR GATES DR APT 85 ANNAPOLIS MD 21401-5348 USA</p>
        </div>
        <div class="d-flex">
            <h4 class="heading-4">Phone Number</h4>
            <p class="paragraph-1"><a href="tel:+18005559473">+1 (800) 555-9473</a></p>
        </div>
        <div class="d-flex">
            <h4 class="heading-4">Explore</h4>
            <ul role="navigation">
                <li><a class="paragraph-1" href="#banner">About Ben Miles</a></li>
                <li><a class="paragraph-1" href="#about">Our Blog</a></li>
                <li><a class="paragraph-1" href="#blog">Episodes</a></li>
                <li><a class="paragraph-1" href="#latest-podcasts">Reviews</a></li>
                <li><a class="paragraph-1" href="#gallery">Newsletter</a></li>
            </ul>
        </div>
        <div class="d-flex">
            <h4 class="heading-4">Resources</h4>
            <ul role="navigation">
                <li><a class="paragraph-1" href="#banner">Help Center</a></li>
                <li><a class="paragraph-1" href="#about">Be a Guest</a></li>
                <li><a class="paragraph-1" href="#blog">Contact Support</a></li>
            </ul>
        </div>
        <div class="d-flex">
            <h4 class="heading-4">The Ben Miles Podcast</h4>
            <p class="paragraph-1">
                Podcast and blog where passionate car enthusiasts share their stories of speed,
                craftsmanship, and life on the road.
            </p>
            <div class="d-flex social-links-container">
                <a href="#" class="icon img-icon-54"><img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/facebook.svg" alt="Facebook"></a>
                <a href="#" class="icon img-icon-54"><img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/spotify.svg" alt="Spotify"></a>
                <a href="#" class="icon img-icon-54"><img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/instagram.svg" alt="Instagram"></a>
                <a href="#" class="icon img-icon-54"><img src="<?php echo site_url(); ?>/wp-content/themes/benmiles/assets/icons/twitter.svg" alt="Twitter"></a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
<?php get_header(); ?>

<div class="page-container single-post-page">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('section-inner-container'); ?>>
                <header class="entry-header">
                    <div class="d-flex post-metadata">
                        <span class="post-author fw-bold">
                            <?php
                            $fullName = get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
                            echo $fullName;
                            ?>
                        </span>
                        <span class="post-date fw-bold"><?php the_date(); ?></span>
                    </div>
                    <h1 class="font-style-4 fw-bold"><?php the_title(); ?></h1>
                    <div class="post-excerpt fw-bold">
                        <?php the_excerpt(); ?>
                    </div>
                </header>

                <?php if (has_post_thumbnail()): ?>
                    <figure>
                        <?php the_post_thumbnail(); ?>
                        <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
                    </figure>
                <?php endif; ?>

                <section class="entry-content">
                    <?php the_content(); ?>
                </section>

                <footer class="entry-footer">
                    <?php
                    // Get the categories of the current post
                    $categories = wp_get_post_categories(get_the_ID());

                    if ($categories) {
                        $args = [
                            'category__in' => $categories,
                            'post__not_in' => [get_the_ID()],
                            'posts_per_page' => 1,
                        ];

                        $related_posts = new WP_Query($args);

                        if ($related_posts->have_posts()): ?>
                            <div class="related-posts">
                                <ul>
                                    <?php while ($related_posts->have_posts()):
                                        $related_posts->the_post(); ?>
                                        <li class="d-grid">
                                            <figure>
                                                <?php the_post_thumbnail(); ?>
                                                <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
                                            </figure>
                                            <div class="d-flex related-post-content">
                                                <a href="<?php the_permalink(); ?>" class="font-style-4 fw-bold">
                                                    <?php the_title(); ?>
                                                </a>
                                                <div class="related-post-excerpt">
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif;
                        wp_reset_postdata();
                    }
                    ?>

                    <div class="d-flex author-info">
                        <div class="author-avatar">
                            <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
                        </div>
                        <div class="author-name">
                            <span class="font-style-6 author-name fw-semi-bold">
                                <?php
                                $fullName = get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
                                echo $fullName;
                                ?>
                            </span>
                            <span
                                class="font-style-7 fw-medium author-description"><?php echo get_the_author_meta('description') ?></span>
                        </div>
                        <div class="font-style-7 author-email">
                            <span class="fw-bold">EMAIL:</span>
                            <span><?php echo get_the_author_meta('email'); ?></span>
                        </div>
                        <?php if (get_the_author_meta('phone')): ?>
                            <div class="font-style-7 author-phone">
                                <span class="fw-bold">PHONE:</span>
                                <span><?php echo get_the_author_meta('phone'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </footer>

            </article>
        <?php endwhile;
    endif; ?>
</div>
<?php get_footer(); ?>
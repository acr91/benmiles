<?php
/**
 * The template for displaying 404 pages
 *
 * @package Ben_Miles
 */

get_header(); ?>

<div class="container">
    <div class="site-content">
        <main id="main" class="content-area">
            <section class="error-404 not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php esc_html_e( 'Page Not Found', 'benmiles' ); ?></h1>
                </header>

                <div class="entry-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'benmiles' ); ?></p>

                    <?php get_search_form(); ?>
                </div>
            </section>
        </main>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>

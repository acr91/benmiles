<?php
/**
 * The template for displaying search results
 *
 * @package Ben_Miles
 */

get_header(); ?>

<div class="container">
    <div class="site-content">
        <main id="main" class="content-area">
            <?php if ( have_posts() ) : ?>

                <header class="entry-header">
                    <h1 class="entry-title">
                        <?php
                        printf(
                            esc_html__( 'Search Results for: %s', 'benmiles' ),
                            '<span>' . get_search_query() . '</span>'
                        );
                        ?>
                    </h1>
                </header>

                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'search' );
                endwhile;

                the_posts_navigation();

            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </main>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying archive pages
 *
 * @package Ben_Miles
 */

get_header(); ?>

<div class="container">
    <div class="site-content">
        <main id="main" class="content-area">
            <?php if ( have_posts() ) : ?>

                <header class="entry-header">
                    <?php
                    the_archive_title( '<h1 class="entry-title">', '</h1>' );
                    the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </header>

                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_format() );
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

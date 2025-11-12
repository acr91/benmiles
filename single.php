<?php
/**
 * The template for displaying single posts
 *
 * @package Ben_Miles
 */

get_header(); ?>

<div class="container">
    <div class="site-content">
        <main id="main" class="content-area">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'single' );

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'benmiles' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'benmiles' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile;
            ?>
        </main>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages.
 * Template Name: About template
 * @package RED_Starter_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
                
                    <header class="about-header">
                        <div class = "title-container">
                        <?php the_title( '<h1 class="about-title">', '</h1>' ); ?>
                        </div>
                    </header><!-- .entry-header -->

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2>Our Story</h2>
                        <p><?php echo CFS()->get( 'our_story' ); ?></p>
                        <h2>Our Team</h2>
                        <p><?php echo CFS()->get( 'our_team' ); ?></p>
                    </article>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
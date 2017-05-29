<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class= "product-container">
            <!--<div class= "prodcut-post">-->
                <div class= "product-thumbnail">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                </div>
                <div class= "product-info">
                    <?php endif; ?>
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    <p>$<?php echo get_post_meta($post->ID, 'price', true); ?></p>
                    <?php if ( 'post' === get_post_type() ) : ?>
                    <?php endif; ?>
                </div>    
            <!--</div>-->
        </div>
    </header><!-- .entry-header -->
</article><!-- #post-## -->
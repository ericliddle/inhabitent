<?php
/**Tample for displaying the pdocut post type arvhice page
*
*
*@package Inhabitent_Theme
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="journal-page">
				
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
<div class= "journal-header">
  <?php $product_types = get_terms(array (
                'taxonomy' => 'product-type',
                'hide_empty'=>false,
            
            )); 
            if( !empty($product_types) && !is_wp_error($product_type)) : ?>
                <?php foreach ( $product_types as $product_type ) : ?>

                    <div class = "tax-link">
                        <a class="shop-links" href="<?php echo get_term_link($product_type)?>">
							<?php echo $product_type->name?></a>
							
		
                    </div>

                    <?php endforeach; ?>
                <?php endif; ?>
</div>
			</header><!-- .page-header -->

			<!--<?php /* Start the Loop */ ?>-->

		<div class= "article-container">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/archive-product-content' );
					
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/archive-product-content', 'none' ); ?>

			<?php endif; ?>
		</div>	
		</main><!-- #main -->
	</div><!-- #primary -->


<!--Rest of the page markup and php here-->

<?php get_footer(); ?>
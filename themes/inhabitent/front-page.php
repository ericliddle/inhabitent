    <?php
    /**
    * The home page template file
    *
    * @package RED_Starter_Theme
    */    
        
    get_header(); ?>


    <div class = "hero-banner">
        <img src=<?php echo get_template_directory_uri() . "/images/inhabitent-logo-full.svg" ?> alt="">
    </div>

    <div class = "shop-stuff">
        <h1>SHOP STUFF</h1>    
        <div class = "shop-stuff-items">


            <?php $product_types = get_terms(array (
                'taxonomy' => 'product-type',
                'hide_empty'=>false,
            
            )); 
            if( !empty($product_types) && !is_wp_error($product_type)) : ?>
                <?php foreach ( $product_types as $product_type ) : ?>

                    <div class = "shop-stuff-wrapper">
                        <?php $img_product_type = get_template_directory_uri() . '/images/' . $product_type->name . '.svg' ?>
                        <img src="<?php echo $img_product_type;?>">
                        <p><?php echo $product_type->description; ?></p>
                        <a href="<?php echo get_term_link($product_type)?>">
                            <?php echo $product_type->name; echo " STUFF" ?></a>
                    </div>

                    <?php endforeach; ?>
                <?php endif; ?>

        </div>
    </div>
        
    <div class = "journal">
        <h1>INHABITENT JOURNAL</h1>
    </div>
    <div class = "journal-posts">   
    <!-- Journal -->
        <?php  
            $args = array(
                'order' => 'DESC',
                'posts_per_page' => 3,
            //    'post_type' => 'product',
            );
            $products = new WP_Query( $args );
        ?>


        <?php $products = new WP_Query( $args ); /* $args set above*/ ?>
        <?php if ( $products->have_posts() ) : ?>
        <?php while ( $products->have_posts() ) : $products->the_post(); ?>
    <div class = "post-list-item">   
        <div class = "thumb-image"><?php the_post_thumbnail(array(356));?></div>
        <p class = "time-date"><?php the_time('F jS, Y'); ?> / 
        <?php comments_popup_link('0 Comments', '1 Comment', '% Comments');?></p>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></h3>
        <a href="<?php the_permalink(); ?>">Read Entry</a></div>  

        <?php endwhile; ?>
        <?php the_posts_navigation(); ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <h2>Nothing found!</h2>
        <?php endif; ?>
    </div>    
    </div> <!--Journal-posts-->

        <div class = "adventures">
            <h1>LATEST ADVENTURES</h1>
        </div>

            <?php get_footer();?>
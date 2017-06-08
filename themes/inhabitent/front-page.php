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
    <div class="post-list-item">   
        <div class="thumb-image">
            <?php the_post_thumbnail(array(356));?>
        </div>
            <span class="time-date">
                <p><?php the_time('F jS, Y'); ?> / 
                <?php comments_popup_link('0 Comments', '1 Comment', '% Comments');?></p>
            </span>
            <div class="journal-links">
                <h3><a href=""><?php the_title();?></a></h3>
            </div>
            <div class="journal-button">   
                <a href="<?php the_permalink(); ?>">Read Entry</a>
            </div>
            
        </div>  

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
        <div class="adventures-container">
        <ul class="adventure-container-left">
            <li class="nature"><div class="story-wrapper"><h3>  <a href="">Getting Back to Nature in a Canoe</a></h3><a id="adventures-button" href="">READ MORE</a></li>
        </ul>
        <ul class="adventure-container-right">
            <li class="night"><h3><a href="">A Night with Friends at the Beach</a></h3><a id="adventures-button" href="">READ MORE</a></li>
            <li class="view"><h3><a href="">Taking in the View at Big Mountain</a></h3><a id="adventures-button" href="">READ MORE</a></li>
            <li class="sky"><h3><a href="">Star-Gazing at the Night Sky</a></h3><a id="adventures-button" href="">READ MORE</a></li>
        </ul>
        </div>
        <div class="adventures-end">
            <a href="">More Adventures</a>
        </div>
            <?php get_footer();?>
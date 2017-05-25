    <?php get_header(); ?>

    <div class = "hero container">
    </div>
    <div class = "hero-banner">
    <img src=<?php echo get_template_directory_uri() . "/images/inhabitent-logo-full.svg" ?> alt="">
    </div>
    <div class = "shop">
        <h1>SHOP STUFF</h1>    
        <div class = "shop-items">
            <div class = "do wrapper">
                <img src=<?php echo get_template_directory_uri() . "/images/do.svg" ?> alt"">
                <p><?php echo "Get back to nature with all the tools and toys you need to enjoy the great outdoors." ?></p>
                <p><a href="#"><?php echo "DO STUFF" ?></a></p>
            </div>
            <div class = "eat wrapper">
                <img src=<?php echo get_template_directory_uri() . "/images/eat.svg" ?> alt"">
                <p><?php echo "Nothing beats food cooked over a fire.  We have all you need for good camping eats." ?></p>
                <p><a href="#"><?php echo "EAT STUFF" ?></a></p>
            </div>
            <div class = "sleep wrapper">
                <img src=<?php echo get_template_directory_uri() . "/images/sleep.svg" ?> alt"">
                <p><?php echo "Get a good night's rest in the wild in ahome away from home that travels well." ?></p>
                <p><a href="#"><?php echo "SLEEP STUFF" ?></a></p>
            </div>
            <div class = "wear wrapper">
                <img src=<?php echo get_template_directory_uri() . "/images/wear.svg" ?> alt"">
                <p><?php echo "From flannel shirts to toques, look the part while roughing it in the great outdoors." ?></p>
                <p><a href="#"><?php echo "WEAR STUFF" ?></a></p>
            </div>
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
    <h3><a href="#"><?php the_title();?></h3>
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


 <!--<div class = "featured">
        <?php
        query_posts('posts_per_page=3');
        if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class = "journal-posts">
            <img src=<?php echo the_post_thumbnail_url(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <p><a href="<?php the_permalink(); ?>">Read Entry</a></p>            
            </div>
        <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
        </div>
    </div>-->

    <!-- Keeping for later...maybe-->
     <!--<h1><?php the_title(); ?></h1>-->
      <!--<?php the_content(); ?>-->
      <!--<?php the_excerpt();?>-->


    <div class = "adventures">
        <h1>LATEST ADVENTURES</h1>
    </div>


    <?php $product_types = get_terms(array (
        'taxonomoy' => 'proudct_type',
        'hide_empty'=>false
    )); 
    

    
if( !empty($product_types) && !is_wp_error($product_type)) : ?>
    <?php foreach ( $product_types as $product_type ) : ?>

    <pre><?php print_r ($product_type); ?></pre>
    <?php echo $product_type->description; ?>
    <a href="<?php echo get_term_link($product_type);?>">
    <h3><?php echo $proudct_type->name;?> </h3>
    </a>
    <?php endforeach; ?>
    <?php endif; ?>



        <?php get_footer(); ?>
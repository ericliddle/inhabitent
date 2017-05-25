<!-- Journal -->
    <?php  
    $args = array(
    'order' => 'ASC',
    'post_type' => 'product',
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
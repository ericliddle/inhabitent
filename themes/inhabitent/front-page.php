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
    <div class = "featured">
        <?php
        query_posts('posts_per_page=3');
        if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <img src=<?php echo the_post_thumbnail_url(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <p><a href="<?php the_permalink(); ?>">Read Entry</a></p>
        <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
    </div>

<!-- Products -->
<?php
$args = array(
   'order' => 'ASC',
   'posts_per_page' => 8,
//    'post_type' => 'product',
);
$products = new WP_Query( $args );
?>

<?php $products = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>
<ul class ="home posts">
<li><?php the_post_thumbnail(); ?></li>
<li><?php the_time('F jS, Y'); ?> / <?php comments_popup_link('0 Comments', '1 Comment', '% Comments');?></li>
      <li><h3><?php the_title(); ?></h3></li>
      <li><a class="read-more" href="<?php the_permalink(); ?>">Read Entry</a></li>
    </ul>

      <!--<h1><?php the_title(); ?></h1>-->
      <!--<?php the_content(); ?>-->
      <?php the_excerpt();?>
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>


    <div class = "adventures">
        <h1>LATEST ADVENTURES</h1>
    </div>

        <?php get_footer();?>



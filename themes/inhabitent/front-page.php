<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=<?php echo get_template_directory_uri() . '/build/css/style.min.css' ?> rel="stylesheet">
    <title>Inhabitent - Just Another Hipster Camping Gear Site</title>
</head>
<body>
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
    <div class = "adventures">
        <h1>LATEST ADVENTURES</h1>
    </div>
</body>
</html>


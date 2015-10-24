<?php
/**
 * Created by PhpStorm.
 * User: PATRIOT
 * Date: 20.04.2015
 * Time: 14:24
 */ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include("system/nav_menu.php") ?>
<head>
    <meta content="charset=utf-8">
    <title>FlexSlider Demo</title>

    <!-- FlexSlider pieces -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="jquery.flexslider-min.js"></script>

    <!-- Includes for this demo -->
    <link rel="stylesheet" href="demo-stuff/demo.css" type="text/css" media="screen" />

    <!-- Hook up the FlexSlider -->
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider();
        });
    </script>
</head>
</head>
<body>
<div class="wrapper">
    <h1>Photografer Sergio Seredyuk</h1>
    <div id="container">

        <!--=============================
        Markup for FADE animation
        =================================-->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/childrens/inacup_donut.jpg" />
                    <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
                </li>
                <li>
                    <a href="http://flex.madebymufffin.com"><img src="images/childrens/inacup_pumpkin.jpg" /></a>
                    <p class="flex-caption">This image is wrapped in a link!</p>
                </li>
                <li>
                    <img src="images/childrens/inacup_donut.jpg" />
                </li>
                <li>
                    <img src="images/childrens/inacup_vanilla.jpg" />
                </li>
            </ul>

        </div>

</div>


</body>
</html>

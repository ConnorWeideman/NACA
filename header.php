<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="CM Freelancing">
    <link rel="icon" href="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/A-3.jpg">
    <?php if(is_page('primary-school')):?>
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <?php endif?>
    <title>NACA</title>
    <?php wp_head()?>
</head>

<body>
    <nav>
        <a href="<?php bloginfo('wpurl')?>">
            <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/A-3.jpg">
        </a>
        <ul>
            <li>
                <a href="<?php bloginfo('wpurl')?>/">Home</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/primary-school">Primary School</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/high-school">High School</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/impacts">Impacts</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/quiz">Quiz</a>
            </li>
            <li>
                <a href="http://www.naca.org.za/">NACA Official</a>
            </li>
        </ul>
        <a id="expand">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </a>
    </nav>
    <header>
        <img src="<?php echo get_the_post_thumbnail_url();?>">
        <div id="lower">
            <h1>
                <?php if(is_front_page()):?>
                National Association for Clean Air
                <?php elseif (is_page("high-school")):?>
                The Atmosphere
                <?php elseif (is_page("primary-school")):?>
                Air Pollution
                <?php else: echo the_title();endif?>
            </h1>
            <div id="background"></div>
        </div>
    </header>
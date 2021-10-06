<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
    // ENQUEUE your css and js in inc/enqueues.php
    wp_head();
    ?>
</head>
<body <?php echo body_class(); ?>>
<div class="container-fluid">
    <header id="header" role="banner">
    <nav class="navbar navbar-expand-lg">
        <span class="logo">Courtéchelle</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            <span></span>
            <span></span>
            <span></span>
        </button>
        <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ,
                                    'container' => 'div',
                                    'depth' => 3,
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id'    => 'navbarSupportedContent',
                                    'menu_class' =>'navbar-nav ml-auto',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                    'add_li_class'  => 'nav-item',
            ) ); ?>

    </nav>
    </header>

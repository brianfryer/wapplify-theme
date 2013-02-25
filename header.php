<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <title><?php the_title_attribute() ?> &ndash; <?php bloginfo('name'); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/img/favicon.ico" />

    <!-- BEGIN wp_head() output -->
    <?php wp_head(); ?>
    <!-- END wp_head() output -->

</head>
<body <?php body_class($class); ?>>

    <div class="header-container">
        <header class="wrapper">
            <h1>
                <strong id="logo"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></strong>
                <small> <?php bloginfo('description'); ?></small>
            </h1>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'login-menu',
                'container'      => 'nav',
                'container_id'   => 'login',
                'menu_class'     => 'menu',
                'menu_id'        => FALSE,
            ));
            ?>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-nav',
                'container'      => 'nav',
                'container_id'   => 'primary',
                'menu_class'     => 'menu',
                'menu_id'        => FALSE,
            ));
            ?>
            <hr />
            <?php
            wp_nav_menu(array(
                'theme_location' => 'social-media',
                'container'      => 'nav',
                'container_id'   => 'social-media',
                'menu_class'     => 'menu',
                'menu_id'        => FALSE,
            ));
            ?>
        </header>
    </div><!-- .header-container -->
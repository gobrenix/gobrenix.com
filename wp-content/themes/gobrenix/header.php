<?php
/**
* The template for displaying the head,
* contains the starting application div element
* and the HTML head.
*
* @author jbiasi <biasijan@gmail.com>
* @package gobrenix
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?= get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="application">
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle"><?php _e( 'Primary Menu', '_mbbasetheme' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
        </header>
        <div class="content">

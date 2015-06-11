<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gobrenix
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="gobrenix,psr,goa,psychadelic,psytrance,trance,proggy,progressive,switzerland,goalabel,party,fun,events">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('-', true, 'right'); ?></title>
	<link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/assets/img/schabe-trans.png">
	<link rel="apple-touch-icon" href="<?= get_stylesheet_directory_uri(); ?>/assets/img/blue-logo.png">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
	<main>

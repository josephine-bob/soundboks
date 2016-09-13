<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soundboks
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding" id="top-bar">
                    <div id="sb-logo">
                        <img src="http://localhost/mysite/wp-content/themes/soundboks_case/images/soundboks-black.png" alt="soundboks logo">
                    </div>
                
                    <div id="menu-bar">
                        <div id="location-menu">
                            <ul id="location-items">
                                <li class="menu-item"><a>US</a></li>
                                <li class="menu-item"><a class="selected-item">EUROPE</a></li>
                            </ul>
                        </div>

                        <div id="pages-menu">
                            <ul id="pages-items">
                                <li class="menu-item"><a href="index.php" class="selected-item">SPEAKER</a></li>
                                <li class="menu-item"><a href="index.php">SHOP</a></li>
                                <li class="menu-item"><a href="index.php">SUPPORT</a></li>
                            </ul>

                        </div>
                        <div id="cart-logo">
                            <div id="full-cart"></div>
                            <img src="http://localhost/mysite/wp-content/themes/soundboks_case/images/cart-full-black.png" alt="cart logo">
                        </div>
                    </div>
                    
                </div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

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
                    <div class="mobile-part not-desktop">
                        <img src="<?php bloginfo('template_directory'); ?>/images/toggle-menu-icon.png" alt="mobile menu">
                    </div>
                    <div class="sb-logo mobile-part">
                        <img src="<?php bloginfo('template_directory'); ?>/images/soundboks-black.png" alt="soundboks logo">
                    </div>
                
                    <div class="menu-bar">
                        <div class="location-menu">
                            <ul class="location-items">
                                <li class="menu-item"><a>US</a></li>
                                <li class="menu-item"><a class="selected-item">EUROPE</a></li>
                            </ul>
                        </div>

                        <div class="pages-menu">
                            <ul class="pages-items">
                                <li class="menu-item"><a href="index.php" class="selected-item">SPEAKER</a></li>
                                <li class="menu-item"><a href="index.php">SHOP</a></li>
                                <li class="menu-item"><a href="index.php">SUPPORT</a></li>
                            </ul>

                        </div>
                        <div id="cart-logo" class="mobile-part">
                            <div id="full-cart"></div>
                            <img src="<?php bloginfo('template_directory'); ?>/images/cart-full-black.png" alt="cart logo">
                        </div>
                    </div>
                    
                </div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

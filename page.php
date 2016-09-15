<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soundboks
 */

get_header(); ?>

	<div id="primary" class="content-area">
            <div id="top-bar-cart">
                <div id="cart-icon">
                    <img src="<?php bloginfo('template_directory'); ?>/images/big-cart-icon.png" alt="cart icon">
                    <div id="cart-word">CART</div>
                </div>
                <div id="delivery-info" class="not-mobile">
                    <div class="one-delivery-info">
                        <img src="<?php bloginfo('template_directory'); ?>/images/return-icon.png" alt="return icon">
                        <div class="small-info">30 DAYS RETURN</div>
                    </div>
                    <div class="one-delivery-info">
                        <img src="<?php bloginfo('template_directory'); ?>/images/materials.png" alt="materials">
                        <div class="small-info">2 YEARS WARRANTY</div>
                    </div>
                    <div class="one-delivery-info">
                        <img src="<?php bloginfo('template_directory'); ?>/images/shipping-icon.png" alt="shipping icon">
                        <div class="small-info">WORLDWIDE <br/> 
                            INSTANT SHIPPING</div>
                    </div>
                </div>
            </div>
            
            <div class="gray-line"></div>
            
            <div id="products-in-cart">
                <div class="product-in-cart margin-needed">
                    <div class="image-product">
                        <img src="<?php bloginfo('template_directory'); ?>/images/4.png" alt="soundboks">
                    </div>
                    <div class="product-column">
                        <div class="title-product">SOUNDBOKS PEAKER SYSTEM</div>
                        <div class="description-product">Two BATTERYBOKS, AUX cable, 220V <br/>
                            charge.</div>
                        <div class="description-product">Shipping: 2-3 days.</div>
                    </div>
                    <div class="product-column">
                        €699.00
                    </div>
                    <div class="product-column quantity-product">
                        <img src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.png" alt="plus one">
                        3
                        <img class="rotate-image" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.png" alt="minus one">
                    </div>
                    <div class="product-column">
                        €2,796.00
                    </div>
                    <div class="product-column">
                        <img src="<?php bloginfo('template_directory'); ?>/images/delete.png" alt="delete">
                    </div>
                </div>
                    <div class="gray-line"></div>
                <div class="product-in-cart margin-needed">
                    <div class="image-product">
                        <img src="<?php bloginfo('template_directory'); ?>/images/4.png" alt="soundboks">
                    </div>
                    <div class="product-column">
                        <div class="title-product">SOUNDBOKS PEAKER SYSTEM</div>
                        <div class="description-product">Two BATTERYBOKS, AUX cable, 220V <br/>
                            charge.</div>
                        <div class="description-product">Shipping: 2-3 days.</div>
                    </div>
                    <div class="product-column">
                        €699.00
                    </div>
                    <div class="product-column quantity-product">
                        <img src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.png" alt="plus one">
                        3
                        <img class="rotate-image" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.png" alt="minus one">
                    </div>
                    <div class="product-column">
                        €2,796.00
                    </div>
                    <div class="product-column">
                        <img src="<?php bloginfo('template_directory'); ?>/images/delete.png" alt="delete">
                    </div>
                </div>
            </div>
            
            <div class="gray-line"></div>
            
	</div><!-- #primary -->

<?php

get_footer();

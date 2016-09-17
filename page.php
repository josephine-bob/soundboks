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
            <div id="top-bar-cart" class="flex-between">
                <div id="cart-icon" class="flex-between">
                    <img src="<?php bloginfo('template_directory'); ?>/images/big-cart-icon.svg" alt="cart icon">
                    <div id="cart-word">CART</div>
                </div>
                <div id="delivery-info" class="not-mobile flex-between">
                    <div class="one-delivery-info flex-between">
                        <img src="<?php bloginfo('template_directory'); ?>/images/return-icon.png" alt="return icon">
                        <div class="small-info">30 DAYS RETURN</div>
                    </div>
                    <div class="one-delivery-info flex-between">
                        <img src="<?php bloginfo('template_directory'); ?>/images/materials.png" alt="materials">
                        <div class="small-info">2 YEARS WARRANTY</div>
                    </div>
                    <div class="one-delivery-info flex-between">
                        <img src="<?php bloginfo('template_directory'); ?>/images/shipping-icon.png" alt="shipping icon">
                        <div class="small-info">WORLDWIDE <br/> 
                            INSTANT SHIPPING</div>
                    </div>
                </div>
            </div>
            
            <div class="gray-line"></div>
            
            <div id="products-in-cart">
                <div class="product-in-cart margin-needed flex-between">
                    <div class="image-product">
                        <img src="<?php bloginfo('template_directory'); ?>/images/4.png" alt="soundboks">
                        
                    </div>
                    <div class="product-column">
                        <div class="title-product">SOUNDBOKS PEAKER SYSTEM</div>
                        <div class="description-product">
                            Two BATTERYBOKS, AUX cable, 220V
                            charge.
                            <span class="not-desktop">Shipping: 2-3 days.</span></div>
                        <div class="description-product not-mobile">Shipping: 2-3 days.</div>
                    </div>
                    <div class="product-column price-info not-mobile">
                        €699.00
                    </div>
                    <div class="product-column quantity-product not-mobile price-info">
                        <img src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="plus one">
                        3
                        <img class="rotate-image180" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="minus one">
                    </div>
                    <div class="product-column not-mobile price-info">
                        €2,796.00
                    </div>
                    <div class="cross-product product-column">
                        <img src="<?php bloginfo('template_directory'); ?>/images/delete.png" alt="delete">
                    </div>
                </div>
                <div class="price-mobile not-desktop">
                    <div class="quantity-mobile">
                        <img class="rotate-image90" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="plus one">
                        <div class="quantity">3</div>
                        <img class="rotate-image270" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="minus one">
                    </div>
                    <div class="product-column">    
                        €699.00
                    </div>
                    <div class="product-column">
                        TOTAL €2,796.00
                    </div>
                </div>
                    <div class="gray-line"></div>
                <div class="product-in-cart margin-needed flex-between">
                    <div class="image-product">
                        <img src="<?php bloginfo('template_directory'); ?>/images/4.png" alt="soundboks">
                        
                    </div>
                    <div class="product-column">
                        <div class="title-product">SOUNDBOKS PEAKER SYSTEM</div>
                        <div class="description-product">
                            Two BATTERYBOKS, AUX cable, 220V
                            charge.
                            <span class="not-desktop">Shipping: 2-3 days.</span></div>
                        <div class="description-product not-mobile">Shipping: 2-3 days.</div>
                    </div>
                    <div class="product-column price-info not-mobile">
                        €699.00
                    </div>
                    <div class="product-column quantity-product not-mobile price-info">
                        <img src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="plus one">
                        3
                        <img class="rotate-image180" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="minus one">
                    </div>
                    <div class="product-column not-mobile price-info">
                        €2,796.00
                    </div>
                    <div class="cross-product product-column">
                        <img src="<?php bloginfo('template_directory'); ?>/images/delete.png" alt="delete">
                    </div>
                </div>
                <div class="price-mobile not-desktop">
                    <div class="quantity-mobile">
                        <img class="rotate-image90" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="plus one">
                        <div class="quantity">3</div>
                        <img class="rotate-image270" src="<?php bloginfo('template_directory'); ?>/images/rectangle-95.svg" alt="minus one">
                    </div>
                    <div class="product-column">    
                        €699.00
                    </div>
                    <div class="product-column">
                        TOTAL €2,796.00
                    </div>
                </div>
            </div>
            
            <div class="gray-line"></div>
            
            <div id="order-info" class="flex-between">
                <div id="discount-column">
                    <form id="discount-form">
                        <input type="text" name="discount" id="discount-input" placeholder="DISCOUNT CODE">
                        <input type="submit" name="submit" id="submit-discount" value="APPLY DISCOUNT">
                    </form>
                    <div class="discount-code flex-between">
                        <div class="green-circle"></div>
                        <div>
                            <span class="code-ex">SBJULY16</span>: $200 discount for purchase of a SOUNDBOKS <br/>
                                or other related products above $600
                        </div>
                    </div>
                    <div class="discount-code flex-between not-mobile">
                        <div class="green-circle"></div>
                        <div>
                            <span class="code-ex">SBJULY16</span>: $200 discount for purchase of a SOUNDBOKS <br/>
                                or other related products above $600
                        </div>
                    </div>
                </div>
                <div id="price-column">
                    <div class="price-line flex-between">
                        <div>
                            TOTAL
                        </div>
                        <div>
                            $18,997.00
                        </div>
                    </div>
                    <div class="price-line flex-between">
                        <div>
                            APPLIED DISCOUNT
                        </div>
                        <div>
                            -$3,459.00
                        </div>
                    </div>
                    <div class="price-line flex-between">
                        <div>
                            ORDER SUBTOTAL
                        </div>
                        <div>
                            $17,997.00
                        </div>
                    </div>
                    <div id="update-price" class="flex-between">
                        <div class="flex-between">
                            <div class="align-center">
                                <img src="<?php bloginfo('template_directory'); ?>/images/update-icon.svg" alt="round arrows">
                            </div>
                            <div id="update-cart" class="align-center">UPDATE CART</div>
                        </div>
                        <div id="checkout" class="align-center">CHECKOUT</div>
                    </div>
                    <div id="vat-price" class="payment-feature">INCl. 15% VAT 230,- DKK</div>
                    <div class="gray-line not-desktop"></div>
                    <div id="pay-per-month" class="payment-feature">
                        <div id="pay-little">PAY AS LITTLE AS $25/MONTH</div>
                        <div id="apply-check">Apply & check out in seconds</div>
                        <div id="learn-more">Learn More</div>
                    </div>
                </div>
            </div>
            
            <div class="gray-line not-mobile"></div>
            
            <div id="interested" class="not-mobile">
                YOU MIGHT ALSO BE INTERESTED IN...
            </div>
            
            <div id="interested-items" class="not-mobile">
                <div class="line-proposed-product">
                    <div class="proposed-item flex-between">
                        <div class="image-product">
                            <img src="<?php bloginfo('template_directory'); ?>/images/item-img.png" alt="microphone">
                        </div>
                        <div class="product-column">
                            <div>
                                <div class="title-product">NUCLEAR PACKAGE</div>
                                <div class="description-product">
                                    Charge your phone up to 6 <br/>
                                    times on a single charge.
                                </div>
                            </div>
                            <div class="price-info">$1,340</div>
                            <div>
                                <div class="pay-product">PAY FROM €30/MONTH</div>
                                <div class="klarna">read about Klarna</div>
                            </div>
                        </div>
                    </div>
                    <div class="proposed-item flex-between">
                        <div class="image-product">
                            <img src="<?php bloginfo('template_directory'); ?>/images/item-img.png" alt="microphone">
                        </div>
                        <div class="product-column">
                            <div>
                                <div class="title-product">NUCLEAR PACKAGE</div>
                                <div class="description-product">
                                    Charge your phone up to 6 <br/>
                                    times on a single charge.
                                </div>
                            </div>
                            <div class="price-info">$1,340</div>
                            <div>
                                <div class="pay-product">PAY FROM €30/MONTH</div>
                                <div class="klarna">read about Klarna</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-proposed-product">
                    <div class="proposed-item flex-between">
                        <div class="image-product">
                            <img src="<?php bloginfo('template_directory'); ?>/images/item-img.png" alt="microphone">
                        </div>
                        <div class="product-column">
                            <div>
                                <div class="title-product">NUCLEAR PACKAGE</div>
                                <div class="description-product">
                                    Charge your phone up to 6 <br/>
                                    times on a single charge.
                                </div>
                            </div>
                            <div class="price-info">$1,340</div>
                            <div>
                                <div class="pay-product">PAY FROM €30/MONTH</div>
                                <div class="klarna">read about Klarna</div>
                            </div>
                        </div>
                    </div>
                    <div class="proposed-item flex-between">
                        <div class="image-product">
                            <img src="<?php bloginfo('template_directory'); ?>/images/item-img.png" alt="microphone">
                        </div>
                        <div class="product-column">
                            <div>
                                <div class="title-product">NUCLEAR PACKAGE</div>
                                <div class="description-product">
                                    Charge your phone up to 6 <br/>
                                    times on a single charge.
                                </div>
                            </div>
                            <div class="price-info">$1,340</div>
                            <div>
                                <div class="pay-product">PAY FROM €30/MONTH</div>
                                <div class="klarna">read about Klarna</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gray-line"></div>
            
	</div><!-- #primary -->

<?php

get_footer();

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soundboks
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <div id="footer-content">
                <div id="bottom-menu" class="margin-needed">
                    <div class="sb-logo not-mobile">
                        <img src="<?php bloginfo('template_directory'); ?>/images/soundboks-black.png" alt="soundboks logo">
                    </div>    
                    <div class="menu-bar">
                        <div id="pages-menu-footer">
                            <ul class="pages-items">
                                <li class="menu-item not-desktop"><a href="index.php">SOUNDBOKS</a></li>
                                <li class="menu-item not-desktop"><a href="index.php">ACCESSORIES</a></li>
                                <li class="menu-item not-desktop"><a href="index.php">FAQ</a></li>
                                <li class="menu-item"><a href="index.php">SHOP</a></li>
                                <li class="menu-item"><a href="index.php">SUPPORT</a></li>
                                <li class="menu-item"><a href="index.php">CONTACT</a></li>
                                <li class="menu-item"><a href="index.php">ABOUT</a></li>
                                <li class="menu-item"><a href="index.php">PRESS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="other-options" class="margin-needed">
                    <div id="left-column-footer" class="not-mobile">
                        <div id="sign-up">
                            GET LATEST NEWS AND OFFERS
                        </div>

                        <form id="email-form">
                            <input type="text" name="email" id="email-input" placeholder="YOUR EMAIL">
                            <input type="submit" name="submit" id="submit-button" value="SUBSCRIBE">
                        </form>
                    </div>

                    <div id="right-column-footer">
                        <div id="some-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook">
                            <img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="instagram">
                            <img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter">
                        </div>
                        <div class="payment-logo">
                            <img srcset="<?php bloginfo('template_directory'); ?>/images/payments-checkouts.png 1x, <?php bloginfo('template_directory'); ?>/images/payments-checkouts@2x.png 2x, <?php bloginfo('template_directory'); ?>/images/payments-checkouts@3x.png 3x" alt="payments methodes">
                        </div>
                    </div>
                </div>

                <div id="address" class="margin-needed not-mobile">
                    1298 Cuernavaca Circulo <br/>
                    94040 Mountain View, California, USA
                </div>
                <div id="legal-info" class="margin-needed not-mobile">
                    <div id="copyright">
                        © 2016 SOUNDBOKS, Inc.
                    </div>    
                    <div id="cookies">
                            By continuing to use our website you agree to the use of cookies as described in the<span id="policy"> Privacy Policy</span>
                    </div>
                </div>
            </div>
            
            <div id="love-banner" class="not-mobile">
                <div id="love-message">MADE WITH LOVE AND LOUD MUSIC IN COPENHAGEN</div>
            </div>
            
            <div id="delivery-info-footer" class="not-desktop">
                <div class="one-delivery-info">
                    <img src="<?php bloginfo('template_directory'); ?>/images/return-icon.png" alt="return icon">
                    <div class="small-info">30 DAYS <br/>
                        RETURN</div>
                </div>
                <div class="one-delivery-info">
                    <img src="<?php bloginfo('template_directory'); ?>/images/materials.png" alt="materials">
                    <div class="small-info">2 YEARS <br/>
                        WARRANTY</div>
                </div>
                <div class="one-delivery-info">
                    <img src="<?php bloginfo('template_directory'); ?>/images/shipping-icon.png" alt="shipping icon">
                    <div class="small-info">WORLDWIDE <br/> 
                        INSTANT SHIPPING</div>
                </div>
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

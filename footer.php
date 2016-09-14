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
                <div id="bottom-menu">
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

                <div id="other-options">
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
                        <div id="payment-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/images/payments-checkouts.png" alt="payments methodes">
                        </div>
                    </div>
                </div>

                <div id="address" class="not-mobile">
                    1298 Cuernavaca Circulo <br/>
                    94040 Mountain View, California, USA
                </div>
                <div id="legal-info" class="not-mobile">
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
            
            <div id="conditions" class="not-desktop">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/return-icon.png" alt="return icon">
                    <img src="<?php bloginfo('template_directory'); ?>/images/extreme-volume-copy.png" alt="30 days return">
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/materials.png" alt="materials">
                    <img src="<?php bloginfo('template_directory'); ?>/images/design-copy.png" alt="2 years warranty">
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/shipping-icon.png" alt="plane">
                    <img src="<?php bloginfo('template_directory'); ?>/images/battery-copy.png" alt="worldwide shipping">
                </div>
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

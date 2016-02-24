<?php
/**
 * The template for displaying the footer.
 *
 * @package Sundance
 * @subpackage Sundance
 * @since Sundance 2.0
 */
?>
	</div>
</div>
<!-- Template for Dealer Pages results footer -->

<!-- Header / Top Menu stuff -->
<div class="hd">
    <div class="wrap">
        <div class="logo">
            <h1><a href="<?php bloginfo('url'); ?>">Sundance Spas&reg;</a></h1>
        </div>
        <?php /*wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'topMenu', 'theme_location' => 'topres' ) ); ?>
        <?php get_template_part( 'block', 'mainmenu' );*/ ?>
        <ul class="toplist">
            <li class="listborder"><a href="<?php bloginfo('url'); ?>/request-literature/">Free Brochure</a></li>
            <li><a href="<?php bloginfo('url'); ?>/hot-tub-dealer-locator/">Nearest Dealer</a></li>
            <li>
                <form id="dealer-finder" method="post" action="<?php bloginfo('url'); ?>/hot-tub-dealer-locator/cities/">
                    <input type="text" class="zip btn-start" name="zip" id="zip" placeholder="zip/postal code" />
                    <input name="zipcodeSearch" value="1" type="hidden">
                </form>
            </li>
        </ul>
        <?php 
            wp_nav_menu( array(
                'menu'       => 'mainmenu',
                'depth'      => 2,
                'container'  => false,
                'menu_class' => 'mainMenu',
                'fallback_cb' => 'wp_page_menu',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
            ); 
        ?>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('<option>')
            .attr('value','3')
            .html('Canada')
            .prependTo('#country');
        $('<option>')
            .attr('value','1')
            .html('United States')
            .prependTo('#country');
    });
</script>

<!-- Footer -->
<div class="ft">
    <div class="wrap">
        <div class="inner">
                <div class="col-8">
                    <h1 class="smalllogo"><a href="<?php bloginfo('url'); ?>">logo</a></h1>
                </div>
                <div class="col-4">
                        <ul class="footericon">
                            <li class="facebook"><a href="http://www.facebook.com/SundanceSpas">facebook</a></li>
                            <li class="twitter"><a href="http://twitter.com/sundance_spas">twitter</a></li>
                            <li class="youtube"><a href="http://www.youtube.com/sundancespas">youtube</a></li>
                            <li class="google"><a href="https://plus.google.com/107104241400965217576">google</a></li>
                        </ul>
                </div>
                <div class="clear"></div>
                <div class="col-12">
                    <ul class="spa">
                        <li class="border" ><a href="<?php bloginfo('url'); ?>/hot-tubs-and-spas/">Tubs</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/accessories/">Spa Accessories</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/get-a-quote/">Get Pricing</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/customer-care/">Owners</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="col-12">
                    <ul class="footer-links">
                        <li class="border"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/about-us/">About Us</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/about-us/press-room/">Press room</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/become-a-dealer/">Become a Dealer</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/#resources">Resources</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/customer-care/">Warrenty/Registration</a></li>
                        <li class="border"><a href="<?php bloginfo('url'); ?>/about-us/privacy-policy/">Policies</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/site-map/">Sitemap</a></li>
                    </ul>
                </div>
                <div class="clear"></div>   
                <div class="col-12">
                    <p>&#169;<?php echo date('Y'); ?> Sundance Spas-all right reserved</p>
                </div>
                <div class="clear"></div>
        </div>
        <?php /*
        <div class="inner">
            <div class="logo">
                <p><br /><?php echo date('Y'); ?> all rights reserved</p>
            </div>
            <div class="menuWrap">
            <?php
            wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'topMenu', 'theme_location' => 'ft1' ) );
            wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'bottomMenu', 'theme_location' => 'ft2' ) );
            wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'bottomMenu fresources', 'theme_location' => 'ftres' ) );
            ?>
            </div>
            <br class="clear" />
        </div>
        */ ?>
    </div>
</div>

<!-- Newsletter Sign-up Overlay -->
<div class="overlay" id="emailover">
	<div class="dialog">
    	<a id="x" href="#"></a>
    	<div class="inner">
        	<h2>Sign Up for our Newsletter</h2>
            <?php //echo do_shortcode('[gravityform id="4" name="Sign Up for our Newsletter" title="false" description="false" ajax="true"]'); ?>
            <script type="text/javascript" src="http://login.sendmetric.com/phase2/bhecho_files/smartlists/check_entry.js"></script>
            <script type="text/javascript">
               <!--
                              function check_cdfs(form) {
                                             return true;
                              }
               -->
            </script>
            <script type="text/javascript">
            <!--
                function doSubmit() {
                    if (check_cdfs(document.survey)) {
                                                         window.open('','signup','resizable=1,scrollbars=0,width=300,height=150');
                        return true;
                    }
                    else { return false; }
                }
            -->
            </script>

            <form action="http://login.sendmetric.com/phase2/bullseye/contactupdate1.php3" method="post" name="bullseye" id="bullseye" onsubmit="return doSubmit();" target="signup">
                <table> 
                    <tr>
                        <td><label for="firstname">Name</label></td>
                        <td><input type="text" class="text" id="firstname" name="firstname" /></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="cid" value="9bffaece0a39911668c51d8eb7af85c7" /><label for="email">Email</label></td>
                        <td><input type="text" class="text" id="email" name="email" /></td>
                    </tr>
                    <tr>
                        <td><label for="postal_code">Zip</label></td>
                        <td><input type="text" class="text zip" id="postal_code" name="postal_code" /></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="message" value="Thank you. Your information has been submitted. To ensure delivery of your newsletter(s), please add donotreply@sundancespas.com to your address book, spam filter whitelist, or tell your company's IT group to allow this address to pass through any filtering software they may have set up." />&nbsp;</td>
                        <td><br /><input type="image" src="<?php bloginfo('template_url'); ?>/images/icons/dialogSubmit.png" value="submit" name="SubmitBullsEye" /><input type="hidden" name="grp[]" value="575636" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<!-- end newsletter -->


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>


<!-- Google Code for Locate a Dealer Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 971855216;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "EgaYCMjtqwQQ8Kq1zwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/971855216/?value=0&amp;label=EgaYCMjtqwQQ8Kq1zwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- Start Quantcast Tag -->
<script type="text/javascript"> 
var _qevents = _qevents || [];
(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();
_qevents.push(
{qacct:"p-TAV6snse1j2Rf",labels:"_fp.event.Sundance Spas Locate a Dealer"}
);
</script>
<noscript>
<img src="//pixel.quantserve.com/pixel/p-TAV6snse1j2Rf.gif?labels=_fp.event.Sundance+Spas+Locate+a+Dealer" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->

</body>
</html>

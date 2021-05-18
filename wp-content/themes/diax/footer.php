<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slightly
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

  <div class="row">
    <div class="col-xs-12">
        
		<div class="site-info">
            <?php 
                if(pll_current_language() == 'nl') {?>
            <div class="footer-row footer-row-1">
            <h3>Contacteer ons</h3>
            <ul class="footerlist contactgegevens">
                <li class="footer-icon mail"><a href="mailto:info@di-ax.be">info@di-ax.be</a></li>
                <li class="footer-icon tele"><a href="tel:022106140">02 210 61 40</a></li>
            </ul>
            </div>
            <div class="footer-row footer-row-2">
            <h3>DiAX</h3>
            <ul class="footerlist">    
                <li><a href="http://staging.di-ax.be">Home</a></li>
                <li><a href="http://staging.di-ax.be/diensten">Diensten</a></li>
                <li><a href="http://staging.di-ax.be/contracten">Contracten</a></li>
                <li><a href="http://staging.di-ax.be/wetgeving">Wetgeving</a></li>
                <li><a href="http://staging.di-ax.be/over">Over DiAX</a></li>
                <li><a href="http://staging.di-ax.be/contact">Contact</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <ul class="footerlist nuttigelinks">    
                <li><a href="http://staging.di-ax.be/toegankelijkheidsverklaring">Toegankelijkheidsverklaring</a></li>
                <li>&copy; Rechten gereserveerd door <a href="https://di-ax.be">DiAX</a></li>
            </ul>

            </div>
            <?php 
                } else if(pll_current_language() == 'fr') {?>
            
            <div class="footer-row footer-row-1">
            <h3>Nous contacter</h3>
            <ul class="footerlist contactgegevens">
                <li class="footer-icon mail"><a href="mailto:info@di-ax.be">info@di-ax.be</a></li>
                <li class="footer-icon tele"><a href="tel:022106140">02 210 61 40</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <h3>DiAX</h3>
            <ul class="footerlist">    
                <li><a href="http://staging.di-ax.be/fr/diax-francais">Home</a></li>
                <li><a href="http://staging.di-ax.be/fr/services-2">Services</a></li>
                <li><a href="http://staging.di-ax.be/fr/contrats">Contrats</a></li>
                <li><a href="http://staging.di-ax.be/fr/legislation">Législation</a></li>
                <li><a href="http://staging.di-ax.be/fr/qui-sommes-nous">Qui sommes-nous?</a></li>
                <li><a href="http://staging.di-ax.be/fr/contact-fr">Contact</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <ul class="footerlist nuttigelinks">    
                <li><a href="http://staging.di-ax.be/fr/toegankelijkheidsverklaring-fr">Déclaration d'accessibilité</a></li>
                <li>&copy; Droits réservés par <a href="https://di-ax.be">DiAX</a></li>
            </ul>
            </div>
            <?php
                } else if(pll_current_language() == 'en') {?>
            
            <div class="footer-row footer-row-1">
            <h3>Contact us</h3>
            <ul class="footerlist contactgegevens">
                <li class="footer-icon mail"><a href="mailto:info@di-ax.be">info@di-ax.be</a></li>
                <li class="footer-icon tele"><a href="tel:022106140">02 210 61 40</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <h3>DiAX</h3>
            <ul class="footerlist">    
                <li><a href="http://staging.di-ax.be/en/diax-english">Home</a></li>
                <li><a href="http://staging.di-ax.be/en/services">Services</a></li>
                <li><a href="http://staging.di-ax.be/en/contracts">Contracts</a></li>
                <li><a href="http://staging.di-ax.be/en/legislation">Legislation</a></li>
                <li><a href="http://staging.di-ax.be/en/about-us">About us</a></li>
                <li><a href="http://staging.di-ax.be/en/contact-en">Contact</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <ul class="footerlist nuttigelinks">    
                <li><a href="http://staging.di-ax.be/en/toegankelijkheidsverklaring-en">Accessibility statement</a></li>
                <li>&copy; Rights reserved by <a href="https://di-ax.be">DiAX</a></li>
            </ul>
            </div>
             <?php                }  
        ?>

		</div><!-- .site-info -->

    </div>
    </div>
        
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

<script type="application/json">{
  "utility": "cck",
  "url": {
    "en": "https://di-ax.be/en",
    "nl": "https://di-ax.be",
    "fr": "https://di-ax.be/fr"
  }
}</script>

</body>
</html>

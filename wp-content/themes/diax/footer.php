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
                <li class="footer-icon social"><a class="footer-icon twitter" href="https://twitter.com/DiAX_be"><span class=sr-only>Twitter</span></a><a class="footer-icon linkedin" href="https://www.linkedin.com/company/di-ax/"><span class="sr-only">Linkedin</span></a></li>
            </ul>
            </div>
            <div class="footer-row footer-row-2">
            <h3>DiAX</h3>
            <ul class="footerlist">    
                <li><a href="/">Home</a></li>
                <li><a href="/diensten">Diensten</a></li>
                <li><a href="/contracten">Contracten</a></li>
                <li><a href="/wetgeving">Wetgeving</a></li>
                <li><a href="/over">Over DiAX</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <ul class="footerlist nuttigelinks">    
                <li><a href="/toegankelijkheidsverklaring">Toegankelijkheidsverklaring</a></li>
            </ul>

            </div>
            <?php 
                } else if(pll_current_language() == 'fr') {?>
            
            <div class="footer-row footer-row-1">
            <h3>Nous contacter</h3>
            <ul class="footerlist contactgegevens">
                <li class="footer-icon mail"><a href="mailto:info@di-ax.be">info@di-ax.be</a></li>
                <li class="footer-icon tele"><a href="tel:022106140">02 210 61 40</a></li>
                <li class="footer-icon social"><a class="footer-icon twitter" href="https://twitter.com/DiAX_be"><span class=sr-only>Twitter</span></a><a class="footer-icon linkedin" href="https://www.linkedin.com/company/di-ax/"><span class="sr-only">Linkedin</span></a></li>
            </ul>
            </div>
            <div class="footer-row footer-row-2">
            <h3>DiAX</h3>
            <ul class="footerlist">    
                <li><a href="/fr/diax-francais">Home</a></li>
                <li><a href="/fr/services-2">Services</a></li>
                <li><a href="/fr/contrats">Contrats</a></li>
                <li><a href="/fr/legislation">Législation</a></li>
                <li><a href="/fr/qui-sommes-nous">Qui sommes-nous?</a></li>
                <li><a href="/fr/contact-fr">Contact</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <ul class="footerlist nuttigelinks">    
                <li><a href="/fr/declaration-d-accessibilite">Déclaration d'accessibilité</a></li>
            </ul>
            </div>
            <?php
                } else if(pll_current_language() == 'en') {?>
            
            <div class="footer-row footer-row-1">
            <h3>Contact us</h3>
            <ul class="footerlist contactgegevens">
                <li class="footer-icon mail"><a href="mailto:info@di-ax.be">info@di-ax.be</a></li>
                <li class="footer-icon tele"><a href="tel:022106140">02 210 61 40</a></li>
                <li class="footer-icon social"><a class="footer-icon twitter" href="https://twitter.com/DiAX_be"><span class=sr-only>Twitter</span></a><a class="footer-icon linkedin" href="https://www.linkedin.com/company/di-ax/"><span class="sr-only">Linkedin</span></a></li>
            </ul>
            </div>
            <div class="footer-row footer-row-2">
            <h3>DiAX</h3>
            <ul class="footerlist">    
                <li><a href="/en/diax-english">Home</a></li>
                <li><a href="/en/services">Services</a></li>
                <li><a href="/en/contracts">Contracts</a></li>
                <li><a href="/en/legislation-2">Legislation</a></li>
                <li><a href="/en/about-us">About us</a></li>
                <li><a href="/en/contact-en">Contact</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <ul class="footerlist nuttigelinks">    
                <li><a href="/en/accessibility-statement">Accessibility statement</a></li>
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

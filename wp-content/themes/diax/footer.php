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
            <div class="footer-row">
            <h3>DiAX</h3>
            <ul class="footerlist nuttigelinks">    
                <li><a href="http://staging.di-ax.be/">Home</a></li>
                <li><a href="http://staging.di-ax.be/diensten/">Diensten</a></li>
                <li><a href="http://staging.di-ax.be/partners/">Partners</a></li>
                <li><a href="http://staging.di-ax.be/contact/">Contact</a></li>
            </ul>
            </div>
            <div class="footer-row">
            <h3>Legal</h3>
            <ul class="footerlist nuttigelinks">    
                <li><a href="http://staging.di-ax.be/privacybeleid/">Privacyverklaring</a></li>
                <li><a href="http://staging.di-ax.be/algemene-voorwaarden/">Algemene voorwaarden</a></li>
                <li><a href="http://staging.di-ax.be/toegankelijkheidsverklaring/">Toegankelijkheidsverklaring</a></li>
            </ul>
            <p>&copy; Rechten gereserveerd door <a href="https://di-ax.be">DiAX</a></p>
            </div>
            <?php 
                } else if(pll_current_language() == 'fr') {?>
            
            <ul class="footerlist contactgegevens">
                <li><a href="mailto:info@di-ax.be">info@di-ax.be</a></li>
                <li><a href="http://localhost/diax/fr/contact-fr">Formulaire de contact</a></li>
            </ul>
            <ul class="footerlist nuttigelinks">    
                <li><a href="http://localhost/diax/fr/privacybeleid-fr">Déclaration de confidentialité</a></li>
                <li><a href="http://localhost/diax/fr/algemene-voorwaarden-fr">Conditions générales</a></li>
                <li><a href="http://localhost/diax/fr/toegankelijkheidsverklaring-fr">Déclaration d'accessibilité</a></li>
            </ul>
            <?php
                } else if(pll_current_language() == 'en') {?>
            
            <ul class="footerlist contactgegevens">
                <li><a href="mailto:info@di-ax.be">info@di-ax.be</a></li>
                <li><a href="http://localhost/diax/en/contact-en">Contact Form</a></li>
            </ul>
            <ul class="footerlist nuttigelinks">    
                <li><a href="http://localhost/diax/en/privacybeleid-en">Privacy declaration</a></li>
                <li><a href="http://localhost/diax/en/algemene-voorwaarden-en">Terms and Conditions</a></li>
                <li><a href="http://localhost/diax/en/toegankelijkheidsverklaring-en">Accessibility statement</a></li>
            </ul>
             <?php                }  
        ?>

		</div><!-- .site-info -->

    </div>
    </div>
        
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>

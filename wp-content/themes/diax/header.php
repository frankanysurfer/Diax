<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slightly
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-198965149"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-198965149');
</script>

</head> 

<body <?php body_class(); ?>>

<div id="page" class="site">

	<header id="masthead" class="site-header">

    <a class="skip-link screen-reader-text" href="#content"><?php

    if(pll_current_language() == 'nl') {
                    esc_html_e( 'Naar de inhoud', 'slightly' );
                } else if(pll_current_language() == 'fr') {
                    esc_html_e( 'Aller au contenu', 'slightly' ); 
                } else if (pll_current_language() == 'en') {
                    esc_html_e( 'Skip to content', 'slightly' );
                } 
      ?></a>

  <div class="row">
    <div class="col-xs-12 site-header-col">
		<div class="site-branding">
			<?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $home_url = home_url( '/' );
            if ( has_custom_logo() ) {
                    echo '<a href="'. esc_url ( $home_url ) . '">';
                    echo '<img id="diax-logo" src="'. esc_url( $logo[0] ) .'">';
                    echo '</a>';
            } else {
                if ( is_front_page() || is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;
            }
			 ?>
		</div><!-- .site-branding -->
        <ul class="language"><?php pll_the_languages();?></ul>
        <button  id="switch" class="switch maan"><span class="sr-only">

            <?php
            if(pll_current_language() == 'nl') {?>
            <span class="knop-licht">Donkere modus</span>
            <span class="knop-donker">lichte modus</span>

            <?php 
            } else if(pll_current_language() == 'fr') {?>
            <span class="knop-licht">Mode sombre</span>
            <span class="knop-donker">Mode clair</span>
        
            <?php
            } else if(pll_current_language() == 'en') {?>
            <span class="knop-licht">Dark mode</span>
            <span class="knop-donker">light mode</span>
             <?php                }  
            ?>

        </span></button>

		<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'slightly' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
      </div>
    </div>
	</header><!-- #masthead -->


	<div id="content" class="site-content">

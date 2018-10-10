<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Navbar -->
  	<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
	    <div class="container">

	      <!-- Brand -->
	      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank">
	        <strong>
	        	<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<?php bloginfo( 'name' ); ?>
					<?php
				else :
					?>
					<?php bloginfo( 'name' ); ?>
					<?php
				endif;
				$custom_template_description = get_bloginfo( 'description', 'display' );
				if ( $custom_template_description || is_customize_preview() ) :
					?>
					<!-- <p class="site-description"><small><?php echo $custom_template_description; /* WPCS: xss ok. */ ?></small></p> -->
				<?php endif; ?>
	        </strong>
	      </a>

	      <!-- Collapse -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
	        aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <!-- Links -->
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php

                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_class'     => 'navbar-nav mr-auto',
                    'container'      => 'ul',
                 ) );

            ?>
	        <!-- Left -->
	        
	      </div>

	    </div>
  	</nav>
<!-- <div class="content">	 -->
    <!--Intro-->
    <?php if ( is_home() && is_front_page() ) : ?>
    <section>
        
        <?php custom_template_display_slider(); ?>
    </section>
    
    <?php endif; ?>
 <main class="pt-4">
    <!--/Intro-->
 	<div class="container-fluid">


        <!--/Latest posts-->


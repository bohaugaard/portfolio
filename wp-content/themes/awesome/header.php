<?php

/* 	Awesome Theme's Header
	Copyright: 2014-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

      <div id ="header">
      <!-- Top Menu -->
        <div class="box100 awesome-top-menu-container bcolor-back">
        	<div class="box90">
        		<div class="awesome-top-menu-items">
        			<nav class="awesome-top-menu">
						<?php if ( has_nav_menu( 'top-menu' ) ) :  wp_nav_menu( array( 'theme_location' => 'top-menu' )); endif; ?>
        			</nav> 
                    <?php get_search_form(); ?>
        <div class="social">
	  		<?php foreach (range(1, 5 ) as $awesome_numslinksn) { if ( awesome_get_option('sl' . $awesome_numslinksn ) != '' ): echo '<a href="'. esc_url(awesome_get_option('sl' . $awesome_numslinksn )) .'" target="_blank"> </a>'; endif; } 	?>        
        </div>
        </div>
 		</div>
       	</div>
      
      <div id ="header-content">
		<!-- Site Titele and Description Goes Here -->
         
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if ( has_custom_logo()): the_custom_logo(); else: ?><h1 class="site-title"><?php echo bloginfo( 'name' ); ?></h1><?php endif; ?></a>
		<h2 class="site-title-hidden"><?php bloginfo( 'description' ); ?></h2>
        <!-- Site Main Menu Goes Here -->
        <div class="mobile-menu"><?php echo __('Main Menu', 'awesome'); ?></div>
        <nav id="awesome-main-menu">
		<?php if ( has_nav_menu( 'main-menu' ) ) :  wp_nav_menu( array( 'theme_location' => 'main-menu' )); else: wp_page_menu(); endif; ?>
        </nav>
      
      </div><!-- header-content -->
      </div><!-- header -->
      <div class="headerheight"> </div>
      <div class="site-container">
	  
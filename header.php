<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kumle
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
        <div class="head-wrap">
            <div class="container">

            	<div class="site-branding <?=  is_front_page() ? 'invisible' : ''; ?>">
            		<?php 

                    $site_identity = kumle_get_option( 'site_identity' ); 

                    if( 'logo-only' == $site_identity ){  

                        kumle_the_custom_logo(); 

                    }elseif( 'logo-desc' == $site_identity ){

                        kumle_the_custom_logo(); 

                        $description = get_bloginfo( 'description', 'display' );

                        if ( $description || is_customize_preview() ) : ?>

                            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>

                            <?php
                        endif; 

                    }else{ ?>

                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                		<?php
                		$description = get_bloginfo( 'description', 'display' );

                        if ( $description || is_customize_preview() ) : ?>

                            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>

                            <?php
                        endif; 
            		} ?>
            	</div><!-- .site-branding -->

                <div class="search-social">
                    <?php 

                    $show_search_form  = kumle_get_option( 'show_search_form' );

                    if( true === $show_search_form ){ ?>

                        <div class="top-search-form">
                            <?php get_search_form(); ?>
                        </div>

                        <?php

                    }

                    $show_social_icons  = kumle_get_option( 'show_social_icons' );

                    if( true === $show_social_icons && has_nav_menu( 'social' ) ){ ?>

                        <div class="top-social-menu kumle-social-icons"> 

                            <?php 

                            if ( has_nav_menu( 'social' ) ) {
                                wp_nav_menu( array(
                                    'theme_location' => 'social',
                                    'link_before'    => '<span class="screen-reader-text">',
                                    'link_after'     => '</span>',
                                ) );
                            }
                            
                            ?>

                        </div>
                        <?php
                    } 

                    ?>
                </div>
            </div>
        </div>

        <div class="navigation-wrap">
            <div class="container">
                <div id="main-nav" class="clear-fix">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <div class="wrap-menu-content">
                            <?php
                            wp_nav_menu(
                                array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'fallback_cb'    => 'kumle_primary_navigation_fallback',
                                )
                            );
                            ?>
                        </div><!-- .menu-content -->
                    </nav><!-- #site-navigation -->
                </div> <!-- #main-nav -->
            </div>
        </div>
    </header><!-- #masthead -->
	
	<div id="content" class="site-content">
        <?php  if( !is_front_page() && !is_page_template('elementor_header_footer') ){ ?>
            <div class="container">
        <?php } ?>
            <div class="inner-wrapper">
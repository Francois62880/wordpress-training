<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage meditation-and-yoga
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'meditation-and-yoga' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="contact-details">
					<?php if( get_theme_mod('meditation_and_yoga_mail1') != ''){ ?>
							<span class="col-org"><i class="far fa-envelope"></i><?php echo esc_html( get_theme_mod('meditation_and_yoga_mail1','') ); ?></span>
					<?php } ?>
					<?php if( get_theme_mod('meditation_and_yoga_call1') != ''){ ?>
						<span class="col-org"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('meditation_and_yoga_call1','') ); ?></span>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="logo">
			        <?php if( has_custom_logo() ){ meditation_and_yoga_the_custom_logo();
			           }else{ ?>
			          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			          <?php $description = get_bloginfo( 'description', 'display' );
			          if ( $description || is_customize_preview() ) : ?> 
			            <p class="site-description"><?php echo esc_html($description); ?></p>
			        <?php endif; }?>
			    </div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="search-box">
				<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','meditation-and-yoga'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="nav">
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</div>
		</div>
	</div>
</div>
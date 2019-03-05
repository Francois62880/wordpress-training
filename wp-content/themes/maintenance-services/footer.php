<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Maintenance Services
 */
if ( is_active_sidebar( 'fc-1' ) || is_active_sidebar( 'fc-2' ) || is_active_sidebar( 'fc-3' ) ) : 
?>
<div id="footer-wrapper">
		<div class="footerarea">
    	<div class="container footer">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 		         
            <div class="clear"></div>
        </div><!--end .container--> 
        </div><!--end .footer-wrapper-->
         <?php endif; ?>
<div id="copyright-area">
<div class="copyright-wrapper">
<div class="container">
	 <?php
        $fb_link = get_theme_mod('fb_link'); 
        $twitt_link = get_theme_mod('twitt_link');
        $gplus_link = get_theme_mod('gplus_link');
        $youtube_link = get_theme_mod('youtube_link');
        $instagram_link = get_theme_mod('instagram_link');
        $linkedin_link = get_theme_mod('linkedin_link'); 
    ?> 
    <div class="footersocial">
    	<div class="social-icons">
    	<?php 
            if (!empty($fb_link)) { ?>
            <a title="<?php echo esc_attr__('Facebook','maintenance-services'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
            <?php }  
            if (!empty($twitt_link)) { ?>
            <a title="<?php echo esc_attr__('Twitter','maintenance-services'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a> 
            <?php }  
            if (!empty($gplus_link)) { ?>
            <a title="<?php echo esc_attr__('Google Plus','maintenance-services'); ?>" class="gp" target="_blank" href="<?php echo esc_url($gplus_link); ?>"></a> 
            <?php }   
            if (!empty($youtube_link)) { ?>
            <a title="<?php echo esc_attr__('Youtube','maintenance-services'); ?>" class="tube" target="_blank" href="<?php echo esc_url($youtube_link); ?>"></a> 
            <?php }   
            if (!empty($instagram_link)) { ?>
            <a title="<?php echo esc_attr__('Instagram','maintenance-services'); ?>" class="insta" target="_blank" href="<?php echo esc_url($instagram_link); ?>"></a> 
            <?php }   
            if (!empty($linkedin_link)) { ?>
            <a title="<?php echo esc_attr__('Linkedin','maintenance-services'); ?>" class="in" target="_blank" href="<?php echo esc_url($linkedin_link); ?>"></a> 
            <?php } ?>   
            </div>
    </div>
     <div class="copyright-txt"><?php printf('<a target="_blank" href="'.esc_url(MAINTENANCE_SERVICES_SKTTHEMES_FREE_THEME_URL).'" rel="nofollow">SKT Maintenance</a>' ); ?></div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end .footer-wrapper-->
<?php wp_footer(); ?>
</body>
</html>
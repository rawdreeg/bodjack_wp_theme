<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

    <div class="container clearfix">

        <div class="col_half">
        <?php
			if (get_theme_mod( 'rb_footer_copyright_text')) {
                echo get_theme_mod( 'rb_footer_copyright_text' );
            }
        ?>
        <div class="copyright-links">
        <?php
			if ( has_nav_menu( 'footer' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'fallback_cb'    => false,
						'depth'          => 1,
					)
				);
			}
			?>
        </div>
        </div>

        <div class="col_half col_last tright">
            <div class="fright clearfix">
            <?php
                    if (get_theme_mod( 'rb_facebook_handle')) {
                    ?>
                        <a href="https://facebook.com/<?php echo get_theme_mod( 'rb_facebook_handle' ) ?>" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>				
                    <?php		
                        }
                    ?>

                    <?php
                        if (get_theme_mod( 'rb_twitter_handle')) {
                    ?>
                        <a href="https://twitter.com/<?php echo get_theme_mod( 'rb_twitter_handle' ) ?>" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                    <?php		
                        }
                    ?>
                
                <?php
                        if (get_theme_mod( 'rb_instagram_handle')) {
                    ?>
                        <a href="https://instagram.com/<?php echo get_theme_mod( 'rb_instagram_handle' ) ?>" class="social-icon si-small si-borderless si-instagram">
                            <i class="icon-instagram2"></i>
                            <i class="icon-instagram2"></i>
                        </a>
                    <?php		
                        }
                    ?>
    

            </div>

            <div class="clear"></div>
                <?php	
                    if (get_theme_mod( 'rb_email')) {
                ?>
                        <i class="icon-envelope2"></i> <?php echo get_theme_mod( 'rb_email' ) ?> <span class="middot">&middot;</span>
                <?php		
                    }
                ?>
                <?php	
                    if (get_theme_mod( 'rb_phone')) {
                ?>
                        <i class="icon-headphones"></i> <?php echo get_theme_mod( 'rb_phone' ) ?>
                <?php		
                    }
                ?>
            </div>

    </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<?php wp_footer(); ?>

</body>

</html>
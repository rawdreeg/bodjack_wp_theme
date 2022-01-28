<?php get_header(); ?>

<!-- Content
	============================================= -->
<section id="content">

  <div class="content-wrap">
    <?php if ( ! is_single() && is_home() && get_theme_mod( 'rb_header_show_popular_posts') === "yes" && function_exists( 'wpp_get_mostpopular' ) ) { 
      wpp_get_mostpopular( array( 
        'wpp_start' => '<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
        <div>
          <div class="container clearfix">
            <span class="badge badge-danger bnews-title">' . __( 'Popular posts:', 'bodjack' ) . '</span>
  
            <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
              data-pagi="false">
              <div class="flexslider">
                <div class="slider-wrap">',
        'wpp_end' => '</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>',
        'post_html' => '<div class="slide"><a href="{url}"><strong>{text_title}</strong></a></div>',
        
      ) );
      
      ?>
      
                

              
 
    <?php } ?>

    <div class="container clearfix">

      <!-- Post Content
		  ============================================= -->
      <div class="postcontent nobottommargin clearfix">

        <!-- Posts
			============================================= -->
        <div id="posts">
          <?php if ( have_posts() ) : 
          while ( have_posts() ) : the_post(); 
          
            get_template_part( 'templates/post/content', 'excerpt' );

          ?>
          <?php endwhile; else : ?>
          <p>
            <?php _e( 'Sorry, no posts found.' ); ?>
          </p>
          <?php endif; ?>
        </div><!-- #posts end -->

        <!-- Pagination
			============================================= -->
        <div class="row mb-3">
          <div class="col-12">

            <?php if (get_next_posts_link()): ?>
            <div class="btn btn-outline-dark float-right">
              <?php next_posts_link( __('Newer &rarr;', 'bodjack') ); ?>
            </div>
            <?php endif; ?>
            <?php if (get_previous_posts_link()): ?>
            <div class="btn btn-outline-secondary float-left">
              <?php previous_posts_link( __('&larr; Older', 'bodjack') ); ?>
            </div>
            <?php endif; ?>

          </div>
        </div>
        <!-- .pager end -->

      </div><!-- .postcontent end -->

      <!-- Sidebar
		  ============================================= -->
      <?php get_sidebar(); ?>

    </div><!-- .sidebar end -->

  </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>
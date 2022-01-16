<?php get_header(); ?>

<!-- Content
	============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
      <div>
        <div class="container clearfix">
          <span class="badge badge-danger bnews-title">Breaking News:</span>

          <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
            data-pagi="false">
            <div class="flexslider">
              <div class="slider-wrap">
                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </strong></a></div>
                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </strong></a></div>
                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </strong></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
            <?php
            the_posts_pagination( array(
              'mid_size' => 2,
              'prev_text' => __( '&lt;', 'bodjack' ),
              'next_text' => __( '&gt;', 'bodjack' ),
            ) );
             ?>
            <a href="#" class="btn btn-outline-secondary float-left">
              &larr; Older
            </a>
            <a href="#" class="btn btn-outline-dark float-right">
              Newer &rarr;
            </a>
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
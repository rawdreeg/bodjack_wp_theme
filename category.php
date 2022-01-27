<?php get_header(); ?>

<!-- Page Title
    ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>
            <?php the_archive_title(); ?>
        </h1>

        <span>
            <?php
             the_archive_description();  
            ?>
        </span>
    </div>
</section><!-- #page-title end -->

<!-- Content
	============================================= -->
<section id="content">

  <div class="content-wrap">

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
<?php
	get_header();
?>

<!-- Page Title
    ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>
            <?php single_post_title(); ?>
        </h1>

        <span>
            <?php
            if (function_exists('the_subtitle')) {
                the_subtitle();
            }
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

                <?php
					while ( have_posts() ) :
						the_post();
                        global $post;
                        $author_id = $post->post_author;
						?>

                <div class="single-post nobottommargin">

                    <!-- Single Post
============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Image
============================================= -->
                        <div class="entry-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                the_post_thumbnail(
                                    'full'
                                );
                                ?>
                            </a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
============================================= -->
                        <div class="entry-content notopmargin">

                            <?php the_content(); ?>
                            <?php wp_link_pages( 
                                array(
                                    'before' => '<div class="page-links text-center">' . __( 'Pages:', 'bodjack' ),
                                    'after'  => '</div>',
                                ) 
                            ); ?>

                            <!-- Post Single - Content End -->


                            <div class="clear"></div>

                        </div>
                    </div><!-- .entry end -->


                    <!-- Comments
============================================= -->
                    <?php 
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>

                    <!-- #comments end -->

                </div>

            </div><!-- .postcontent end -->

            <?php
					endwhile;
				?>



            <!-- Sidebar
		  ============================================= -->
            <?php get_sidebar(); ?>
            <!-- .sidebar end -->
        </div>

    </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>
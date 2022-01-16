<?php
	get_header();
	global $post;
	$author_id = $post->post_author;
?>

<!-- Content
	============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Post Content
		  ============================================= -->
			<div class="postcontent nobottommargin clearfix">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>

				<div class="single-post nobottommargin">

					<!-- Single Post
============================================= -->
					<div class="entry clearfix">

						<!-- Entry Title
============================================= -->
						<div class="entry-title">
							<h2><?php the_title(); ?></h2>
						</div><!-- .entry-title end -->

						<!-- Entry Meta
============================================= -->
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> <?php the_date(); ?></li>
							<li>
								<a href="<?php echo get_author_posts_url( $author_id ); ?>">
									<i class="icon-user"></i> <?php the_author(); ?>
								</a>
							</li>
							<li><i class="icon-folder-open"></i> <?php the_category( ', ' ); ?>

							</li>
							<li><a href="#"><i class="icon-comments"></i> <?php comments_number( '0' ); ?></a></li>
						</ul><!-- .entry-meta end -->

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

							<!-- Tag Cloud
  ============================================= -->
							<div class="tagcloud clearfix bottommargin">
								<?php the_tags( '', ' ' ); ?>
							</div><!-- .tagcloud end -->

							<div class="clear"></div>

						</div>
					</div><!-- .entry end -->

					<!-- Post Navigation
============================================= -->
					<div class="post-navigation clearfix">

						<div class="col_half nobottommargin">
							<?php previous_post_link( '%link', '&lArr; %title' ); ?>
						</div>

						<div class="col_half col_last tright nobottommargin">
							<?php next_post_link( '%link', '%title &rArr;' ); ?>
						</div>

					</div><!-- .post-navigation end -->

					<div class="line"></div>

					<!-- Post Author Info
============================================= -->
					<div class="card">
						<div class="card-header">
							<strong>
								Posted by
								<a href="<?php echo get_author_posts_url( $author_id ); ?>"> <?php the_author(); ?> </a>
							</strong>
						</div>
						<div class="card-body">
							<div class="author-image">
								<?php echo get_avatar( $author_id, '90', '', false, array(
                                    'class' => 'img-circle'
                                 ) ); ?>
							</div>
							<?php echo nl2br(get_the_author_meta( 'description' )); ?>
						</div>
					</div><!-- Post Single - Author End -->

					<div class="line"></div>

					<h4><?php _e('Related Posts:', 'bodjack'); ?></h4>

					<div class="related-posts clearfix">

						<?php
						$categories = get_the_category();
						$rp_query   = new WP_Query(
							array(
								'posts_per_page' => 2,
								'post__not_in'   => array( $post->ID ),
								'category__in'   => wp_get_post_categories( $post->ID ),
								'orderby'        => 'rand',
							)
						);
						if ( $rp_query->have_posts() ) :
							while ( $rp_query->have_posts() ) :
								$rp_query->the_post();
								?>

                                <div class="mpost clearfix">

                                <?php
                                    if ( has_post_thumbnail() ) {
                                        ?>
                                            <div class="entry-image">
                                            <a href="<?php echo get_the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'thumbnail' );?>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
       
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4>
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i><?php the_date(); ?></li>
                                            <li><i class="icon-comments"></i> <?php comments_number( '0' ); ?></li>
                                        </ul>
                                        <div class="entry-content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </div>

								<?php
							endwhile;
                            // reset post data
                            wp_reset_postdata();
							endif;
						?>
							   

					</div>

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
				endif
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

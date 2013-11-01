<?php get_header(); ?>
<div class="row">
	<div id="left-column" class="span3">
		<div class="interior-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'council-nav', 'sort_column' => 'menu_order' ) ); ?>
		</div>
	</div>
	<div id="right-column" class="span9">
		<div class="interior-content">
			<article id="content">
				<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-content">
					



						<?php if( is_page(1136) ) : ?>
						<div id="city-clerk-feed">
							<?php
								$announcements_args = array( 'post_type' => 'occ_announcements', 'posts_per_page' => -1 );
								$announcements = new WP_query( $announcements_args );
								while ($announcements->have_posts()) : $announcements->the_post();
							?>
							<div class="feed-box">
								<div class="feed-text">
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<p></p>
								</div>
								<div style="clear:both;"></div>
							</div>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>

					</div>
						<?php 
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} 
						?>
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
						<?php edit_post_link( __( 'Edit', 'blankslate' ), '<div class="edit-link">', '</div>' ) ?>
					</div>
				</div>
			</article>
		</div>
	</div>
	<div style="clear:both;"></div>
</div>
<?php get_footer(); ?>
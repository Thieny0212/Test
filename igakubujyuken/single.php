<?php get_header(); ?>
	<div class="breadcrumb">
		<div class="container">
			<ul>
				<li><a href="<?php echo home_url(); ?>">Top</a></li>

				<?php while ( have_posts() ) : the_post();
					$terms = wp_get_post_terms( $post->ID ,'category', array('orderby' => 'id', 'order' => 'ASC', 'fields' => 'all') );
					if( !empty($terms) ) {
						foreach($terms as $term) {
							echo '<li><a href="' . get_term_link($term->slug, 'category') . '">' . $term->name . '</a></li>';
						}
					}
				endwhile;
				?>
				<li><span><?php the_title(); ?></span></li>
			</ul>
		</div>
	</div>
	<div id="single_post" class="the_post">
			<?php 
				if ( have_posts() ) : 
					while ( have_posts() ) : 
						the_post(); 
			?>
				<article>
				<div class="container">
					<h1 class="post_title"><?php the_title(); ?></h1>
				</div>
				<div class="bg_single">
					<div class="container">
						<div class="post_content">
							<?php the_content(); ?>
						</div> 
					</div><!-- / .post_content -->
				</div>
				</article>
			<?php 
					endwhile; 
				endif; 
			?>
		</div>
	</div>
<?php get_footer(); ?>
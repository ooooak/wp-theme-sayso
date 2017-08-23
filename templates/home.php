<?php
/**
 *	Template Name: Home Posts
 * @package WordPress
 * @subpackage sysso
 * @since sysso 1.0
*/

get_header(); ?>
<div id="primary">
	<main id="main">
		<?php
			$query = new WP_Query([
				'posts_per_page'   => 10,
				'offset'           => 0,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			]);

	if ($query->have_posts()): 
		while ($query->have_posts()): $query->the_post(); ?>
	  		<div class="row post-row">
	    		<div class="col-3">
	    			<div class="post">
				<h2>
					<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="post-entry"> <?php the_excerpt(); ?> </div>
				<small><?php the_time( 'F jS, Y' ); ?></small>
			</div> <!-- closes the first div box -->

	    		</div>

	    		<div class="col-9"> 
	    			<?php get_template_part( 'template-parts/image-grid') ?>
	    		</div>
	  		</div>
	  	<?php endwhile;  wp_reset_postdata(); ?>
		<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</main><!-- .site-main -->

	<?php get_sidebar('content-bottom'); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>

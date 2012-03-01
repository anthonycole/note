<?php get_header(); ?>
	<div id="content" class="grids">
		<div class="grid-7">
		<?php while( have_posts() ) : the_post(); ?>
		
			<?php get_template_part('content'); ?>
		
		<?php endwhile; ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>
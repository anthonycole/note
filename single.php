<?php get_header(); ?>
	<div id="content" class="grids">
		<div class="grid-7">
			<?php the_post(); ?>
			<?php get_template_part('content', 'single'); ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>
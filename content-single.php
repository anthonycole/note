<?php get_header(); ?>
	<div id="content" class="grids">
		<div class="grid-7">
			<?php the_post(); ?>
			<?php get_template_part('content', 'page'); ?>
		</div>
		<div class="comments">
			<?php // you should really be using livefyre or something here. I'm avoiding WordPress's built in comment system for now. Nothing against it, just too much to style, meh. ?>
			<?php echo note_option('comment_js'); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>
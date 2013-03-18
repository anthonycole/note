<div class="grid-4">
	<section id="sidebar">

		<?php		  
			if ( dynamic_sidebar('right_sidebar') ) : 
			else : 
			?>
			<article class="no-sidebar">
				<h2>Not Configured</h2>
				<p>Please configure your sidebar (Under Appearance -> Widgets</p>
			</div>
			<?php endif; ?>
	</section>
</div>

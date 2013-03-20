<article class="hentry post">
	<div class="avatar avatar-<?php the_author(); ?>"></div>
	<section class="content">
		<header>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</header>
		
		<p class="entry-meta"><span class="author"><?php the_author(); ?></span> &middot; <span class="published updated"><?php the_time( get_option('date_format') . ' @ ' . get_option('time_format')); ?></span></p>
		<section class="entry-content" >
			<?php the_content(); ?>
		</section>
		<p class="category">&fnof; <?php the_category(' '); ?></p>
		<p class="aligncenter infinity">&infin;</p>
	</section>
	<br style="clear: both;" />
</article>
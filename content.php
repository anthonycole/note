<article class="hentry post">
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="entry-meta"><span class="author"><?php the_author(); ?></span> &middot; <span class="published updated"><?php the_time(); ?></span></p>
	<section class="entry-content">
		<?php the_content(); ?>
	</section>
	<p class="category">&fnof; <?php the_category(' '); ?></p>
	<p class="aligncenter infinity">&infin;</p>
</article>
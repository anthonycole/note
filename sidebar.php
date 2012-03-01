<div class="grid-4">
	<section id="sidebar">
		<aside id="talking">
			<h2>Talking</h2>
			<ul id="listening" class="widget">
				<?php while(have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</aside>
		<aside id="saying" class="widget">
			<h2>Saying</h2>
			<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 4,
			  interval: 30000,
			  width: 250,
			  height: 300,
			  theme: {
			    shell: {
			      background: '#333333',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: '#000000',
			      color: '#ffffff',
			      links: '#999999'
			    }
			  },
			  features: {
			    scrollbar: false,
			    loop: false,
			    live: false,
			    behavior: 'all'
			  }
			}).render().setUser('anthonycole').start();
			</script>
		</div>
	</section>
</div>
<article  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header>
		<a href="<?= the_permalink() ?>"><?php the_title("<h2>","</h2>"); ?></a>
	</header>
	<div id="body">
		<?php the_content(); ?>
	</div>
</article>
 
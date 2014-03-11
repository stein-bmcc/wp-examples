<article id="<?php the_ID(); ?>" class="<?php post_class(); ?>">
	<header>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="content">
		<?php the_content(); ?>
		<?php //the_excerpt(); ?>
	</div>

	<p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_posts_link(); ?></span></p>

	<?php comments_template(); ?>
</article>
<!-- post content -->
<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>

	<div class="content excerpt">
		<?php the_content(); ?>
		<!-- alternatively you can use the_excerpt(); in place of the_content if you just want an exerpt to show -->
	</div>

	<p class="entry-meta">
		Posted on <?php the_date(); ?> by 
		<span class="author"><?php the_author_posts_link(); ?></span> | 
		<?php 
		if ( comments_open() ) : ?>
		  <span class="comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments' ); ?></span>
		<?php endif; ?>
	</p>

</article>
<!-- end post content -->

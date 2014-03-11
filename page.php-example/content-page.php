<!-- page-content -->
<div class="page-content">
	<!-- the title -->
	<h2><?php the_title(); ?></h2>
	
	<!-- post content -->
	<?php the_content(); ?>

	<!-- featured image -->
	<div class="featured-image">
		<?php the_post_thumbnail('feature-image' ); ?>
	</div>
</div> 
<!-- end page-content -->
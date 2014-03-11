<?php get_header(); ?>

<div class="single-post">
	
	<?php 
		//run the wordpress loop 
		while (have_posts()) : the_post(); 
			//the_content('Read the rest of this entry »');
			get_template_part('content','single'); //look for a file named content-single.php 
		endwhile; 
		//no need for if wrapper, If the post is not found 404.php will be used instead of this
	?>
	
</div> <!-- end posts -->

<?php //get_sidebar(); //sidebar is optional  ?>

<?php get_footer(); ?>
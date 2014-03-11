<?php get_header(); ?> <!-- This gets header.php -->

<div class="posts">
	
	<?php 
		//run the wordpress loop 
			if (have_posts()) : 
				while (have_posts()) : the_post(); 
					//the_content('Read the rest of this entry »');
					get_template_part('content'); //this gets file named content.php 
				endwhile; 
			else : 
		?>
			<!-- If no posts were found then this content will show. 
				Most of the time you will only get this if you haven't made any posts on your blog yet.
			-->
				<div class="no-posts">
					<h2>No Posts Found</h2>
					<p>Sorry, no posts were found for what you're looking for.</p>
				</div>
		<?php endif; ?>
	
</div> <!-- end posts -->

<?php get_sidebar(); ?> <!-- This is optional, gets sidebar.php -->

<?php get_footer(); ?> <!-- This gets footer.php -->
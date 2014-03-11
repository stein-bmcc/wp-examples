This file is where you add the HTML and Template Tags for how you want the content of the loop to appear.

## Template Tags
Some Template Tags you might want to use:

`<?php the_title(); ?>`
`<?php the_permalink(); ?> `gets link to article

Filed in: `<?php the_category(', '); ?>` shows the categories that tag has, change the Filed in at the beginning to what you want.
`<?php the_date(); ?> ` current date, can be formatted by adding strings like 
`<?php the_date('Y') ?>` See [https://codex.wordpress.org/Formatting_Date_and_Time](https://codex.wordpress.org/Formatting_Date_and_Time) for more info
`<?php the_tags('Taged with: ', ', ') ?>` shows the tags given to the post
`<?php the_author_posts_link(); ?>`  shows the author's name and makes it a link to the archive of her articles
`<?php the_post_thumbnail('feature-image' ); ?>` Change feature-image to whatever name you defined for the featured image
`<?php the_content(); ?>`
`<?php the_excerpt(); ?>`

If you want to show how many comments there are for a post or page you can use this
````
<?php 
  if ( comments_open() ) : ?>
      <span class="comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments' ); ?>
      </span>
<?php endif; ?>
  ````

Use these if you want to show next and previous posts
Change the formatting around the links to suit your needs.
They can be in separate elements etc.

````
<p>
	<?php previous_post_link('%link', '%title', TRUE ); ?>
	&mdash; 
	<?php next_post_link('%link', '%title', TRUE ); ?> 
</p>
````

## Custom Field.
You can use Custom Fields to do things like make links to your work (for web sites for example).
For the code below to work you would have had to make a custom field named link_url in the post
````
<?php  if((get_post_meta($post->ID, "link_url", true))) { ?>
	<p class="work_url">
		<a href="<?php echo get_post_meta($post->ID, "link_url", true); ?>">Visit Site</a>		
	</p>
<?php } ?>
````


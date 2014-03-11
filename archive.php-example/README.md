## archive.php / content-archive.php

### What it does
These files are responsible for showing archive posts. The main kinds of archive pages are:

* Category
* Tag
* Date
* Author

For example if you click on the name of the author of a post you will be taken to a page with all of that author's posts.

### HTML Structure
The divs and other elements used in content-archive.php are just for example purposes. You need to figure out what elements you need based on the theme you are designing.

### Content-archive.php Template Tags

This is where you add the HTML for how you want the content of your page to appear.
Some template tags you might want to use:


    <?php the_title(); ?>
    Filed in: <?php the_category(', '); ?>
    <?php the_tags('Taged with: ', ', ') ?>
    <?php the_post_thumbnail('feature-image' ); ?> Change feature-image to whatever name you defined for the featured image
    <?php the_content(); ?>


If you want to show how many comments there are for a post or page you can use this
````
<?php 
  if ( comments_open() ) : ?>
      <span class="comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments' ); ?>
      </span>
<?php endif; ?>
  ````

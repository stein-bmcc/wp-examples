## single.php / content-single.php

### What it does
These files are responsible for showing single posts. For example if you click on one of the posts listed on the homepage, this pair will show the post.

### HTML Structure
The divs and other elements used in content-single.php are just for example purposes. You need to figure out what elements you need based on the theme you are designing.

### Content-single.php Template Tags

This is where you add the HTML for how you want the content of your page to appear.
Some template tags you might want to use:

    <?php the_title(); ?>
    Filed in: <?php the_category(', '); ?>
    <?php the_tags('Taged with: ', ', ') ?>
    <?php the_post_thumbnail('feature-image' ); ?> Change feature-image to whatever name you defined for the featured image
    <?php the_content(); ?>

    These if you want to show next and previous posts
    Change the formatting around the links to suit your needs.
    They can be in separate elements etc.

    <p>
        <?php previous_post_link('%link', '%title', TRUE ); ?>
        &mdash; 
        <?php next_post_link('%link', '%title', TRUE ); ?> 
    </p>


    Custom Field.
    You can use Custom Fields to do things like make links to your work (for web sites for example).
    For the code below to work you would have had to make a custom field named link_url in the post
    <?php  if((get_post_meta($post->ID, "link_url", true))) { ?>
        <p class="work_url">
            <a href="<?php echo get_post_meta($post->ID, "link_url", true); ?>">Visit Site</a>      
        </p>
    <?php } ?>

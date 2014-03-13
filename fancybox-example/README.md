This code uses fancybox: [http://fancyapps.com/fancybox](http://fancyapps.com/fancybox)

and is modified from this Tuts+ tutorial: [http://code.tutsplus.com/tutorials/add-a-responsive-lightbox-to-your-wordpress-theme--wp-28100](http://code.tutsplus.com/tutorials/add-a-responsive-lightbox-to-your-wordpress-theme--wp-28100)

The files you will need to change are:

* fancybox/fancybox-wp-init
* and the add fancybox function in functions.php

## Instructions
0. Download the fancybox folder and put it in your theme folder.
1. Copy the code from functions.php into your functions.php
2. In a Post or Page, Make a gallery, making sure you link to the **File** and not attachment
    * Make sure the files you want for the gallery are uploaded
    * Put the cursor where you want the gallery inserted
    * Click Add Media
    * Click Create Gallery (on the upper left)
    * Click the images you want to use (checks appear)
    * Click Create New Gallery (on lower right)
    * Add captions if you want
    * Set Link To: File
    * Click Insert Gallery (lower right)
3. Once you've made your gallery then in the post make sure you are viewing the Text tab in the editor. The gallery should look like [gallery ids="2,3,5"]
4. If you see cols="" like this [gallery cols="1" ids="2,3,5"] then either delete it entirely or change the number to 0 [gallery cols="0" ids="2,3,5"]
5. Your gallery should now work with fancybox.

    **NOTE** While this technique can be combined with other css to style the gallery, it may have problems with other JavaScript techniques. I have found problems trying to incorporate it with Foundation 5.

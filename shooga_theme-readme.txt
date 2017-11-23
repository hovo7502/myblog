

												Comments Shooga Blank


1) Install all the plugins that are already in the theme.

2) All sliders html and lazy load in file html-slider.php. 

2.1) All sliders js and lazy load js in js/components/all-slider-script.js

3) Use category-filtering-ajax.php, filtering-sub-posts.php and ajax-filtering-post.php file for filtering posts with 

ajax and after that change slug includes category in category.php.  //Files in Folder filtering

4) When posts load during scrolling use  category-ajax-load-posts.php and ajax-load-post.php file.

5) Search in all page and individual category using  search.php file.

6) Video youtube, Video vimeo, Social icons, Facebook Like , Facbook follow, Map created shortcodes.

7) For Video Slider use video-template.php file

8) For admin avatar change src image in function.php

9) You can add svg from back-end or write hard-code. Then You must add 'inject' class for your images, and after then You can change color from style.css. For example I added social icons in footer.php and changed color in style.css.

10) For text height of posts in post feeds to be as high as images of the same psots, I added script. You must add this code "$('.your-classname').dotdotdot()" and replace "your-classname" by your blog "classname", where located your text.
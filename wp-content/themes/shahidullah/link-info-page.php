<?php
/**
 * Template Name: Link Info
 
 */
get_header();
?>


     <div id="inner_contents1">
    <div class="singlepage">
       <div class="titlesingle">  <h1><?php the_title();?></h3></div>
    <div id="contents2">
    <div id="accordionblogroll">
  

                    <?php //wp_list_bookmarks('title_li=&category_before=&category_after='); ?>
                    <?php wp_list_bookmarks('title_li=&categorize=0&limit=5&order=ASC'); ?>







</div>

                    
    
   			 
            
    </div>
    </div>
    </div>
<?php
get_footer();
?>
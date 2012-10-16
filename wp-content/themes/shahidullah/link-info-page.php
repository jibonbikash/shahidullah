<?php
/**
 * Template Name: Link Info
 
 */
get_header();
?>


    
    <div class="singlepage">
       <div class="titlesingle">  <h1><?php the_title();?></h3></div>
    <div id="contents2">
    <div id="accordionblogroll">
  

                    <?php wp_list_bookmarks('title_li=&category_before=&category_after='); ?>







</div>

                    
    
   			 
            
    </div>
    </div>
    
<?php
get_footer();
?>
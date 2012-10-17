<?php
/**
 * Template Name: contact page
 
 */
get_header();
?>
<div id="inner_contents1">
 <div class="singlepage">
    
    <div id="contactpage">
    
	<?php while (have_posts()) : the_post();  ?>
  <div class="titlesingle">  <h1> <?php the_title();?>&nbsp;&nbsp;&nbsp;<?php //if (function_exists("wpptopdf_display_icon")) echo wpptopdf_display_icon();?></h1></div>
    <div class="content">
    <?php	the_content(); ?>
    
    </div>
	<?php
	endwhile; 
	?> 
            
    
    </div>
    </div>
    </div>
<?php
get_footer();
?>
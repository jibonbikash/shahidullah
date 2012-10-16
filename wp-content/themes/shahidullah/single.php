<?php
get_header();
?>

   
    <div class="singlepage">
    
    <div id="contents2">
    
	<?php while (have_posts()) : the_post();  ?>
  <div class="titlesingle">  <h1><?php the_title();?></h1></div>
    <div class="content">
    <?php	the_content(); ?>
    
    <br />
    <?php comments_template( '', true ); ?>
    </div>
    
	<?php
	endwhile; 
	?> 
            
    
    </div>
    </div>
    
<?php
get_footer();
?>
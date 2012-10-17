<?php
get_header();
?>

     <div id="inner_contents1">
    <div class="singlepage">
    
    <div id="contents2">
   <h1 class="search">Search Results</h1><br />
	<?php while (have_posts()) : the_post();  ?>
  <div class="titlesingle">  <h1><?php the_title();?></h1></div>
    <div class="content">
      <p>  <?php the_content_rss('', TRUE, '', 30); ?></p>
    
    <br />
    <?php //comments_template( '', true ); ?>
    </div>
    
	<?php
	
	endwhile; 
	wp_pagenavi();
	?> 
            
    
    </div>
    </div>
     </div>
<?php
get_footer();
?>
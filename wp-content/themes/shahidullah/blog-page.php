<?php
/**
 * Template Name: blog
 
 */
get_header();
?>


    
    <div class="singlepage">
       <div class="titlesingle">  <h1><?php the_title();?></h3></div>
    <div id="contents2">

  
<?php
				$args = array(
				'post_type'     => 'post',
				'post_status'     => 'publish',
				'cat'     => 8,
				'showposts'     =>15,
				'orderby'     =>'ID',
				'order'    => 'DESC'
				);
				$query = new WP_Query( $args );
				?>
<?php while ($query->have_posts()) : $query->the_post();  ?> 
                    
<p class="news-title"><span><a href="<?php the_permalink() ?>" title="<?php the_title();?>"><?php the_title();?></a></span></p>
<div class="news_text">
<?php the_content_rss('', TRUE, '', 150); ?>
</div>
<?php
			 	endwhile; 
				wp_reset_query();
			?>






                    
    
   			 
            
    </div>
    </div>
    
<?php
get_footer();
?>
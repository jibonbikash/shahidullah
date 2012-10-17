<?php
/**
 * Template Name: testimonials
 
 */
get_header();
?>

     <div id="inner_contents1">
    <div class="singlepage">
    
    <div id="contents2">
    <div class="titlesingle">  <h1><?php the_title();?></h1></div>
    

<?php
				$args = array(
				'post_type'     => 'post',
				'post_status'     => 'publish',
				'cat'     => 5,
				'showposts'     =>15,
				'orderby'     =>'ID',
				'order'    => 'DESC'
				);
				$query = new WP_Query( $args );
				?>
                <?php while ($query->have_posts()) : $query->the_post();  ?> 
 <p class="titletestimonial"><?php the_title();?></p>
  <div class="testimonial-wrapper">
 <a name="<?php the_title();?>" id="<?php the_title();?>"></a> <?php 
 the_post_thumbnail('thumbnail', array('class' => 'alignleft'));
 the_content(); ?> </div>
 <?php
			 	endwhile; 
				wp_reset_query();
			?>




            
    </div>
    </div>
    </div>
    
<?php
get_footer();
?>
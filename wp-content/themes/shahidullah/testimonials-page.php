<?php
/**
 * Template Name: testimonials
 
 */
get_header();
?>
<style type="text/css">


</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
<!--http://www.itechroom.com-->
$(document).ready(function($) {
       $('#accordion div').hide();
       $('#accordion p span').click(function(){
               $('#accordion div').slideUp();
               $(this).parent().next().slideDown();
               return false;
       });
});

</script>
   
    <div class="singlepage">
    
    <div id="contents2">
    <div class="titlesingle">  <h1><?php the_title();?></h3></div>
    <div id="accordion">
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
                    
<p class="news-title"><span><?php echo get_post_meta($post->ID, 'jb_testimetaname', true);?>,<?php echo get_post_meta($post->ID, 'jb_testcompanyname', true);?></span></p>
<div class="news_text">
<p align="right"><?php if (function_exists("wpptopdf_display_icon")) echo wpptopdf_display_icon();?></p
<?php the_content(); ?>
</div>
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
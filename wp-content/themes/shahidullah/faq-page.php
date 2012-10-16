<?php
/**
 * Template Name: faq
 
 */
get_header();
?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js" type="text/javascript"></script>
 <script src="<?php bloginfo('template_directory'); ?>/js/jq-faq-2.js"></script> 
    
    <div class="singlepage">
    
    <div id="contents2">
    <div class="titlesingle">  <h1><?php the_title();?></h1></div>
    
   <div id="faqSection" class="faq">
<?php
				$args = array(
				'post_type'     => 'post',
				'post_status'     => 'publish',
				'cat'     => 10,
				
				'orderby'     =>'ID',
				'order'    => 'DESC'
				);
				$query = new WP_Query( $args );
				?>
                <?php while ($query->have_posts()) : $query->the_post();  ?> 
 <p class="question"><?php the_title();?></p>
  <div class="answer-wrapper">
 <a name="<?php the_title();?>" id="<?php the_title();?>"></a> <?php the_content(); ?> </div>
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
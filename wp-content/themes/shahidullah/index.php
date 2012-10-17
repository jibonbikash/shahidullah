<?php
get_header();
?>
<div id="banner">
    <?PHP do_action('slider', 'homeslider'); ?>
<?php //echo get_royalslider(1); ?>
<?php //if(function_exists('displayDDSlider')) { echo displayDDSlider(array(name=>"homepage")); } ?>
    </div>
    
    <div id="contents1">
    
			<div class="contents1_1">
            	<div class="contents1_1_top">
                 <?php 
	query_posts('page_id=7');
        global $more;  
while (have_posts()) : the_post();   ?>  

                	<h1><?php the_title();?></h1><img src="<?php bloginfo('template_directory'); ?>/images/shahidullah-icon1.jpg" alt="icon" />
            <p>        
                    <?php the_excerpt(); ?><br />
                    	<?php //the_content_rss('', TRUE, '', 40); ?><a href="<?php the_permalink() ?>" title="<?php the_title();?>">read more</a>
                    </p>
     <?php
 endwhile;  
 wp_reset_query();
 ?>               
                    
                </div>
            </div>
            
            
            <div class="contents1_line"></div>
            
            <div class="contents1_1">
            	<div class="contents1_1_top">
                	<h1><a class="testimonial" href="<?php echo esc_url( home_url( '/' ) ); ?>services">Services</a></h1><img src="<?php bloginfo('template_directory'); ?>/images/shahidullah-icon2.jpg" alt="icon" />
                    
                    <div class="contents1_1_top2">
                    <?php 
	query_posts('page_id=11');
        global $more;  
while (have_posts()) : the_post();   ?>  
            <p>        
                    <?php the_excerpt(); ?> 
                    	<?php //the_content_rss('', TRUE, '', 40); ?><a href="<?php the_permalink() ?>" title="<?php the_title();?>">read more</a>
                    </p>
     <?php
 endwhile;  
 wp_reset_query();
 ?>               
     
 
                    </div>
                  
                    
                </div>
            </div>
            
            
            <div class="contents1_line"></div>
           
            <div class="contents1_1">
            	<div class="contents1_1_top">
                	<h1><a class="testimonial" href="<?php echo esc_url( home_url( '/' ) ); ?>testimonials">Testimonial</a></h1><img src="<?php bloginfo('template_directory'); ?>/images/shahidullah-icon3.jpg" alt="icon" />
                    <div class="clear"></div>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.totemticker.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#vertical-ticker').totemticker({
				row_height	:	'150px',
				speed       :   800,
				interval    :   4000,
				next		:	null,
				previous	:	null,
				stop		:	null,
				start		:	null,
				mousestop	:	true,
			});
		});
	</script>
		<ul id="vertical-ticker">
         <?php
				$args = array(
				'post_type'     => 'post',
				'post_status'     => 'publish',
				'cat'     => 5,
				'showposts'     => 10,
				'orderby'     =>'ID',
				'order'    => 'DESC'
				);
				$query = new WP_Query( $args );
				?>
           <?php while ($query->have_posts()) : $query->the_post();  ?>      
           
			<li>
           <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
		   <?php  the_post_thumbnail( 'testimonial'); ?>
    <?php //the_content();?>
  <p>  <?php the_content_rss('', TRUE, '', 10); ?></p>
    <p class="third"><?php echo get_post_meta($post->ID, 'jb_testimetaname', true);?><br /><?php echo get_post_meta($post->ID, 'jb_testcompanyname', true);?></p>
 </a>
            </li>
             <?php
			 	endwhile; 
				wp_reset_query();
			?>
			
		</ul>
        

<?php //dynamic_sidebar( 'primary-widget-area' ); ?>
                    
                    
                </div>
            </div>
            <div class="contents1_line2"></div>
            
            <div class="contents1_1">
            	<div class="contents1_1_top">
                	<h1>Blog</h1><img src="<?php bloginfo('template_directory'); ?>/images/shahidullah-icon4.jpg" alt="icon" />
  <?php 
	query_posts('page_id=113');
        global $more;  
while (have_posts()) : the_post();   ?>  
            <p>        
                    <?php the_excerpt(); ?> <br />
                    
                    	<?php //the_content_rss('', TRUE, '', 40); ?><a href="<?php the_permalink() ?>" title="<?php the_title();?>">read more</a>
                    </p>
     <?php
 endwhile;  
 wp_reset_query();
 ?>               
                </div>
            </div>
            
    </div>
    
    
    <div id="contents2">
    
    	<div class="contents2_left">
        <?php 
	query_posts('page_id=60');
        global $more;  
while (have_posts()) : the_post();   ?> 

        	<h1><?php the_title();?></h1>
            <div class="contents2_left_1">
            
                
                <?php if ( has_post_thumbnail()) : ?>
				   <?php //the_post_thumbnail(); ?>
                   <?php  the_post_thumbnail( 'wellcome'); ?>
                 <?php endif; ?>
                 <?php the_content(); ?>

                
            
            </div>
      <?php
			 	endwhile; 
				wp_reset_query();
			?>
            
            <img class="contents2_left_1_img" src="<?php echo get_option('jb_singleimg'); ?>" alt="image" />
        </div>
        
        
        <div class="contents2_right">
        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>company-formation/">Company Formation</a></h1>
            <p>
			 <?php 
	query_posts('page_id=57');
        global $more;  
while (have_posts()) : the_post();   ?> 
<?php the_excerpt(); ?> 
<?php //the_content_rss('', TRUE, '', 42); ?>
     
<?php
 endwhile;  
 wp_reset_query();
 ?>  <br /><br /><a href="<?php echo esc_url( home_url( '/' ) ); ?>company-formtion-form/">FORM A COMPANY NOW</a>
            </p>
       
            
            <div class="h1_heading_2"><a class="sixth" href="<?php echo esc_url( home_url( '/' ) ); ?>business-software">Business Software</a></div>
            <p><?php //echo get_option('jb_bizsoft'); ?>
            </p>
            
            <div class="h1_heading_3">
            <ul class="second">
             <?php
				$args = array(
				'post_type'     => 'post',
				'post_status'     => 'publish',
				'cat'     => 7,
				'showposts'     => 6,
				'orderby'     =>'ID',
				'order'    => 'DESC'
				);
				$query = new WP_Query( $args );
				?>
                <?php while ($query->have_posts()) : $query->the_post();  ?> 
                
            	<li><a class="seventh"  href="<?php echo esc_url( home_url( '/' ) ); ?>business-software#<?php the_title();?>"><?php the_title();?></a></li>
                
                 <?php
 endwhile;  
 wp_reset_query();
 ?>     


            </ul>
            </div>
            
        </div>
    
    
    </div>
   
     
<?php
get_footer();
?>
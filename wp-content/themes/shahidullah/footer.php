</div>
<div id="footer">
		<div class="footer_container">
        
        	<div class="footer_top">
            	<div class="footer_top_box1">
                	<img src="<?php bloginfo('template_directory'); ?>/images/shahidullah-acca.jpg" alt="acca logo" />
                    <p>Association of Chartered Certified Accountants</p>
                </div>
                
                <div class="footer_top_line"></div>
                
                <div class="footer_top_box2">
                	<div class="footer_top_box2_h1_container"><h1>Related Links</h1></div>
                    <div class="footer_top_box2_ul_left">
                    	<ul>
                        	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact us</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About us</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services">Services</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>healthcare-and-healthcare-professionals/">Healthcare professionals</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company-formation">Company Formation</a></li>
                             <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq">Faq</a></li>
                        </ul>
                    </div>
                    <div class="footer_top_box2_ul_right">
                    	<ul>
                        	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>business-software">Bookkeeping software</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sectors">Sector</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>r-d-claims/">R &amp; D Claims</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Career</a></li>
                           
                        </ul>
                    </div>
                    
                </div>
                
                <div class="footer_top_line2"></div>
                
                <div class="footer_top_box3">
                	<div class="footer_top_box2_h1_container"><h1 class="client"><a class="linkinfo" href="#">Our Clients</a></h1></div>
                   
                  <?php
				$args = array(
				'post_type'     => 'post',
				'post_status'     => 'publish',
				'cat'     => 6,
				'showposts'     => 3,
				'orderby'     =>'ID',
				'order'    => 'DESC'
				);
				$query = new WP_Query( $args );
				?>
             <div id="slide">
			 <?php while ($query->have_posts()) : $query->the_post();  ?>    
             <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
        <?php  the_post_thumbnail( 'clients'); ?>
          </a>
                          <?php
			 	endwhile; 
				wp_reset_query();
			?>
            
                  </div>
                  
                </div>
                                
                <div class="footer_top_line"></div>
                
                <div class="footer_top_box4">
                	<h1><a class="linkinfo" href="#">Links &amp; Info</a></h1>
                   <?php wp_list_bookmarks('title_li=&categorize=0&limit=5'); ?>
                  
                </div>
                
            </div>    
        	
            <div class="footer_bottom">
            	<div class="footer_bottom_top">
                	<ul>
                    	<li><a href="#">Disclaimer</a></li>
                        <li>|</li>
                        <li><a href="#">Staff Login </a></li>
                    </ul>
                </div>
                
                <div class="footer_bottom_bottom">Shahidullah &amp; Co - All rights reserved</div>
            </div>
            
            	
        </div>

</div>	

<?php
if(!is_home())
{

?>
<script type='text/javascript' src='<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/jquery/jquery.js?ver=1.7.2'></script>
<?php
}
?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ticker00.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#fade').list_ticker({
			speed:2000,
			effect:'fade'
		});
		jQuery('#slide').list_ticker({
			speed:5000,
			effect:'fade'
		});		
	})
	</script>

<?php
wp_footer();
?>
</body>
</html>

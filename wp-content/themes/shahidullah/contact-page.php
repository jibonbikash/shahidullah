<?php
/**
 * Template Name: contact page
 
 */
get_header();
?>
<style type="text/css">


</style>


    
    <div class="singlepage">
    
    <div id="contents2">
    <div class="titlesingle">  <h1><?php the_title();?></h3></div>
    

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"type="text/javascript"></script>

     <script language="javascript">
     $(document).ready(function() {
          $('#toggleButton').click(function() {
               if ($('#toggleSection').is(":hidden"))
               {
                    $('#toggleSection').fadeIn("slow");
				//	$('#toggleSection').slideDown(2000);
				//	$('#toggleSection1').slideUp(1500);
					$('#toggleSection1').fadeOut(100);
					$('#toggleSection2').fadeOut(100);
					//$('#toggleSection2').slideUp(1500);
               } else {
                    $('#toggleSection').fadeIn(1500);
				//	$('#toggleSection1').slideUp(1500);
					//$('#toggleSection2').slideUp(1500);
					$('#toggleSection1').fadeOut(100);
					$('#toggleSection2').fadeOut(100);
					// $('#toggleSection1').fadeOut("slow");
               }
               return false;
          });
     });
	 
	 $(document).ready(function() {
	           $('#toggleButton1').click(function() {
               if ($('#toggleSection1').is(":hidden"))
               {
                    $('#toggleSection1').fadeIn("slow");
					$('#toggleSection').fadeOut(50);
					$('#toggleSection2').fadeOut(50);
					
               } else {
                    $('#toggleSection1').slideUp(1500);
					$('#toggleSection').slideUp(1500);
					$('#toggleSection2').slideUp(1500);
               }
               return false;
          });
     });
	 
	 	 $(document).ready(function() {
	           $('#toggleButton2').click(function() {
               if ($('#toggleSection2').is(":hidden"))
               {
                    $('#toggleSection2').fadeIn("slow");
					$('#toggleSection').fadeOut(50);
					$('#toggleSection1').fadeOut(50);
					
               } else {
                    $('#toggleSection2').slideUp(1500);
					$('#toggleSection').slideUp(1500);
					$('#toggleSection1').slideUp(1500);
               }
               return false;
          });
     });
	 
	 
     </script>
      <div class="contactpage"><div class="emaill"><a href="#" id="toggleButton">Email</a></div><div class="emaill"><a href="#" id="toggleButton1">Address</a></div><div class="emaill"><a href="#" id="toggleButton2">Phone</a> </div></div>
    <div id="toggleSection">
		
         <?php 
	query_posts('page_id=131');
        global $more;  
while (have_posts()) : the_post();   ?>  
<br />
<h4 class="restitle"><?php the_title();?></h4><br />
                	
                    	<?php the_content(); ?>
                 
     <?php
 endwhile;  
 wp_reset_query();
 ?>               
         </div>
         <div id="toggleSection1" style="display:none;">

         <?php 
	query_posts('page_id=137');
        global $more;  
while (have_posts()) : the_post();   ?>  
<br />
<h4 class="restitle"><?php the_title();?></h4><br />
                	
                    	<?php the_content(); ?>
                 
     <?php
 endwhile;  
 wp_reset_query(); 
 ?>
         </div>
  <div id="toggleSection2" style="display:none;"> 			 
             <?php 
	query_posts('page_id=145');
        global $more;  
while (have_posts()) : the_post();   ?>  
<br />
<h4 class="restitle"><?php the_title();?></h4><br />
                	
                    	<?php the_content(); ?>
                 
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
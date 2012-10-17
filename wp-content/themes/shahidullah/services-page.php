<?php
/**
 * Template Name: services
 
 */
get_header();
?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js" type="text/javascript"></script>
 
	
  <div id="inner_contents1">
    <div class="singlepage">
    
    <div id="contents2">
    <div class="titlesingle">  <h1><?php the_title();?></h1></div>
 <?php
/*function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}*/
?>   
<?php
//echo $_GET["action"];
  //echo curPageURL();
  
?>
<?php
if($_GET["action"])
{
?>
<script>

$(document).ready(function() {
	
	$('.answer-wrapper<?php echo $_GET["action"];?>').slideToggle();
	$('.answer-wrapper').hide();
	$('.question').live('click', function() {
		$(this).next().slideToggle();
	});
	//$("p").text("The DOM is now loaded and can be manipulated.");
});

</script>

<?php
}
else
{
?>
<script>

$(document).ready(function() {
	$('.answer-wrapper').hide();

	$('.question').live('click', function() {
		$(this).next().slideToggle();
	});
});

</script>

<?php
}
?>

<div id="faqSection" class="faq">
<?php
				$args = array(
				'post_type'     => 'post',
				'post_status'     => 'publish',
				'cat'     => 4,
				'post__not_in'     => array(159),
				'showposts'     =>20,
				'orderby'     =>'ID',
				'order'    => 'DESC'
				);
				$query = new WP_Query( $args );
				?>
<?php while ($query->have_posts()) : $query->the_post();  ?> 
 <p class="question"><?php the_title();?>
 
 </p>


  <div class="answer-wrapper<?php if($_GET["action"]=="VAT"){echo $_GET["action"];}?>" >

  <p align="right"><?php if (function_exists("wpptopdf_display_icon")) echo wpptopdf_display_icon();?>
</p> <a name="<?php the_title();?>" id="<?php the_title();?>"></a> <?php the_content(); ?> </div>
 <?php
			 	endwhile; 
				wp_reset_query();
			?>

 <?php 
	query_posts('p=159');
        global $more;  
while (have_posts()) : the_post();   ?>  
<p class="question"><?php the_title();?></p>
<div class="answer-wrapper">

<p align="right"><?php if (function_exists("wpptopdf_display_icon")) echo wpptopdf_display_icon();?></p>
<?php the_content(); ?>
</div>
<?php
			 	endwhile; 
				wp_reset_query();
			?>
            
                 <style>
div.blockk
{
	display:block !important;
}
</style>
        <?php 
	query_posts('page_id=57');
        global $more;  
while (have_posts()) : the_post();   ?>  
<p class="question11"><a href="<?php the_permalink() ?>" title="<?php the_title();?>"><?php the_title();?></a></p>
<?php
			 	endwhile; 
				wp_reset_query();
			?>  
            
            
                 
            <?php 
	query_posts('page_id=116');
        global $more;  
while (have_posts()) : the_post();   ?>  
<p class="question11"><a href="<?php the_permalink() ?>" title="<?php the_title();?>"><?php the_title();?></a></p>
<?php
			 	endwhile; 
				wp_reset_query();
			?>  


            <?php 
	query_posts('page_id=118');
        global $more;  
while (have_posts()) : the_post();   ?>  
<p class="question11"><a href="<?php the_permalink() ?>" title="<?php the_title();?>"><?php the_title();?></a></p>
<?php
			 	endwhile; 
				wp_reset_query();
			?>  
     </div>  


</div>

            
    </div>
    </div>
    </div>
<?php
get_footer();
?>
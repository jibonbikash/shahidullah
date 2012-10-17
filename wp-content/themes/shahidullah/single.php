<?php
get_header();
?>

    <div id="inner_contents1">
    <div class="singlepage">
    
    <div id="contents2">
    
	<?php while (have_posts()) : the_post();  ?>
    <?php if(get_post_meta($post->ID, 'jb_testimetaname', true))
	{
	?>
    <div class="titlesingle">  <h1><?php echo get_post_meta($post->ID, 'jb_testimetaname', true); ?>, <?php echo get_post_meta($post->ID, 'jb_testcompanyname', true);?></h1></div>
    <?php
	}
	else
	{
	?>
  <div class="titlesingle">  <h1><?php the_title();?></h1></div>
  <?php
	}
	?>
    <div class="content">
    <?php 
if ( has_post_thumbnail() ) {
  //the_post_thumbnail();
  the_post_thumbnail('medium', array('class' => 'alignleft'));
} 
?>
    <?php	the_content(); ?>
    
    <br /></div>
    <?php
global $post;
$categories = get_the_category($post->ID);
//var_dump($categories);
if($categories[0]->term_id==8)
{
	comments_template( '', true );
}
?>
    <?php //comments_template( '', true ); ?>
    
    
	<?php
	endwhile; 
	?> 
            
    
    </div>
    </div>
     </div>
<?php
get_footer();
?>
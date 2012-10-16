<?php
/**
 * The Header for shahidullah theme.
 *
 *
 * @package WordPress
 * @subpackage shahidullah
 * @since shahidullah 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php
	wp_head();
?>

<?php
$thene_url = get_bloginfo('template_directory');
if(is_home())
{
	?>
    
<style>
body
{
	background:url(<?php bloginfo('template_directory'); ?>/images/shahidullah-body-bg.jpg) repeat-x;
}
</style>
<?php
}
else
{
?>
<style>
body
{
	background:url(<?php bloginfo('template_directory'); ?>/images/shahidullah-body-bg2.jpg) repeat-x;
}
</style>
<?php
}
?>

</head>
<div id="container">

	<div id="top">
		 <div class="top_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_option('jb_logo'); ?>" alt="Logo" /></a></div>
         <div class="top_right">
         	<div class="top_right_up"><div class="top_right_up_date"><?php
$day=date("l");
$date=date("j");
$suffix=date("S");
$month=date("F");
$year=date("Y");
echo $day . ", " . $month . " " . $date . $suffix . ", " . $year;
?></div>
<div id="headrsearch"><form id="searchform" method="get" action="<?php bloginfo('home'); ?>" class="form-wrapper cf">
	
		<input type="text" name="s" id="s" placeholder="Search" size="15" />
		<button type="submit">Go</button>
	
	</form></div>
</div>
            
            <div class="top_right_menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
            	
            </div>
         </div>
	</div>
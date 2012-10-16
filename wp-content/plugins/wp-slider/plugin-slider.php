<?PHP
/*
  Plugin Name: Slider Evolution
  Plugin URI: http://codecanyon.net/item/slider-evolution-for-wordpress/244096
  Description: <strong>Slider Evolution</strong> is a JQuery plugin that lets you easily create powerful javascript sliders with very nice transition effects. Enhance your website by adding a unique and attractive slider!
  Version: 2.0.0
  Author: Eduardo Daniel Sada
  Author URI: http://codecanyon.net/user/aeroalquimia/portfolio
*/

$myplugin = array();  
$myplugin['file'] = __FILE__;

include("classes/aeropanel.php");
include("panel-config.php");

$sxs_panel->queue($sxs_panel->path() . "/js/aeropanel/themepreview.js"    , "script");
$sxs_panel->queue($sxs_panel->path() . "/js/aeropanel/ajaxupload.js"      , "script");
$sxs_panel->queue($sxs_panel->path() . "/js/msgbox/jquery.msgbox.min.js"  , "script");
$sxs_panel->queue($sxs_panel->path() . "/js/msgbox/jquery.msgbox.css"     , "style");

$sxs_panel->addon($sxs_panel->path(true) . "/addons/slider-new.php"       , "slider-new");
$sxs_panel->addon($sxs_panel->path(true) . "/addons/slider-manager.php"   , "slider-manager");
$sxs_panel->addon($sxs_panel->path(true) . "/addons/slider-backend.php"   , "slider-backend");
$sxs_panel->addon($sxs_panel->path(true) . "/addons/slider-options.php"   , "slider-options");
$sxs_panel->addon($sxs_panel->path(true) . "/addons/slider-themes.php"    , "slider-themes");
$sxs_panel->addon($sxs_panel->path(true) . "/addons/slider-uploader.php"  , "slider-uploader");

if (isset($_GET['subpage']) && $_GET['subpage']==1)
{
  $sxs_panel->queue($sxs_panel->path() . "/js/slider/jquery.slider.min.js", "script");
}

function sxs_myplugin_init()
{
  if(is_admin() && isset($_GET['page']) && $_GET['page'] == basename(__FILE__))
  {
    wp_enqueue_style('thickbox.css', get_bloginfo('wpurl') . '/wp-includes/js/thickbox/thickbox.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
  }
}

add_action('init','sxs_myplugin_init');

function sxs_myplugin_head()
{
  global $sxs_panel;
  wp_deregister_script('jquery');
  wp_register_script('jquery', $sxs_panel->path().'/js/jquery.min.js', false, '1.7.1');
  wp_register_script('jquery-slider', $sxs_panel->path().'/js/slider/jquery.slider.min.js', array('jquery'), '2.0.0');
  wp_enqueue_script('jquery-slider');
}
add_action('wp_head', 'sxs_myplugin_head', 1);


function sxs_myplugin_action($slider_id)
{
  echo sxs_myplugin_slider($slider_id);
}
add_action("slider", "sxs_myplugin_action");

function sxs_myplugin_shortcode($atts)
{
  return sxs_myplugin_slider($atts['id']);
}
add_shortcode("slider", "sxs_myplugin_shortcode");


function sxs_myplugin_slider($slider_id)
{
  global $sxs_panel;
  
  $html = '';
  
  if ($sxs_panel->get_option("slider"))
  {
    foreach((array) get_option($sxs_panel->plugin['shortname']."_slider") as $i=>$slider)
    {
      if ($slider['id'] == $slider_id)
      {
        $html .= '<div class="jquery-slider-theme-'.$slider['options']['theme'].'"><div class="slider-wrapper-'.$slider_id.'">';

        foreach ((array)$slider['imgs'] as $img)
        {
          $ini = '<div>';
          $end = '</div>';
          if ($img['type']=='image')
          {
            
            if (isset($img["lightbox"]) && $img["lightbox"] == true && !$img["href"])
            {
              $img["href"] = $img["image"];
            }

            if ($img["href"])
            {
              $ini .= '<a href="'.$img["href"].'" '.(isset($img["lightbox"]) && $img["lightbox"] == true ? 'class="lightbox"' : '').'>';
              $end = '</a>' . $end;
            }
            
            $ini .= '<img src="'.$img["image"].'" alt="" style="display:none;" class="jquery-slider-image-loading"/>';
            
            if ($img["label"])
            {
              $ini .= '<div class="caption">'.$img["label"].'</div>';
            }
            
            $html .= $ini . $end;
          }
          else
          {
            $html .= $ini . do_shortcode(stripslashes($img['content'])) . $end;
          }
        }
        
        $html .= '</div></div>';
        break;
      }
    }

    $html .= sxs_myplugin_initializeplugin($slider);
  }
  
  return $html;
}



function sxs_myplugin_initializeplugin($slider)
{
  global $sxs_panel;
  
  $html = '';

  if ($slider['options']['transition'] == "baralternate")
  {
    $transition = '["barleft", "barright"]';
  }
  elseif ($slider['options']['transition'] == "sliderandom")
  {
    $transition = '["slideleft", "slidetop", "slideright", "slidebottom"]';
  }
  else
  {
    $transition = "'{$slider['options']['transition']}'";
  }

  $html .= '
    <link rel="stylesheet" href="'.$sxs_panel->path().'/js/slider/themes/'.$slider['options']['theme'].'/jquery.slider.css" type="text/css" media="all"/>
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="'.$sxs_panel->path().'/js/slider/themes/'.$slider['options']['theme'].'/jquery.slider.ie6.css" />
    <![endif]-->
    ';

  $html .= '
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".slider-wrapper-'.$slider['id'].'").slideshow({';
  
  if ((int)$slider['options']['width']>0)
  {
    $html .= '
        width         : '.(int) $slider['options']['width'].',';
  }
  
  if ((int)$slider['options']['height']>0)
  {
    $html .= '
        height        : '.(int) $slider['options']['height'].',';
  }

  $html .= '
        navigation    : '.(int) $slider['options']['navigation'].',
        selector      : '.(int) $slider['options']['selector'].',
        timer         : '.(int) $slider['options']['timer'].',
        control       : '.(int) $slider['options']['control'].',
        pauseOnHover  : '.(int) $slider['options']['pauseonhover'].',
        pauseOnClick  : '.(int) $slider['options']['pauseonclick'].',
        loop          : '.(int) $slider['options']['loop'].',
        slideshow     : '.(int) $slider['options']['slideshow'].',
        bars          : '.(int) $slider['options']['bars'].',
        columns       : '.(int) $slider['options']['columns'].',
        rows          : '.(int) $slider['options']['rows'].',
        transition    : '.$transition.',
        duration      : '.(int) $slider['options']['duration'].',
        delay         : '.(int) $slider['options']['delay'].'
      });
      
      $(".jquery-slider-image-loading").fadeIn(300);
    });
  </script>
  ';
  return $html;
}


function sxs_ajax_uploadimage()
{
	global $wpdb;

	$image_filename = $_FILES['userfile'];
	$uploaded_image = wp_handle_upload($image_filename, array('test_form'=>false, 'action'=>'wp_handle_upload'));

	if(!empty($uploaded_image['error']))
	{
		echo 'Error: ' . $uploaded_image['error'];
	}
	else
	{
		echo $uploaded_image['url'];
	}
	die();
}
add_action('wp_ajax_sxs_ajax_uploadimage', 'sxs_ajax_uploadimage');

?>
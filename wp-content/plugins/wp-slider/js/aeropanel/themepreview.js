jQuery(document).ready(function(){
  
  jQuery("select.theme").change(function() {
    jQuery(".theme_preview").hide();
    jQuery(".theme_" + jQuery(this).val()).fadeIn();
  }).each(function() {
    jQuery(".theme_preview").hide();
    jQuery(".theme_" + jQuery(this).val()).fadeIn();
  });
  
});
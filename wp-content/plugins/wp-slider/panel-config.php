<?PHP

  $myplugin['shortname']  = "sxs";
  $myplugin['type']       = "Plugin";
  $myplugin['options']    = 
  array(

    array( "type" => "subpage", "name" => "Slides", "dontsave" => true, "tabs" => array(
      array( "type" => "tab", "name" => "Manage Slides", "options" => array(

        array( "type" => "slider-backend", "name" => "Slider Backend"),
        array( "type" => "slider-manager", "name" => "Slider Manager"),
        array( "type" => "slider-new", "name" => "Add New Slider"),

      ))
    )),
    
    


    array( "type" => "subpage", "name" => "Options", "dontsave" => true, "hidden"=>true, "tabs" => array(
      array( "type" => "tab", "name" => "Options", "options" => array(

        array( "type" => "slider-backend", "name" => "Slider Backend"),
        array( "type" => "slider-options", "name" => "Options"),

      )),

      array( "type" => "tab", "name" => "Theme", "options" => array(
        array( "type" => "slider-themes", "name" => "Themes"),
      )),

      array( "type" => "tab", "name" => "Upload Images", "options" => array(
        array( "type" => "slider-uploader", "name" => "Add Image"),
      )),

      array( "type" => "tab", "name" => "Preview", "options" => array(
        array( "type" => "help", "value" => "addons/slider-preview.php" )
      )),

    )),
    
    

    array( "type" => "subpage", "name" => "Help", "dontsave" => true, "tabs" => array(
      array( "type" => "tab", "name" => "Main", "options" => array(
        array( "type" => "help", "value" => "help/index.html" ),
      )),

      array( "type" => "tab", "name" => "Shortcodes", "options" => array(
        array( "type" => "help", "value" => "help/shortcodes.html" ),
      )),
    )),
  );

  $sxs_panel = new sxs_plugin_aeropanel($myplugin);

?>
<?PHP
  //delete_option( $this->plugin['shortname'].'_slider' );

  function sxs_cmp_arr($a, $b)
  {
    $a = (int) $a['order'];
    $b = (int) $b['order'];

    if ($a == $b) {
      return 0;
    }
    return ($a < $b) ? -1 : 1;
  }

  $slider     = get_option($this->plugin['shortname']."_slider");
  $current_id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;

  if (isset($_REQUEST['action']))
  {

    if ('addon_new_slider' == $_REQUEST['action'])
    {
      if (strlen(trim($_REQUEST[$this->plugin['shortname']."_" . "slider_name"])) > 0 && strlen(trim($_REQUEST[$this->plugin['shortname']."_" . "slider_id"])) > 0 )
      {

        // Buscar que no haya un slider con el mismo id
        foreach((array)$slider as $void)
        {
          if ($void['id'] == $_REQUEST[$this->plugin['shortname']."_" . "slider_id"]) $sxs_salir = true;
        }

        // Importar opciones por defecto
        require_once($this->path(true) . '/addons/slider-defaults-options.php');

        foreach ($sxs_defaults_options as $sxs_default_option)
        {
          $sxs_temp_options[$sxs_default_option['id']] = $sxs_default_option['default'];
        }

        if (!$sxs_salir) // Si no hay ningun slider con el mismo id continuamos
        {
          // Guardar
          if (is_array($slider))
          {
            $this->save_option("slider", array_merge($slider, array(
              array(
                "id"      => $_REQUEST[$this->plugin['shortname']."_" . "slider_id"],
                "name"    => htmlspecialchars($_REQUEST[$this->plugin['shortname']."_" . "slider_name"]),
                "desc"    => htmlspecialchars($_REQUEST[$this->plugin['shortname']."_" . "slider_desc"]),
                "options" => $sxs_temp_options
              )
            )));
          }
          else
          {
            $this->add_option("slider", array(
              array(
                "id"      => $_REQUEST[$this->plugin['shortname']."_" . "slider_id"],
                "name"    => htmlspecialchars($_REQUEST[$this->plugin['shortname']."_" . "slider_name"]),
                "desc"    => htmlspecialchars($_REQUEST[$this->plugin['shortname']."_" . "slider_desc"]),
                "options" => $sxs_temp_options
              )
            ));
          }
        }
        else
        {
          echo '<script type="text/javascript">jQuery(document).ready(function($) { $.msgbox("<p><strong>Error: '.$this->plugin['Title'].'</strong></p>Please enter a different name. Each Slide needs to have an unique id.", {type: "error"}) });</script>';
        }
      }
      else
      {
        echo '<script type="text/javascript">jQuery(document).ready(function($) { $.msgbox("<p><strong>Error: '.$this->plugin['Title'].'</strong></p>Please complete the fields required.", {type: "error"}) });</script>';
      }
    }

    if ('addon_slider_remove' == $_REQUEST['action'])
    {
      array_splice($slider, $current_id, 1);
      $this->save_option("slider", $slider);
    }

    if ('addon_slider_save_options' == $_REQUEST['action'])
    {
      $save = $_REQUEST[$this->plugin['shortname']]['options'];

      if (is_array($slider) && is_array($slider[$current_id]) && is_array($save))
      {
        $slider[$current_id]['options'] = array_merge((array)$slider[$current_id]['options'], $save);
        $this->save_option("slider", $slider);
      }
    }

    if ('addon_slider_img_upload' == $_REQUEST['action'] && "" != trim($_REQUEST[$this->plugin['shortname']]['img']["image"]))
    {
      $slider[$current_id]['imgs'][] = $_REQUEST[$this->plugin['shortname']]['img'];
      $this->save_option("slider", $slider);
    }

    if ('addon_slider_inline_upload' == $_REQUEST['action'] && "" != trim($_REQUEST[$this->plugin['shortname']]['inline']["content"]))
    {
      $slider[$current_id]['imgs'][] = $_REQUEST[$this->plugin['shortname']]['inline'];
      $this->save_option("slider", $slider);
    }

    if ('addon_slider_save' == $_REQUEST['action'] && is_array($_REQUEST["{$this->plugin['shortname']}_slider"]))
    {
      $void = $_REQUEST["{$this->plugin['shortname']}_slider"];
      usort($void, "sxs_cmp_arr");
      $slider[$current_id]['imgs'] = $void;
      $this->save_option("slider", $slider);
    }


    if ('addon_slider_img_remove' == $_REQUEST['action'])
    {
      array_splice($slider[$current_id]['imgs'], (int)$_REQUEST['slide'], 1);
      $this->save_option("slider", $slider);
    }
  }
?>
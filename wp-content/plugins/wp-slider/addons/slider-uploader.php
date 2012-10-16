<?PHP
  //echo "<pre>";
  //print_r (get_option($this->plugin['shortname']."_slider"));
  //echo "</pre>";
?>

<div class="section section_table">
  <h2>Slide: <?php echo $current_slider['name']?></h2>
  <?php if (strlen($current_slider['desc'])>0) { echo "<p>{$current_slider['desc']}</p>"; } ?>
</div>

  <?php if (count($current_slider['imgs']) > 0) : ?>
  <div class="section section_table">

    <?php if (isset($_REQUEST['action']) && 'addon_slider_save' == $_REQUEST['action']) : ?>
    <div class="updated fade fadeOut"><p><strong><?php echo $this->plugin['Title'] ?> settings saved.</strong></p></div>
    <?php endif; ?>

    <table class="widefat">
    <?php foreach((array)$current_slider['imgs'] as $i=>$slide) : ?>
      <tr>
      <?php if ($slide['type'] == "image") : ?>
        <td>
          <div class="option_text">
            <input type="hidden" class="hidden" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}][type]" ?>" value="image"/>
            <label>Order</label>
            <input type="text" class="text text-mini" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}]["."order"."]" ?>" value="<?php echo $i + 1; ?>"/>
          </div>
        </td>

        <td>
          <div class="option_text">
            <label>Image src</label>
            <input type="text" class="text text-full" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}]["."image"."]" ?>" value="<?php echo $slide["image"] ?>" />
          </div>

          <div class="option_text">
            <label>Link href</label>
            <input type="text" class="text" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}]["."href"."]" ?>" value="<?php echo $slide["href"] ?>" />
          </div>

          <div class="option_text">
            <label>Description</label>
            <input type="text" class="text" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}]["."label"."]" ?>" value="<?php echo $slide["label"] ?>" />
          </div>

        </td>

        <td>
          <div class="textcenter">
            <a href="<?php echo $slide["image"] ?>" target="_blank"><img src="<?php echo $slide["image"] ?>" width="95"/></a>
            <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . $subpage . "&amp;action=addon_slider_img_remove" . "&amp;id=" . $current_id . "&amp;slide=" . $i . "#upload-images";?>" class="attention sxs_remove" rel="Are you sure that you want to delete the selected image?">Remove</a>
          </div>
        </td>

      
      <?php elseif ($slide['type'] == "inline") : ?>
        <td>
          <div class="option_text">
            <input type="hidden" class="hidden" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}][type]" ?>" value="inline"/>
            <label>Order</label>
            <input type="text" class="text text-mini" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}]["."order"."]" ?>" value="<?php echo $i + 1; ?>"/>
          </div>
        </td>
        <td>
          <div class="option_textarea">
            <textarea rows="" cols="" class="textarea" name="<?php echo "{$this->plugin['shortname']}_slider[{$i}]["."content"."]" ?>"><?php echo htmlspecialchars(stripslashes($slide['content']));?></textarea>
          </div>
        </td>
        <td>
          <div class="textcenter">
            <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . $subpage . "&amp;action=addon_slider_img_remove" . "&amp;id=" . $current_id . "&amp;slide=" . $i . "#upload-images";?>" class="attention sxs_remove" rel="Are you sure that you want to delete the selected content?">Remove</a>
          </div>
        </td>
      <?php endif; ?>
      </tr>

    <?php endforeach; ?>

      <tr>
        <td colspan="3" class="buttons_submit">
          <div class="option_button">
            <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . $subpage . "&amp;action=addon_slider_save" . "&amp;id=" . $current_id . "#upload-images";?>" class="submit submit-blue">Save Changes</a>
          </div>
        </td>
      </tr>

    </table>
  </div>

  <?php endif; ?>



  <div class="section ">
    <h2>Add Image</h2>
    <div class="section_option">

      <div class="option_text">
        <label>Image src</label>
        <input type="text" id="sxs_uploadimage_input" value="" maxlength="" name="<?php echo $this->plugin['shortname']?>[img][image]" class="text"/>
        <a href="#" id="sxs_browsegallery" class="">Browse Gallery</a> or
        <a href="#" id="sxs_uploadimage" class="submit-red">Upload Image</a>

        <img id="sxs_uploadimage_preview" src="" width="265" style="display:block; margin:10px 3px 5px;" alt=""/>
      </div>

      <div class="option_text">
        <label>Link href</label>
        <input type="text" id="sxs_href_input" value="" maxlength="" name="<?php echo $this->plugin['shortname']?>[img][href]" class="text"/>
      </div>
      
      <?php if (class_exists('lbe_plugin_aeropanel')) : ?>
      <div class="option_checkbox">
        <label><input type="checkbox" value="1" name="<?php echo $this->plugin['shortname']?>[img][lightbox]" /> Open image using Lightbox Evolution</label>
      </div>
      <?php endif; ?>

      <div class="option_text">
        <label>Description text</label>
        <input type="text" value="" maxlength="" name="<?php echo $this->plugin['shortname']?>[img][label]" class="text"/>
      </div>

      <input type="hidden" name="<?php echo $this->plugin['shortname']?>[img][type]" value="image"/>

      <div class="option_button">
        <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . $subpage . "&amp;action=addon_slider_img_upload" . "&amp;id=" . $current_id. "#upload-images";?>" class="submit submit-blue">Add Slide</a>
      </div>

    </div>
  </div>

  <div class="section section_right">
    <h2>or Add Inline Content</h2>
    <div class="section_option">

      <div class="option_textarea">
        <label>Content (Can be HTML)</label>
        <textarea name="<?php echo $this->plugin['shortname']?>[inline][content]" class="textarea" rows="" cols=""></textarea>
      </div>

      <input type="hidden" name="<?php echo $this->plugin['shortname']?>[inline][type]" value="inline"/>

      <div class="option_button">
        <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . $subpage . "&amp;action=addon_slider_inline_upload" . "&amp;id=" . $current_id. "#upload-images";?>" class="submit submit-blue">Add Slide</a>
      </div>

    </div>
  </div>


<script type="text/javascript">
  jQuery(document).ready(function($) {

    $(".sxs_remove").live("click", function(ev) {

      var el = $(this);

      $.msgbox(el.attr("rel"), {
        type: "confirm",
        buttons : [
          {type: "submit", value: "Yes"},
          {type: "cancel", value: "No"}
        ]
      }, function(result) {
        if (result) {
          $.ajax({
            url: el.attr('href'),
            success: function() {
              el.parents("tr").fadeOut("slow", function() {
                $(this).remove();
              });
            }
          });
        }
      });

      ev.preventDefault();
    });


    new AjaxUpload('#sxs_uploadimage', {
      action        : ajaxurl,
      data          : { action: 'sxs_ajax_uploadimage', data: 'sxs_uploadimage' },
      hoverClass    : 'submit-red-hover',
      onSubmit      : function(file, extension) {
        $('#sxs_uploadimage').addClass('submit-grey').text("Uploading...");
        $('#sxs_uploadimage_preview').attr('src', '');
      },
      onComplete    : function(file, response) {
        $('#sxs_uploadimage').removeClass('submit-grey').text("Upload Image");
        if (response.search("Error") > -1) {
          $.msgbox("There was an error uploading your image:&lt;br/&gt;"+response, {type: "error"});
        } else {
          $('#sxs_uploadimage_input').val(response).change();
        }
      }
    });


    $('#sxs_browsegallery').click(function(ev) {
     tb_show('', 'media-upload.php?type=image&amp;tab=library&amp;TB_iframe=true');
     ev.preventDefault();
    });

    window.send_to_editor = function(html) {
     html   = "<div>"+html+"</div>";
     imgurl = $("img", html).attr('src');
     aurl   = $("a", html);
     
     $('#sxs_uploadimage_input').val(imgurl).change();

     if (aurl) {
      $("#sxs_href_input").val(aurl.attr('href'));
     }

     tb_remove();
    };

    $('#sxs_uploadimage_input').bind('keyup change', function() {
      $('#sxs_uploadimage_preview').attr('src', $(this).val());
    });

  });
</script>

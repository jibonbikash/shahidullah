<br class="clearfix"/>

<div class="section">
  <h2><?php echo $sections['name'];?></h2>
  <div class="section_option">

    <div class="option_text">
      <label>Slider Name</label>
      <input type="text" value="" maxlength="60" name="<?php echo $this->plugin['shortname']."_" ?>slider_name" id="sxs_slider_name" class="text"/>
    </div>

    <div class="option_text">
      <label>Unique Slider Id</label>
      <input type="text" value="" maxlength="60" name="<?php echo $this->plugin['shortname']."_" ?>slider_id" id="sxs_slider_id"  class="text"/>
    </div>

    <div class="option_text">
      <label>Slider Description (optional)</label>
      <input type="text" value="" maxlength="250" name="<?php echo $this->plugin['shortname']."_" ?>slider_desc" class="text"/>
    </div>

    <div class="option_button">
      <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . $subpage . "&amp;action=addon_new_slider";?>" class="submit submit-blue">Add New Slider</a>
    </div>

  </div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#sxs_slider_name').bind("keyup change", function() {
      $('#sxs_slider_id').val($('#sxs_slider_name').val().replace(/\s/g, '-').replace(/[^\w/-]/g, '').toLowerCase());
    });
    
    $('#sxs_slider_id').bind("keyup", function(event) {

      var controlKeys = [8, 9, 13, 35, 36, 37, 39];
      var isControlKey = controlKeys.join(",").match(new RegExp(event.which));
      if (!event.which || // Control keys in most browsers. e.g. Firefox tab is 0
        (49 <= event.which && event.which <= 57) || // Always 1 through 9
        (48 == event.which && $(this).attr("value")) || // No 0 first digit
        isControlKey) { // Opera assigns values for control keys.
      } else {
        $(this).val($(this).val().replace(/\s/g, '-').replace(/[^\w/-]/g, '').toLowerCase());
      }

    });
  });
</script>
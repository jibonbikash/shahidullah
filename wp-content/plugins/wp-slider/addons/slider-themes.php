<div class="section">
  <h2>Themes Availables</h2>
  <div class="section_option">

    <div class="option_select">
      <label>Select theme</label>
      <select name="<?php echo $this->plugin['shortname']?>[options][theme]" class="theme">
        <option value="default"    <?php echo $current_slider['options']['theme']=="default"?'selected="selected"':''; ?>>Default</option>
        <option value="carbono"    <?php echo $current_slider['options']['theme']=="carbono"?'selected="selected"':''; ?>>Carbono</option>
        <option value="fresh"      <?php echo $current_slider['options']['theme']=="fresh"?'selected="selected"':''; ?>>Fresh</option>
        <option value="minimalist" <?php echo $current_slider['options']['theme']=="minimalist"?'selected="selected"':''; ?>>Minimalist</option>
      </select>
    </div>

    <div class="option_button">
      <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;action=addon_slider_save_options"."&amp;subpage=" . 1 . "&amp;id=" . $current_id;?>#preview" class="submit submit-blue">Save Changes</a>
    </div>

  </div>
</div>

<div class="section">
  <h2>Theme Preview</h2>
  <div class="section_option">
    <div class="option_html">
      <div class="section_html">
        <p>
          <img class="theme_preview theme_default" src="<?php echo $this->path();?>/images/theme_default.jpg" alt=""/>
          <img class="theme_preview theme_carbono" src="<?php echo $this->path();?>/images/theme_carbono.jpg" alt=""/>
          <img class="theme_preview theme_fresh"   src="<?php echo $this->path();?>/images/theme_fresh.jpg" alt=""/>
          <img class="theme_preview theme_minimalist" src="<?php echo $this->path();?>/images/theme_minimalist.jpg" alt=""/>
        </p>
      </div>
    </div>
  </div>
</div>      
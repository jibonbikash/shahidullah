<?PHP

  $slider = (array)get_option($this->plugin['shortname']."_slider");
  $_REQUEST['id'] = (int) $_REQUEST['id'];
  $current_slider = $slider[$_REQUEST['id']];

?>
<div class="section section_table">
  <h2>Slide: <?php echo $current_slider['name']?></h2>
  <?php if (strlen($current_slider['desc'])>0) { echo "<p>{$current_slider['desc']}</p>"; } ?>
</div>

<div class="section ">
  <h2>Style</h2>
  <div class="section_option">

    <div class="option_text">
    <label>Width (in px)</label>                    
    <input type="text" class="text" name="<?php echo $this->plugin['shortname']?>[options][width]" maxlength="" value="<?php echo $current_slider['options']['width'];?>" />
    </div>

    <div class="option_text">
    <label>Height (in px)</label>                    
    <input type="text" class="text" name="<?php echo $this->plugin['shortname']?>[options][height]" maxlength="" value="<?php echo $current_slider['options']['height'];?>" />
    </div>

    <div class="option_select">
    <label>Show navigation buttons (&laquo; &raquo;)</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][navigation]">
    <option value="1" <?php echo $current_slider['options']['navigation']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['navigation']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>

    <div class="option_select">
    <label>Show selector buttons (1 2 3 4 5)</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][selector]">
    <option value="1" <?php echo $current_slider['options']['selector']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['selector']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>

    <div class="option_select">
    <label>Show control button (Play/Pause)</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][control]">
    <option value="1" <?php echo $current_slider['options']['control']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['control']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>
    
    <div class="option_select">
    <label>Show timer</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][timer]">
    <option value="1" <?php echo $current_slider['options']['timer']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['timer']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>

  </div>
</div>


<div class="section section_right">

  <h2>General Options</h2>
  <div class="section_option">

    <div class="option_select">
    <label>Auto start</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][slideshow]">
    <option value="1" <?php echo $current_slider['options']['slideshow']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['slideshow']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>

    <div class="option_select">
    <label>Pause on click</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][pauseonclick]">
    <option value="1" <?php echo $current_slider['options']['pauseonclick']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['pauseonclick']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>

    <div class="option_select">
    <label>Pause on hover</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][pauseonhover]">
    <option value="1" <?php echo $current_slider['options']['pauseonhover']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['pauseonhover']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>

    <div class="option_select">
    <label>Loop</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][loop]">
    <option value="1" <?php echo $current_slider['options']['loop']==1?'selected="selected"':''; ?>>Yes</option>
    <option value="0" <?php echo $current_slider['options']['loop']==0?'selected="selected"':''; ?>>No</option>
    </select>
    </div>

  </div>
</div>


<div class="section ">
  <h2>Transition Effects</h2>
  <div class="section_option">

    <div class="option_select">
    <label>Default Transition</label>                    
    <select name="<?php echo $this->plugin['shortname']?>[options][transition]">
    <option value="random"    <?php echo $current_slider['options']['transition']=="random"?'selected="selected"':''; ?>>Random</option>
    <option value="fade"      <?php echo $current_slider['options']['transition']=="fade"?'selected="selected"':''; ?>>Fade</option>
    <option value="baralternate" <?php echo $current_slider['options']['transition']=="baralternate"?'selected="selected"':''; ?>>Bar Alternate</option>
    <option value="barleft"      <?php echo $current_slider['options']['transition']=="barleft"?'selected="selected"':''; ?>>Bar Left</option>
    <option value="barright"     <?php echo $current_slider['options']['transition']=="barright"?'selected="selected"':''; ?>>Bar Right</option>
    <option value="slide"       <?php echo $current_slider['options']['transition']=="slide"?'selected="selected"':''; ?>>Slide</option>
    <option value="sliderandom" <?php echo $current_slider['options']['transition']=="sliderandom"?'selected="selected"':''; ?>>Slide Random</option>
    <option value="slideleft"   <?php echo $current_slider['options']['transition']=="slideleft"?'selected="selected"':''; ?>>Slide Left</option>
    <option value="slideright"  <?php echo $current_slider['options']['transition']=="slideright"?'selected="selected"':''; ?>>Slide Right</option>
    <option value="slidetop"    <?php echo $current_slider['options']['transition']=="slidetop"?'selected="selected"':''; ?>>Slide Top</option>
    <option value="slidebottom" <?php echo $current_slider['options']['transition']=="slidebottom"?'selected="selected"':''; ?>>Slide Bottom</option>
    <option value="swipe"       <?php echo $current_slider['options']['transition']=="swipe"?'selected="selected"':''; ?>>Swipe</option>
    <option value="swipeleft"   <?php echo $current_slider['options']['transition']=="swipeleft"?'selected="selected"':''; ?>>Swipe Left</option>
    <option value="swiperight"  <?php echo $current_slider['options']['transition']=="swiperight"?'selected="selected"':''; ?>>Swipe Right</option>
    <option value="slip"       <?php echo $current_slider['options']['transition']=="slip"?'selected="selected"':''; ?>>Slip</option>
    <option value="slipleft"   <?php echo $current_slider['options']['transition']=="slipleft"?'selected="selected"':''; ?>>Slip Left</option>
    <option value="slipright"  <?php echo $current_slider['options']['transition']=="slipright"?'selected="selected"':''; ?>>Slip Right</option>
    <option value="sliptop"    <?php echo $current_slider['options']['transition']=="sliptop"?'selected="selected"':''; ?>>Slip Top</option>
    <option value="slipbottom" <?php echo $current_slider['options']['transition']=="slipbottom"?'selected="selected"':''; ?>>Slip Bottom</option>
    <option value="fountain"  <?php echo $current_slider['options']['transition']=="fountain"?'selected="selected"':''; ?>>Fountain</option>
    <option value="rain"      <?php echo $current_slider['options']['transition']=="rain"?'selected="selected"':''; ?>>Rain</option>
    <option value="square"    <?php echo $current_slider['options']['transition']=="square"?'selected="selected"':''; ?>>Square</option>
    <option value="squarerandom"  <?php echo $current_slider['options']['transition']=="squarerandom"?'selected="selected"':''; ?>>Square Random</option>
    <option value="explode"       <?php echo $current_slider['options']['transition']=="explode"?'selected="selected"':''; ?>>Explode</option>
    <option value="exploderandom" <?php echo $current_slider['options']['transition']=="exploderandom"?'selected="selected"':''; ?>>Explode Random</option>
    </select>
    </div>

    <div class="option_text">
    <label>Delay (in miliseconds) delay between images</label>                    
    <input type="text" class="text" name="<?php echo $this->plugin['shortname']?>[options][delay]" maxlength="" value="<?php echo $current_slider['options']['delay'];?>" />
    </div>

    <div class="option_text">
    <label>Bars</label>                    
    <input type="text" class="text" name="<?php echo $this->plugin['shortname']?>[options][bars]" maxlength="" value="<?php echo $current_slider['options']['bars'];?>" />
    </div>

    <div class="option_text">
    <label>Columns</label>                    
    <input type="text" class="text" name="<?php echo $this->plugin['shortname']?>[options][columns]" maxlength="" value="<?php echo $current_slider['options']['columns'];?>" />
    </div>

    <div class="option_text">
    <label>Rows</label>                    
    <input type="text" class="text" name="<?php echo $this->plugin['shortname']?>[options][rows]" maxlength="" value="<?php echo $current_slider['options']['rows'];?>" />
    </div>

    <div class="option_text">
    <label>Duration (in miliseconds) of the transition</label>                    
    <input type="text" class="text" name="<?php echo $this->plugin['shortname']?>[options][duration]" maxlength="" value="<?php echo $current_slider['options']['duration'];?>" />
    </div>

  </div>
</div>

<br class="clear"/>

<div class="buttons_restore">
  <a href="#" class="submit-grey">Restore Default Options</a>
</div>
<div class="buttons_submit" style="margin:0 10px 0 0;">
  <a href="<?php echo $_SERVER['REQUEST_URI']."&amp;action=addon_slider_save_options"."&amp;subpage=" . 1 . "&amp;id=" . $current_id;?>" class="submit submit-blue">Save Changes</a>
</div>
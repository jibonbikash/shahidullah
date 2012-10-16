<?PHP
  //echo "<pre>";
  //print_r (get_option($this->plugin['shortname']."_slider"));
  //echo "</pre>";
?>
<?php if (count((array)get_option($this->plugin['shortname']."_slider")) > 0) : ?>
  <div class="section section_table">
    <table class="widefat">
      <thead>
      <tr>
        <th>
        Slider Name
        </th>
        <th>
        ShortCode
        </th>
        <th style="width:124px;">
        Action
        </th>
      </tr>
      </thead>
      <?php foreach ((array)get_option($this->plugin['shortname']."_slider") as $id=>$ss) : ?>
      <?php if (strlen($ss['id'])>0) : ?>
      <tr>
        <td>
          <div class="option_text">
            <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . 1 . "&amp;id=" . $id;?>"><?php echo $ss['name']?></a> (<?php echo count($ss['imgs']);?>)
          </div>
          <div class="option_text">
            <?php echo $ss['desc']?>
          </div>
        </td>
        <td>
          <div class="option_text">
          ShortCode:<br/>
<pre style="padding:2px; font-size:9px;">
[slider id="<?php echo $ss['id']?>"]
</pre>
          Template Code:<br/>
<pre style="padding:2px; font-size:9px;">
&lt;?PHP do_action('slider', '<?php echo $ss['id']?>'); ?&gt;
</pre>
          </div>
        </td>
        <td style="width:120px;text-align:right;">
          <div class="option_text">
            <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . 1 . "&amp;id=" . $id;?>">Manage</a>
            | <a href="<?php echo $_SERVER['REQUEST_URI'] . "&amp;subpage=" . $subpage . "&amp;action=addon_slider_remove&amp;id=" . $id;?>" class="attention sxs_remove" rel="Are you sure that you want to delete the selected slider?">Remove</a>
          </div>
        </td>
      </tr>
      <?php endif; ?>
      <?php endforeach; ?>
    </table>
  </div>
<?php endif; ?>
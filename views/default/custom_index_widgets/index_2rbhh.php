<?php
		$area1widgets = $vars['area1'];
		$area2widgets = $vars['area2'];
		$area3widgets = $vars['area3'];
		$layoutmode   = $vars['layoutmode']; //edit, index
		
?>

    <table cellspacing="10" cellpadding="10" width="100%" class="<?php echo elgg_echo($layoutmode); ?>">
      <tr>
        <td colspan="2" align="left" valign="top" class="<?php echo elgg_echo($layoutmode); ?>">
          <?php if ($layoutmode == 'edit_mode') {?> 
              <h2 class=big_<?php echo elgg_echo($layoutmode); ?>_box"><?php echo elgg_echo("custom_index_widgets:area1"); ?></h2>
          <?php }?>
              <div id="leftcolumn_widgets" class="big_<?php echo elgg_echo($layoutmode); ?>_box">
              <?php if (is_array($area1widgets) && sizeof($area1widgets) > 0)
                    		foreach($area1widgets as $widget) {
                    			if ($widget instanceof ElggObject)
                      		  echo elgg_view_entity($widget);
                      		 else
                      			echo $widget;
              } ?>
              </div>
        </td>
      </tr>
      <tr>
        <td align="left" valign="top" class="<?php echo elgg_echo($layoutmode); ?>">
          <?php if ($layoutmode == 'edit_mode') {?> 
          <h2 class="half_<?php echo elgg_echo($layoutmode); ?>_box"><?php echo elgg_echo("custom_index_widgets:area2"); ?></h2>
          <?php }?>
              <div id="middlecolumn_widgets" class="half_<?php echo elgg_echo($layoutmode); ?>_box">
              <?php
            	 	if (!isloggedin())
            	 		echo elgg_view("account/forms/login"); 
            	?>
              <?php if (is_array($area2widgets) && sizeof($area2widgets) > 0)
                    		foreach($area2widgets as $widget) {
                      		 if ($widget instanceof  ElggObject)
                      		  echo elgg_view_entity($widget);
                      		 else
                      			echo $widget;
              } ?>
              </div>
        </td>
	  	<td  align="left" valign="top" class="<?php echo elgg_echo($layoutmode); ?>">
	  	    <?php if ($layoutmode == 'edit_mode') {?> 
          <h2 class="half_<?php echo elgg_echo($layoutmode); ?>_box"><?php echo elgg_echo("custom_index_widgets:area3"); ?></h2>
          <?php }?>
              <div id="rightcolumn_widgets" class="half_<?php echo elgg_echo($layoutmode); ?>_box">
              <?php if (is_array($area3widgets) && sizeof($area3widgets) > 0)
                    		foreach($area3widgets as $widget) {
                    			if ($widget instanceof  ElggObject)
                      		  echo elgg_view_entity($widget);
                      		 else
                      			echo $widget;
              } ?>
              </div>
        </td>
      </tr>
    </table>


<?php
	$num_items = $vars['entity']->num_items;
	if (!isset($num_items)) $num_items = 10;

?>

  <p>
<?php echo elgg_echo('simplepie:num_items'); ?>
	
<?php
	echo elgg_view('input/pulldown', array(
			'internalname' => 'params[num_items]',
			'options_values' => array( '3' => '3',
                                 '5' => '5',
			                           '8' => '8',
			                           '10' => '10',
			                           '12' => '12',
			                           '15' => '15',
			                           '20' => '20',
			                           '30' => '30',
			                           '40' => '40',
			                           '50' => '50',
			                           '100' => '100',
			                         ),
			'value' => $num_items
		));
?>
</p>

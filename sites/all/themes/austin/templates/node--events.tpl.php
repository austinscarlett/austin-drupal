
<div class="left">
	<?php print theme('image_style', array('path' => $node->field_image['und'][0]['filename'], 'style_name' => 'event-large')); ?>
	<ul>
		<li class="ss-social ss-icon"><a href="https://twitter.com/share?text=<?php print $title ?>&url=http://www.austinscarlett.com/events/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>" target="_blank">twitter</a></li>
		<li class="ss-social ss-icon"><a href="http://www.facebook.com/share.php?u=http://www.austinscarlett.com/events/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>&t=<?php print $title ?>" target="_blank">facebook</a></li>
		<li class="ss-icon">
			<a href="mailto:?subject=<?php print $title ?>body=http://www.austinscarlett.com/events/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>" target="_blank" >email</a>
		</li>
	</ul>
	
</div>

<div class="right">

	<h2 class="post-title"><?php print $title ?></h2>
	<div class="date">		
			<?php
			if (isset($node->field_dates['und'][0]['value2']) && ($node->field_dates['und'][0]['value2'] != $node->field_dates['und'][0]['value'])):
				print date("F d, Y", strtotime($node->field_dates['und'][0]['value'])) . t(' to ') . date("F d, Y", strtotime($node->field_dates['und'][0]['value2']));
			else:
				print date("F d, Y", strtotime($node->field_dates['und'][0]['value']));
			endif;
			?>
	</div>
	<div class="location">
		<h3><?php print $node->field_location['und'][0]['value']; ?></h3>
		<div class="address"><?php print $node->field_address['und'][0]['value']; ?></div>
		<div class="city-state"><?php print $node->field_city['und'][0]['value']; ?>, <?php print $node->field_state['und'][0]['value']; ?> <?php print $node->field_zip['und'][0]['value']; ?></div>
	</div>
	<div class="body">
		<?php if (!empty($node->body['und'][0]['value'])): ?>
		<?php print $node->body['und'][0]['value']; ?>
		<?php endif; ?>
	</div>
	<div class="directions"><a href="<?php print $node->field_map_link['und'][0]['value']; ?>" target="_blank"><span class="ss-standard ss-icon">location</span> Get Directions</a></div>
	<div class="cal"><a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php print $title ?>&dates=<?php print date("Ymd", strtotime($node->field_dates['und'][0]['value'])) ?>/<?php print date("Ymd", strtotime($node->field_dates['und'][0]['value2'])) ?>&location=<?php print $node->field_location['und'][0]['value']; ?>" target="_blank"><span class="ss-standard ss-icon">calendar</span> Mark Your Calendar</a></div>
	<div class="apt-form clearfix">
	<?php
		$block = module_invoke('webform', 'block_view', 'client-block-9');
		print $block['content'];
	?>
	</div>

</div>




<?php // print image_style_url('image', $node->field_images['und'][0]['uri']); ?> 



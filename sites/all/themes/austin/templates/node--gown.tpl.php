<div class="left">
	<?php if(!empty($node->field_image['und'])): ?>
		<ul>
		<?php foreach($node->field_image['und'] as $image): ?>
			<li>
			<?php print theme('image_style', array('path' => $image['uri'], 'style_name' => 'gown-large')); ?>
		<span class="zoom-label">roll over to zoom [+]</span>
			</li>
		<?php endforeach; ?>
			</ul>
	<?php endif; ?>
</div>

<div class="right">

	<h2 class="post-title"><?php print $title ?></h2>
	<div class="body">
		<?php if (!empty($node->body['und'][0]['value'])): ?>
		<?php print $node->body['und'][0]['value']; ?>
		<?php endif; ?>
	</div>
	<?php if(!empty($node->field_image['und'])): ?>
		<ul class="thumbs clearfix">
		<?php foreach($node->field_image['und'] as $image): ?>
			<li><?php print theme('image_style', array('path' => $image['uri'], 'style_name' => 'gown-thumb-sq')); ?></li>
		<?php endforeach; ?>
			</ul>
	<?php endif; ?>
	<div class="share clearfix">
		<h3>Share this Gown</h3>
		<ul>
			<li class="ss-social ss-icon"><a href="" target="_blank">twitter</a></li>
			<li class="ss-social ss-icon"><a href="" target="_blank">facebook</a></li>
			<li class="ss-icon">
				<a href="mailto:?subject=<?php print $title ?>body=http://www.austinscarlett.com/events/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>" target="_blank" >email</a>
			</li>
		</ul>
	</div>

</div>

<?php // print image_style_url('image', $node->field_images['und'][0]['uri']); ?> 
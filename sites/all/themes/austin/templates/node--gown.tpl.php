<div class="gown-images col-1-2">
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

<div class="gown-info col-1-2">

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
	<div class="share">
		<h3>Share this Gown</h3>
		<ul>
			<li class="ss-social ss-icon">
			  <a href="http://twitter.com/share?text=Austin Scarlett - <?php print $title ?>" target="_blank">twitter</a>
      </li>
			<li class="ss-social ss-icon">
			  <a href="http://www.facebook.com/sharer/sharer.php?u=http://www.austinscarlett.com/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>" target="_blank">facebook</a>
      </li>
			<li class="ss-icon">
				<a href="mailto:?subject=<?php print $title ?>body=http://www.austinscarlett.com/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>" target="_blank" >email</a>
			</li>
			<li>
        <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-shape="round" data-pin-height="32"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_32.png" /></a>
        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
      </li>
		</ul>
	</div>

</div>

<?php // print image_style_url('image', $node->field_images['und'][0]['uri']); ?> 
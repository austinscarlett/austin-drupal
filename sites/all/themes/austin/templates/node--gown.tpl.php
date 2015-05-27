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
		<ul class="share-gown-links">
			<li>
			  <a href="http://twitter.com/share?text=Austin Scarlett - <?php print $title ?>" target="_blank"><svg class="icon-circle-twitter"><use xlink:href="#icon-circle-twitter" /></svg></a>
      </li>
			<li>
			  <a href="http://www.facebook.com/sharer/sharer.php?u=http://www.austinscarlett.com/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>" target="_blank"><svg class="icon-circle-facebook"><use xlink:href="#icon-circle-facebook" /></svg></a>
      </li>
			<li>
				<a href="mailto:?subject=<?php print $title ?>body=http://www.austinscarlett.com/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>" target="_blank" ><svg class="icon-circle-email"><use xlink:href="#icon-circle-email" /></svg></a>
			</li>
			<li>
        <a href="http://pinterest.com/pin/create/button/?url=http://www.austinscarlett.com/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>&media=<?php print render (file_create_url($node->field_image['und'][0]['uri'])); ?>&description=<?php print $title ?>" target="_blank"><svg class="icon-circle-pinterest"><use xlink:href="#icon-circle-pinterest" /></svg></a>
      </li>
		</ul>
	</div>

</div>

<!--
        <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-shape="round" data-pin-height="32">
        <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_32.png" />
        </a>
        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
-->
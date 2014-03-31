<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if ($block->subject): ?>
    <h3 class="block-title"><?php print $block->subject; ?></h3>
    <?php endif; ?>
    <?php print $content ?>
</div>
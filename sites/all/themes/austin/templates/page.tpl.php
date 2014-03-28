<header id="header" class="header">
	<div class="wrapper">
	
		<h1 class="logo"><a href="/">Austin Scarlett</a></h1>

		<nav class="main-nav">
		  <?php if (isset($main_menu)) : ?>
		    <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'links main-menu'))) ?>
		  <?php endif; ?>
		</nav>
		
	</div>
</header>

<?php if (!$is_front) { ?>
<section class="title-bar">
	<?php
		if (isset($node)) {
			if ($node->type == 'page' && !$is_front) { ?>		
				<h1 class="page-title"><?php print $title ?></h1>
	<?php
			}
			elseif ($node->type == 'gown') { ?>
				<h1 class="page-title">The Collection</h1>
	<?php
			}
			elseif ($node->type == 'events') { ?>
				<h1 class="page-title">Events</h1>
	<?php
			}
			elseif ($node->type == 'blog_post') { ?>
				<h1 class="page-title"><span>The World of</span> Austin Scarlett</h1>
	<?php
			}
			elseif ($node->type == 'article') { ?>
				<h1 class="page-title">Press</h1>
	<?php
			}
			elseif ($node->type == 'webform') { ?>
				<h1 class="page-title"><?php print $title ?></h1>
	<?php
			}
		} ?>
</section>
<?php } ?>

<?php
/** Start gown controls */
?>			
<?php if(isset($node) && $node->type == "gown"): ?>
<div class="gown-nav clearfix">
	<?php print bx_prev_link($node->nid, 'gowns', 'Previous'); ?>
	<?php print bx_next_link($node->nid, 'gowns', 'Next'); ?>
</div>
<?php endif; ?>
			
<?php if ($page['top']): ?>
<section class="top">
    <div class="wrapper">
        <?php print render($page['top']) ?>
    </div>
</section>
<?php endif; ?>
		
<section id="main" class="main">
    <div class="wrapper">

        <?php if ($show_messages && $messages): ?>
        	<div id="console"><div class="wrapper">
        	<?php if ($show_messages && $messages): print $messages; endif; ?>
        	</div></div>
        <?php endif; ?>

    	<?php if ($page['sidebar_first']): ?>
    	<aside id="left" class="left">
    	    <?php print render($page['sidebar_first']) ?>
        </aside>
    	<?php endif; ?>
    
    	<?php if ($primary_local_tasks): ?>
    	    <ul class="links tabs clearfix"><?php print render($primary_local_tasks) ?></ul>
        <?php endif; ?>
    	<?php if ($secondary_local_tasks): ?>
    	    <ul class="links tabs clearfix"><?php print render($secondary_local_tasks) ?></ul>
        <?php endif; ?>
    	<?php if ($action_links): ?>
    	    <ul class="links tabs clearfix"><?php print render($action_links); ?></ul>
        <?php endif; ?>
    	<section id="content" class="content">
    		<?php print render($page['content']) ?>			
    	</section>
    
    	<?php if ($page['sidebar_second']): ?>
    	<aside id="right">
    	    <?php print render($page['sidebar_second']) ?>
        </aside>
    	<?php endif; ?>

    </div>
</section>

<footer class="footer">
	<div class="wrapper">
	
		<nav class="col-1-4">
		    <h3 class="block-title">Explore</h3>
		  <?php if (isset($main_menu)) : ?>
		    <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'links main-menu'))) ?>
		  <?php endif; ?>
		</nav>
		
		<div class="col-1-4">
			<div class="social-links">
				<h3 class="block-title">Connect</h3>
				<ul>
					<li><a href="https://www.facebook.com/AustinScarlettBridal" target="_blank">Like us On Facebook</a></li>
					<li><a href="https://twitter.com/AustinScarlett" target="_blank">Follow us on Twitter</a></li>
					<li><a href="http://pinterest.com/austinscarlett/" target="_blank">Follow us on Pinterest</a></li>
				</ul>
			</div>
			<div class="mailing-list">
				<p>Sign up for our Mailing List</p>
				<?php
					$block = module_invoke('webform', 'block_view', 'client-block-53');
					print $block['content'];
				?>
			</div>
		</div>
		
		<div class="col-1-2 contact-form">
			<h3 class="block-title">Contact</h3>
			<?php
				$block = module_invoke('webform', 'block_view', 'client-block-8');
				print $block['content'];
			?>
		</div>
		
		<div class="copyright">
		&copy;<?php print date('Y'); ?> Austin Scarlett. All Rights Reserved.
		</div>
		<?php print render($page['footer']) ?>
		
	</div>
</footer>
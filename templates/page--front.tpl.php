<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<div class="row">
				<div class="span5">
			    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
			      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
			    </a>
		    </div>
		    <div id="nav-region">
					<?php print render($page['header']); ?>
				</div>
    	</div>
  	</div>
	</div>
</div>
	

<div class="container" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php print $messages; ?>
    <?php print render($page['content']) ?>
</div>

<footer id="footer">
  
</footer> 
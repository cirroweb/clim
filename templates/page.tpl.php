<header id="header">
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
  </a>
  <nav id="main-menu">
    <?php include 'menu.inc'; ?>
  </nav>
</header>

<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $messages; ?>
  <?php print render($page['content']) ?>
</div>

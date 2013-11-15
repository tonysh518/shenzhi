<?php
$node = node_load(arg(1));
?>
  <?php print render($page['header']); ?>
  <div class="page-node">
    <h2 class="press">Blog</h2>
      <h2 class="coming">Coming soon</h2>
    <div class="clearfix"></div>
  </div>

  <?php print render($page['footer']); ?>

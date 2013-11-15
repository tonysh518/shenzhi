<?php
$node = node_load(arg(1));
?>
  <?php print render($page['header']); ?>
  <div class="page-node">
      <h2 class="press">Press</h2>
      <div class="exhibitions press_list">
          <?php
          print views_embed_view('press', 'block');
          ?>
      </div>
    <div class="clearfix"></div>
  </div>
  <?php print render($page['footer']); ?>

<?php
$node = node_load(arg(1));
?>
 <?php print render($page['header']); ?>
  <div class="paintings-main">
    <div class="paintings-prev"></div>
    <div class="paintings-next"></div>
    <div class="paintings-wrap">
      <h2 class="clocks"><?php print $title; ?></h2>
      
        <div class="paintings-list-mobile clearfix">
         <?php  print views_embed_view('works', 'block_5'); ?>
        </div>
        
        <div class="paintings-list2 clearfix">
        <?php  print views_embed_view('works', 'block_6'); ?>
        </div>
        
        
        <?php print $node->body['und'][0]['value']; ?>
    </div>
  </div>
  <?php print render($page['footer']); ?>
  <section id="loading-mask" class="lpn-mask" style="display:none;">
      <span class="lpn-ghost"></span>
      <div class="lpn-panel">
        <div class="lpn-content">
          <div class="loading-wrap">
            <img src="images/loading.gif"  />
          </div>
        </div>
      </div>
    </section>


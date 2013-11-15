<?php
$node = node_load(arg(1));
?>
  <?php print render($page['header']); ?>
  <div class="main">
    <ul class="main-slider">
        <?php
        foreach($node->field_gallery['und'] as $img){
		  print '<li><a href="'.$img['alt'].'"><img title="'.$img['title'].'" src="'.image_style_url('home',$img['uri']).'" /></a></li>';
		}
		?>
    </ul>
     <style>.main-slider {opacity:0;}</style>
  </div>
  <?php print render($page['footer']); ?>

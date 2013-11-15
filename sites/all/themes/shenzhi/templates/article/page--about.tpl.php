<?php
$node = node_load(arg(1));
?>
  <?php print render($page['header']); ?>
  <div class="page-node">
    <h2 class="about"><?php print $node->title?></h2>
    <div class="article article-aboutus">
        <div class="aboutus-left">
            <?php print $node->body['und'][0]['value']; ?>
        </div>
        <div class="aboutus-right">
            <div class="aboutus-pic"><a class="zoompic" href="javascript:void(0);" data-img="<?php print base_path(); ?>sites/default/files/about/<?php print $node->field_big['und'][0]['filename']; ?>" /><img src="<?php print base_path(); ?>sites/default/files/about/<?php print $node->field_small['und'][0]['filename']; ?>" /></a></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
  <?php print render($page['footer']); ?>

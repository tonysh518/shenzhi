 <?php print render($page['header']); ?>
  <div class="page-node">
    <h2 class="exhibitions"><?php print $title; ?></h2>
    <div class="exhibitions">
        <?php
        print views_embed_view('exhibition', 'block');
        ?>
    </div>
    <div class="clearfix"></div>
  </div>
  <?php print render($page['footer']); ?>

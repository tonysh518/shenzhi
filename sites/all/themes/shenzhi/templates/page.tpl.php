<?php
if (arg(0) == 'node' && is_numeric(arg(1))) {
    $nid = arg(1);
    $node = node_load(array('nid' => $nid));
    $type = $node->type;
    $path = drupal_lookup_path('alias',"node/".$node->nid);

    if($path == 'home')
    {
        include('article/page--home.tpl.php');
        return;
    }
	
	if($path == 'about')
    {
        include('article/page--about.tpl.php');
        return;
    }
	
	if($path == 'contact')
    {
        include('article/page--contact.tpl.php');
        return;
    }
	
	if($path == 'paintings')
    {
        include('article/page--paintings.tpl.php');
        return;
    }
	
	if($path == 'furniture')
    {
        include('article/page--furniture.tpl.php');
        return;
    }
	
	if($path == 'clocks')
    {
        include('article/page--clocks.tpl.php');
        return;
    }
	
	if($path == 'silverware')
    {
        include('article/page--silverware.tpl.php');
        return;
    }
	
	if($path == 'press')
    {
        include('article/page--press.tpl.php');
        return;
    }

    if($type == 'press')
    {
        include('article/page--press-node.tpl.php');
        return;
    }

	if($path == 'exhibitons')
    {
        include('article/page--exhibitons.tpl.php');
        return;
    }
	
	if($path == 'blog')
    {
        include('article/page--blog.tpl.php');
        return;
    }
	


}

?>
<?php print render($page['header']); ?>
<div class="page-node">
    <?php print render($page['content']); ?>
</div>
<?php print render($page['footer']); ?>
<?php
global $base_path;
$nid = arg(1);
$node = node_load(array('nid' => $nid));
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sound Concepts | 声智贸易有限公司</title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <link href="<?php print $base_path.path_to_theme()?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="<?php print $base_path.path_to_theme()?>/js/slider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
    <link href="<?php print $base_path.path_to_theme()?>/js/cloudzoom/cloudzoom.css" rel="stylesheet" type="text/css" />
    <link href="<?php print $base_path.path_to_theme()?>/css/animation.css" rel="stylesheet" type="text/css" />
    <link href="<?php print $base_path.path_to_theme()?>/css/base.css" rel="stylesheet" type="text/css" />
    <?php if ($adrupal_language == 'zh-hans') {?>
    <link href="<?php print $base_path.path_to_theme()?>/css/cn.css" rel="stylesheet" type="text/css" />
    <?php } ?>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/jquery/jquery-1.10.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/easing/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/slider/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/jquery.form.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/slider/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/jquery.ensureload.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/jquery.swipe.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/cloudzoom/cloudzoom.js"></script>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/app/main.js"></script>

    <?php
    if(drupal_is_front_page()){
        ?>
        <meta name="viewport" content="width=500, user-scalable=yes" />
        <link href="<?php print $base_path.path_to_theme()?>/css/index.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/app/index.js"></script>
    <?php
    }
    ?>
    <!--[if lt IE 9]>
    <script>for(var a=['section','article','nav','header','footer','aside'],i=0,j=a.length;i<j;++i){document.createElement(a[i]);}</script>
    <link href="<?php print $base_path.path_to_theme()?>/css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php print $base_path.path_to_theme()?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
    <link href="<?php print $base_path.path_to_theme()?>/css/ie6.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        window.onload = function(){
            DD_belatedPNG.fix("*");
        }
    </script>
    <![endif]-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-43160757-1', 'victoriadearvizu.com');
ga('send', 'pageview');

</script>
</head>
<body class="<?php print $classes; ?> victoria" <?php print $attributes;?> <?php print $datanav;?> >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>




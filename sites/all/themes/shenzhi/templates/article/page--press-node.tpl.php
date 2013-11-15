<div class="popup">
    <h2> <?php print $node->title; ?></h2>
    <div class="press_slider_wrap">
        <div class="press_slider">
            <?php foreach($node->field_images['und'] as $image):?>
                <?php print theme('image_style', array('style_name' => 'press', 'path' => $image['uri'], 'title' => $image['title']) ); ?>
            <?php endforeach;?>
        </div>
    </div>
    <?php print_r($node->body['und'][0]['safe_value']); ?>
    <div class="clearfix"></div>
</div>
<style>.page-node {margin:0;}</style>
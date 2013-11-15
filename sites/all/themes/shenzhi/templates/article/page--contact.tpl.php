<?php
$node = node_load(arg(1));
?>
<?php print render($page['header']); ?>
  <div class="page-node">
    <h2 class="contact"><?php print $node->title; ?></h2>
    <div class="contactus">
        <p><?php print t('Visits are on an appointment only basis. To make an inquiry or schedule a meeting please use the form below:'); ?></p>
        <div class="message"><p></p>
            <form id="contact_form" method="post" action="<?php print $base_path; ?>index.php?q=webform_ajax">
                <div class="conact-left">
                    <div class="mess_fi"><input class="ipt_mess" type="text" name="name" placeholder="<?php print t('Name '); ?>"  /></div>
                    <div class="mess_fi"><input class="ipt_mess" type="text" name="telephone" placeholder="<?php print t('Telephone'); ?>"  /></div>
                    <div class="mess_fi"><input class="ipt_mess" type="text" name="email" placeholder="<?php print t('Email '); ?>"  /></div>
                </div>
                <div class="conact-right">
                    <div class="mess_fi"><textarea class="text_mess" cols="50" rows="8" placeholder="<?php print t('Message'); ?>" type="text" name="message" ></textarea></div>
                    <div class="mess_fi"><input class="ipt_btn" type="submit" value="<?php print t('SEND'); ?>" /></div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
        <p class="title"><?php print t('Or you can call us on'); ?></p>
        <p><?php print t('Telephone: +86-135.640.311.17'); ?></p>
        <div class="newsletter">
            <p class="title"><?php print t('Join our mailing list'); ?></p>
            <form id="newsletter_form" action="<?php print $base_path; ?>index.php?q=webform_ajax2" method="post">
                <div class="mess_fi"><input class="ipt_mess" type="text" name="email" placeholder="<?php print t('Email '); ?>"  /></div>
                <div class="mess_fi"><input class="ipt_btn" type="submit" value="<?php print t('SEND'); ?>" /></div>
            </form>
        </div>
    </div>

    <div class="clearfix"></div>
  </div>
 <div class="clearfix"></div>
  <?php print render($page['footer']); ?>

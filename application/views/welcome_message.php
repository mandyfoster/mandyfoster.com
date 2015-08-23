<?php
// views/welcome_message.php
?>

        <banner><h1 class="heading"></h1></banner>

        <div id="body">
            <div class="blurb1"></div><!-- end blurb1 -->
            <div class="blurb2"></div><!-- end blurb2 -->

<?php

    $contactMeAttr = array('class' => 'contactMe');
    echo form_open(current_url(),$contactMeAttr); 

    echo form_label('Name: ', 'name');
    echo form_input('name', set_value('name')) . "<br/>";

    echo form_label('Email: ', 'email');
    echo form_input('email', set_value('email')) . "<br/>";

    echo form_label('Subject: ', 'subject');
    echo form_input('subject', set_value('subject')) . "<br/>";

    $messageAttr = array('class' => 'messageHide');
    echo form_label('Message: ', 'message', $messageAttr);
    echo '<textarea name="message" placeholder="Message">' . set_value("message") . "</textarea><br/>";

    echo form_error('g-recaptcha-response','<div style="color:red; display:none;">','</div>');
?>
            
    <div class="g-recaptcha" data-sitekey="6Lcb-AETAAAAAOgqKrGx79oL3cV4aAXsc4-ra-_o"></div>

<?php
    echo form_submit('submit', 'Send Message');

    echo form_close();
 ?>

            <div class="validationErrors"><?php echo validation_errors(); ?></div>

        </div><!-- end #body -->

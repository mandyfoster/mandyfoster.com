<?php
// views/welcome_message.php
?>

<div id="container" class="container-fluid">
    
    <div class="column">
        <banner><h1 class="heading"></h1></banner>

        <div id="body">
            <div class="blurb1"></div><!-- end blurb1 -->
            <div class="blurb2"></div><!-- end blurb2 -->

            <!--<form name="contactMe" class="contactMe" action="" method="post">-->
<?

    $contactMeAttr = array('class' => 'contactMe');
    echo form_open(current_url(),$contactMeAttr); 

    echo form_label('Name: ', 'name');
    echo form_input('name', set_value('name')) . "<br/>";

    echo form_label('Email: ', 'email');
    echo form_input('email', set_value('email')) . "<br/>";

    echo form_label('Subject: ', 'subject');
    echo form_input('subject', set_value('subject')) . "<br/>";

    echo form_label('Message: ', 'message');
    echo '<textarea name="message" placeholder="Message">' . set_value("message") . "</textarea><br/>";

    if ($show_spam_protection) 
    {
        echo form_label('Spam protection - : ' . $spam_question, 'spam_protection') . "<br/>";
        echo form_input('spam_protection', set_value('spam_protection')) . '<br/><br/>';
    }

    echo form_submit('submit', 'Send Message');

    echo form_close();
 ?>

            <div class="validationErrors"><?php echo validation_errors(); ?></div>

        </div><!-- end #body -->
    </div><!-- end .column.left -->
    
</div><!-- end #container, .container-fluid -->
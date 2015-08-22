<?php
// views/welcome_error.php
?>

<div id="container" class="container-fluid">

        <banner><h1 class="heading error"></h1></banner> <!-- <p>Sorry but there was an error sending your message - <strong>we have not received it</strong>.</p> -->

        <div id="body">
            <p>You message is preserved below so you do not lose what you typed. Please manually email it to us
                <?php
                    if ($displayEmailWhenError) 
                    {
                        echo " at " . $sendEmailTo;
                    }
                ?>.
            </p>


            <?php
                    "<textarea name='message'>" . set_value("message") . "</textarea>";
            ?>
        </div><!-- end #body -->
    
</div><!-- end #container, .container-fluid -->

<?php
// views/welcome_message.php
?>

<div id="container" class="container-fluid">
    
    <div class="column">
        <h1 class="heading">MF  DESIGN | DEVELOP | DEPLOY</h1>

        <div id="body">
            <p>Don't worry, I'm just sprucing things up a bit.</p>
            <p>I'm still available for hire and booking, so feel free to drop a line:</p>
            
            <form name="contactMe" class="contactMe" action="welcome_message.php" method="post">
                <label>Name:</label><input type="text" class="name" name="name"/><br/>
                <label>Company:</label><input type="text" class="company" name="company"/><br/>
                <label>Subject:</label><input type="text" class="subject" name="subject"/><br/>
                <textarea placeholder="Message"></textarea><br/>
                
                <input type="submit" class="mySubmit" name="mySubmit"/>
            </form>
            
        </div><!-- end #body -->
    </div><!-- end .column.left -->
    
</div><!-- end #container, .container-fluid -->

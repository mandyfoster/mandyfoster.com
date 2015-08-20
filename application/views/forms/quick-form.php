<form name="contactMe" class="contactMe" action="" method="post">
    <label>Name:</label><input type="text" class="name" name="name"  value="<?php echo set_value('name'); ?>"/><br/>
    <label>Email:</label><input type="text" class="email" name="email"  value="<?php echo set_value('email'); ?>"/><br/>
    <label>Company:</label><input type="text" class="company" name="company"  value="<?php echo set_value('company'); ?>"/><br/>
    <label>Subject:</label><input type="text" class="subject" name="subject"  value="<?php echo set_value('subject'); ?>"/><br/>
    <textarea name="myMessage" placeholder="Message"  value="<?php echo set_value('message'); ?>"></textarea><br/>

    <input type="submit" class="mySubmit" name="mySubmit"/>
</form>

<div class="validationErrors"><?php echo validation_errors(); ?></div>

        </div><!-- end #body -->
    </div><!-- end .column.left -->
    
</div><!-- end #container, .container-fluid -->
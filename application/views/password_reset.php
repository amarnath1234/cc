
<?php
        include 'forms/form_elements.php';
        ?>
<div class="mini_box" id="password_reset">
            <?php
            $formAttributes = array('class' => 'password_reset_form', 'id' => 'password_reset_form','onSubmit' => 'return passwordResetFormCheck()');
            $submitAttributes = 'class = "site_button"';
            echo form_open('passwordReset', $formAttributes);

            ?>
            <div class='box_title'> Password Reset </div>
            <a class="top_links" href="">Login</a>
            <p>Please enter the new password for your account</p>
            <br/><?=form_input($password)?>
            <br/><?=form_input($retypePassword)?>
            <br/><?php echo form_submit('passwordResetSubmit', 'Reset Password', $submitAttributes);?>
            
            
            <br/><div class='error_msg'>Invalid credentials! Please try again..</div>
            <div style="clear:both;"></div>
            <?php
            echo form_close();
            ?>
        </div>
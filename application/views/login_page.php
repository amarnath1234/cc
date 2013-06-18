        <?php
        include 'forms/form_elements.php';
        ?>

        <div class="mini_box" id="forgot_password">
            <?php 
            $formAttributes = array('class' => 'forgot_password_form', 'id' => 'forgot_password_form', 'onSubmit' => 'return passwordForgotFormCheck()');
            $submitAttributes = 'class = "site_button"';
            echo form_open('account', $formAttributes);
            ?>
            <div class="box_title">Password recovery</div>
            <a class="top_links" href="#" id="showLoginBox">Log In</a>
            
            <p>Enter your email address below to get the password reset link</p>
            <br/><?=form_input($email)?>
            
            <?php echo form_submit('passwordSubmit', 'Get mail', $submitAttributes);?>            
            
            <br/><br/><div class='error_msg'>Invalid email! Please try again..</div>
            <?php            
            echo form_close();
            ?>            
        </div>    

        <div class="mini_box" id="login_container">
            <?php
            $formAttributes = array('class' => 'login_form', 'id' => 'login_form','onSubmit' => 'return loginFormCheck()');
            $submitAttributes = 'class = "site_button"';
            echo form_open('account', $formAttributes);
            ?>
            <div class='box_title'> Log In </div>
            <a class="top_links" href="#" id="showForgotPasswordBox">Forgot Password?</a>
            <br/><?=form_input($email)?>
            <br/><?=form_input($password)?>
            
            <br/><?php echo form_submit('loginSubmit', 'Log In', $submitAttributes);?>            
            
            <br/><div id="loginErrorMsg" class='error_msg'></div>
            <div style="clear:both;"></div>
            <?php
            echo form_close();
            ?>
        </div>
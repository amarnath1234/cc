<html>
    <head>
        <title>cc - login</title>
    </head>
    <body>
        <div id="login_container">
            <?php
            $formAttributes = array('class' => 'login_form', 'id' => 'login_form');

            echo form_open('account', $formAttributes);

            $email = array(
              'name'        => 'email',
              'id'          => 'email',
              'class'       => 'form_input', 
              'value'       => '',
              'maxlength'   => '100',
              'placeholder' => 'Email'
            );
            
            $password = array(
              'name'        => 'password',
              'id'          => 'password',
              'class'       => 'form_input', 
              'type'        => 'password', 
              'value'       => '',
              'maxlength'   => '100',
              'placeholder' => 'Password'
            );

            echo form_input($email);
            echo '<br/>'.form_input($password);
            echo '<br/>'.form_submit('loginSubmit', 'Login');
            echo form_close();
            ?>
        </div>
    </body>
</html>
    
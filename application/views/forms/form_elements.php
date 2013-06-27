<?php

/* here $dbData is a variable which carries the value from the database to the view 
 * via the controller.(incase you need to reuse a form for editing purposes) This has to be set in the controller in order for this to work
 */

$email = array(
    'name' => 'email',
    'id' => 'email',
    'class' => 'form_input',
    'value' => set_value('email', isset($dbData['email']) ? $dbData['email'] : ''),
    'maxlength' => '100',
    'placeholder' => 'Email'
);

$password = array(
    'name' => 'password',
    'id' => 'password',
    'class' => 'form_input',
    'type' => 'password',
    'value' => set_value('password', isset($dbData['password']) ? $dbData['password'] : ''),
    'maxlength' => '100',
    'placeholder' => 'Password'
);

$retypePassword = array(
    'name' => 'retypePassword',
    'id' => 'retypePassword',
    'class' => 'form_input',
    'type' => 'password',
    'value' => set_value('retypePassword', isset($dbData['retypePassword']) ? $dbData['retypePassword'] : ''),
    'maxlength' => '100',
    'placeholder' => 'Re-Enter Password'
);

$title = array(
    'name' => 'title',
    'id' => 'title',
    'class' => 'form_input',
    'value' => set_value('title', isset($dbData['title']) ? $dbData['title'] : ''),
    'maxlength' => '100',
    'placeholder' => 'Title'
);

$description = array(
    'name' => 'description',
    'id' => 'description',
    'class' => 'form_input',
    'value' => set_value('description', isset($dbData['description']) ? $dbData['description'] : ''),
    'maxlength' => '100',
    'placeholder' => 'Description'
);

$howToUse = array(
    'name' => 'howtouse',
    'id' => 'howtouse',
    'class' => 'form_input',
    'value' => set_value('howtouse', isset($dbData['howtouse']) ? $dbData['howtouse'] : ''),
    'maxlength' => '100',
    'placeholder' => 'How to use steps ...'
);

$fileUpload = array(
    'name' => 'fileupload',
    'id' => 'fileupload',
    'class' => 'form_input',
);
?>
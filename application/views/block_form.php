<?php
   include 'forms/form_elements.php';
?>

<div class="content_box">
    <div class="main_box_left">
        <?php 
            $formAttributes = array('class' => 'block_form', 'id' => 'block_form', 'onSubmit' => 'return blockFormCheck()');
            $submitAttributes = 'class = "site_button"';
            if($action == 'register') {
                echo form_open('register', $formAttributes);
                ?> <div class="box_title">New Item</div> <?php
            } else {
                echo form_open('edit/'.$id, $formAttributes);
                ?> <div class="box_title">Editing - <?php echo isset($dbData['title'])?$dbData['title']:'';?></div> <?php
            }
            
            ?>
        
        <p>this is some content
        <br/><?=form_input($title)?>
        </p>
        <?php            
            echo form_close();
            ?>  
        
    </div>
    <div class="help_box_right">
        dfhfgjhfg<br/>fdgdfgdfg            
    </div>
</div>
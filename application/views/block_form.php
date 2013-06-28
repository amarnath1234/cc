<?php
   include 'forms/form_elements.php';
   include 'upload/view.php';
?>
<link href="<?=base_url()?>css/uploadify/uploadify.css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/cc_block_form.js"></script>


<div class="content_box">
    <div class="main_box_left">
        <?php 
            $formAttributes = array('class' => 'block_form', 'id' => 'block_form', 'onSubmit' => 'return blockFormCheck()');
            $submitAttributes = 'class = "site_button"';
            if($action == 'register') {
                echo form_open('register', $formAttributes);
                ?> <div class="box_title">New Item</div> <?php
            } else {
                echo form_open_multipart('edit/'.$id, $formAttributes);
                ?> <div class="box_title">Editing - <?php echo isset($dbData['title'])?$dbData['title']:'';?></div> <?php
            }            
            ?>
        
        <p>
            
            <script type="text/javascript" src="<?=base_url()?>/js/nicEdit.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
  
            <? echo form_label('Enter Title', 'title');?>
            <br/><?=form_input($title)?>
            <br/><br/>
            
            <? echo form_label('Enter Description', 'description');?>
            <br/><?=form_textarea($description)?>
            <br/><br/>
            
            <? echo form_label('Enter "How to Use" Steps &nbsp;&nbsp;&nbsp; [ Tip: Specify in points]', 'howtouse');?>
            <br/><?=form_textarea($howToUse)?>
            <br/><br/>
        
        <table width="100%">
            <tr>
                <td style="width: 130px;">
                    
                    <? echo form_upload($uploadButton);?>
                </td>
                <td style="width: 40px;">
                    or
                </td>
                <td>
                    <? echo form_input($gitLink);?>
                </td>
            </tr>
        </table>
           
            
            <div id="tempUploadedFiles" class="tempUploadedFiles">
                
            </div>    
        <div id="target">
            
        </div>
             <br/>
        <?php echo form_submit('blockFromSubmit', ' Save ', $submitAttributes);?>            
        <a href="" class="submitExtras"> Preview </a>    
        </p>
        <?php            
            echo form_close();
            ?>  
        <div style="clear:both;"></div>
    </div>
    <div class="help_box_right">
        dfhfgjhfg<br/>fdgdfgdfg            
    </div>
</div>
<div style="clear:both;"></div>
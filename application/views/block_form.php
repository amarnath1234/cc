<?php
   include 'forms/form_elements.php';
   require_once "phpuploader/include_phpuploader.php"; 
?>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/cc_block_form.js"></script>
<script type="text/javascript">
	function doStart()
	{
		var uploadobj = document.getElementById('myuploader');
		if (uploadobj.getqueuecount() > 0)
		{
			uploadobj.startupload();
		}
		else
		{
			alert("Please browse files for upload");
		}
	}
</script>
        
<div class="content_box">
    <div class="main_box_left" id="ContributeEditBlockForm">
        <?php 
            $formAttributes = array('class' => 'block_form', 'id' => 'block_form', 'onSubmit' => 'return blockFormCheck()');
            $submitAttributes = 'class = "site_button"';
            if($action == 'register') {
                echo form_open_multipart('register', $formAttributes);
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
                 <td>
                    <? echo form_input($gitLink);?>
                </td>
            </tr>
            <tr> 
                <td style="padding:5px;font-size: 13px;">&nbsp;&nbsp;&nbsp;&nbsp;OR</td>                
            </tr>
            <tr>
                <td style="width: 170px;">                    
                    <!-- do not need enctype="multipart/form-data" -->
                    
                    <?php			
              
			$uploader=new PhpUploader();
			$uploader->MaxSizeKB=10240;
			$uploader->Name="myuploader";
                        $uploader->SaveDirectory=  APPPATH."../upload";
			$uploader->InsertText="Upload files (Max 10M)";
			$uploader->AllowedFileExtensions="*.jpg,*.png,*.gif,*.txt,*.zip,*.rar";	
			$uploader->MultipleFilesUpload=true;
			$uploader->ManualStartUpload=true;
			$uploader->Render();
                    ?>
                    
                </td>
               
            </tr>
                
                
            </tr>
        </table>
                       
            <div id="tempUploadedFiles" class="tempUploadedFiles">
                
            </div>    
        <div id="target">
            
        </div>
             <br/>
        <?php echo form_submit('blockFromSubmit', ' Save ', $submitAttributes);?>            
        <a href="" class="submitExtras"> Preview </a>    
        <div id="block_form_err" class="error_msg">This is the error message message</div>
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
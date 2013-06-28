
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/uploadify/uploadify.css" />
<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/uploadify/jquery.uploadify.v2.1.4.min.js"></script>

	<script type="text/javascript" language="javascript">
		$(document).ready(function(){
										
					$("#upload").uploadify({
							uploader: '<?php echo base_url();?>js/uploadify/uploadify.swf',
							script: '<?php echo base_url();?>js/uploadify/uploadify.php',
							cancelImg: '<?php echo base_url();?>js/uploadify/cancel.png',
							folder: '/uploads',
                                                        buttonText : 'SELECT FILES',
                                                        queueID: 'tempUploadedFiles',
							scriptAccess: 'always',
							multi: true,
							'onError' : function (a, b, c, d) {
								 if (d.status == 404)
									alert('Could not find upload script.');
								 else if (d.type === "HTTP")
									alert('error '+d.type+": "+d.status);
								 else if (d.type ==="File Size")
									alert(c.name+' '+d.type+' Limit: '+Math.round(d.sizeLimit/1024)+'KB');
								 else
									alert('error '+d.type+": "+d.text);
								},
							'onComplete'   : function (event, queueID, fileObj, response, data) {
												//Post response back to controller
												$.post('<?php echo site_url('upload/uploadify');?>',{filearray: response},function(info){
													$("#target").append(info);  //Add response returned by controller																		  
												});								 			
							}
					});				
		});
	</script>
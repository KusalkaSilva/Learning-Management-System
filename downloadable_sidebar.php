<div class="span3" id="">
	<div class="row-fluid">
				      <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add Downloadable</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form class="" id="add_downloadble" method="post" enctype="multipart/form-data" name="upload" >
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">File</label>
                            <div class="controls">
				
									
								<input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" required>
                         
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                <input type="hidden" name="id" value="<?php echo $session_id ?>"/>
                                <input type="hidden" name="id_class" value="<?php echo $get_id; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                      
                            <div class="controls">
                                <input type="text" name="name" Placeholder="File Name"  class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                          
                            <div class="controls">
                                <input type="text" name="desc" Placeholder="Description"  class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button name="Upload" type="submit" value="Upload" class="btn btn-info" /><i class="icon-upload-alt"></i>&nbsp;Upload</button>
                            </div>
                        </div>
                    </form>
					
											<script>
			jQuery(document).ready(function($){
				$("#add_downloadble").submit(function(e){
					$.jGrowl("Uploading File Please Wait......", { sticky: true });
					e.preventDefault();
					var _this = $(e.target);
					var formData = new FormData($(this)[0]);
					$.ajax({
						type: "POST",
						url: "upload_save.php",
						data: formData,
						success: function(html){
							$.jGrowl("File Successfully  Added", { header: 'File Added' });
							window.location = 'downloadable.php<?php echo '?id='.$get_id; ?>';
						},
						cache: false,
						contentType: false,
						processData: false
					});
				});
			});
			</script>	
								</div>
                            </div>
                        </div>
                        <!-- /block -->
						

	</div>
</div>
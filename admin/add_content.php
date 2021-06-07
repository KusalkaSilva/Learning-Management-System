<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('content_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
				
							<!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Content</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="content.php"><i class="icon-arrow-left"></i> Back</a>
									
									   
									   <form class="form-horizontal" method="POST">
										<div class="control-group">
										<label class="control-label" for="inputEmail">Title</label>
										<div class="controls">
										<input type="text" name="title" id="inputEmail" placeholder="Title">
										</div>
										</div>
										
												<div class="control-group">
										<label class="control-label" for="inputPassword">Content</label>
										<div class="controls">
												<textarea name="content" id="ckeditor_full">
										
												</textarea>
										</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Save</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['save'])){
										$title = $_POST['title'];
										$content = $_POST['content'];
										mysql_query("insert into content (title,content) value('$title','$content')")or die(mysql_error());
										?>
										<script>
										window.location = 'content.php';
										</script>
										<?php
										}
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>
<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $subject_id = $_GET['subject_id']; ?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_overview_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['subject_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Subject Overview</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
								<a href="subject_overview.php<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-arrow-left"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php 
								$subject_query = mysql_query("select * from class_subject_overview where  class_subject_overview_id  = '$subject_id'")or die(mysql_error());
								$subject_row = mysql_fetch_array($subject_query);
								?>
														<form class="form-horizontal" method="post">
																<div class="control-group">
																	<label class="control-label" for="inputPassword">Subject Overview Content:</label>
																	<div class="controls">
																			<textarea name="content" id="ckeditor_full"><?php echo $subject_row['content']; ?></textarea>
																	</div>
																</div>
														<div class="control-group">
														<div class="controls">
														
														<button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i> Save</button>
														</div>
														</div>
														</form>
										<?php
										if (isset($_POST['save'])){
										$content = $_POST['content'];
										mysql_query("update class_subject_overview set content = '$content' where class_subject_overview_id = '$subject_id'")or die(mysql_error());
										?>
										<script>
											window.location = 'subject_overview.php<?php echo '?id='.$get_id; ?>';
										</script>
										<?php
										}
										
										?>
						
                                </div>
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
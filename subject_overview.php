<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_overview_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
									<?php $query = mysql_query("select * from teacher_class
										LEFT JOIN class_subject_overview ON class_subject_overview.teacher_class_id = teacher_class.teacher_class_id
										where class_subject_overview.teacher_class_id = '$get_id'")or die(mysql_error());
										$row = mysql_fetch_array($query);
										$id = $row['class_subject_overview_id'];
										$count = mysql_num_rows($query);
									if ($count > 0){
									?>
										  <a href="edit_subject_overview.php<?php echo '?id='.$get_id; ?>&<?php echo 'subject_id='.$id; ?>" class="btn btn-info"><i class="icon-pencil"></i> Edit Subject Overview</a>
									 <?php }else{ ?>
										     <a href="add_subject_overview.php<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-plus-sign"></i> Add Subject Overview</a>
									 <?php } ?>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php echo $row['content']; ?>
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
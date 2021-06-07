<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_overview_link_student.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					  
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  											<?php $query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
										
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$row = mysql_fetch_array($query);
										$id = $row['teacher_class_id'];
				
										?>
										
										
										Lecturer: <strong><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></strong>
															<br>
															<hr>
										<?php $query = mysql_query("select * from teacher_class
											LEFT JOIN class_subject_overview ON class_subject_overview.teacher_class_id = teacher_class.teacher_class_id
											where class_subject_overview.teacher_class_id = '$get_id'")or die(mysql_error());
											$row_subject = mysql_fetch_array($query); ?>
										<?php echo $row_subject['content']; ?>
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
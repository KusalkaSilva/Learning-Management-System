<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_notification_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

							<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>

  					<form id="domainTable" action="read_teacher.php" method="post">
						<?php  if($not_read == '0'){
								}else{  ?>
									<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
						
								<?php  }  ?>
				
					<?php $query = mysql_query("select * from teacher_notification
					LEFT JOIN teacher_class on teacher_class.teacher_class_id = teacher_notification.teacher_class_id
					LEFT JOIN student on student.student_id = teacher_notification.student_id
					LEFT JOIN class on teacher_class.class_id = class.class_id
					LEFT JOIN subject on teacher_class.subject_id = subject.subject_id
					where teacher_class.teacher_id = '$session_id'  order by  teacher_notification.date_of_notification DESC
					")or die(mysql_error());
					$count = mysql_num_rows($query);
					while($row = mysql_fetch_array($query)){
					$assignment_id = $row['assignment_id'];
					$get_id = $row['teacher_class_id'];
					$id = $row['teacher_notification_id'];
					
					
					$query_yes_read = mysql_query("select * from notification_read_teacher where notification_id = '$id' and teacher_id = '$session_id'")or die(mysql_error());
					$read_row = mysql_fetch_array($query_yes_read);
					
					$yes = $read_row['student_read']; 
				
					?>
									<div class="post"  id="del<?php echo $id; ?>">
										<?php  if ($yes == 'yes'){
										}else{ 
										?>
										  

										<input id=""  name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
										<?php  } ?>	
											<strong><?php echo $row['firstname']." ".$row['lastname'];  ?></strong>
											<?php echo $row['notification']; ?> In <b><?php echo $row['fname']; ?></b>
											<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>&<?php echo 'post_id='.$assignment_id; ?>">
											<?php echo $row['class_name']; ?> 
											<?php echo $row['subject_code']; ?> 
									 
											</a>
										<hr>
										<div class="pull-right">
										<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
										</div>
											
									
											
											</div>
					<?php
					}
					?>

					
					</form>
						
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
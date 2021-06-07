					<?php
						$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
						$school_year_query_row = mysql_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
				
	 				<?php $query_yes = mysql_query("select * from teacher_class_student
					LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
					LEFT JOIN class ON class.class_id = teacher_class.class_id 
					LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
					LEFT JOIN teacher ON teacher.teacher_id = teacher_class_student.teacher_id 
					JOIN notification ON notification.teacher_class_id = teacher_class.teacher_class_id 
					where teacher_class_student.student_id = '$session_id' and school_year = '$school_year'   order by notification.date_of_notification DESC
					")or die(mysql_error());
					$count_no = mysql_num_rows($query_yes);

		
		            ?>
					<?php $query_no = mysql_query("select * from notification 
					LEFT JOIN notification_read ON notification_read.notification_id = notification.notification_id
					where notification_read.student_id  = '$session_id'
					")or die(mysql_error());
					$count_yes = mysql_num_rows($query_no);
					
		            ?>
					
					<?php $not_read = $count_no -  $count_yes; ?>
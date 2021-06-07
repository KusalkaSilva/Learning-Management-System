					<?php
						$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
						$school_year_query_row = mysql_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
				
					<?php $query_yes = mysql_query("select * from teacher_notification
					LEFT JOIN notification_read_teacher on teacher_notification.teacher_notification_id =  notification_read_teacher.notification_id
					where teacher_id = '$session_id' 
					")or die(mysql_error());
					$count_no = mysql_num_rows($query_yes);
		            ?>
					<?php $query = mysql_query("select * from teacher_notification
					LEFT JOIN teacher_class on teacher_class.teacher_class_id = teacher_notification.teacher_class_id
					LEFT JOIN class on teacher_class.class_id = class.class_id
					LEFT JOIN subject on teacher_class.subject_id = subject.subject_id
					where teacher_class.teacher_id = '$session_id' 
					")or die(mysql_error());
					$count = mysql_num_rows($query);
		            ?>
					
					<?php $not_read = $count -  $count_no; ?>
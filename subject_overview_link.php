<div class="span3" id="sidebar">
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dasboard_teacher.php"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li class=""><a href="my_students.php<?php echo '?id='.$get_id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Students</a></li>
				<li class="active"><a href="subject_overview.php<?php echo '?id='.$get_id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject Overview</a></li>
				<li class=""><a href="downloadable.php<?php echo '?id='.$get_id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Downloadable Materials</a></li>
				<li class=""><a href="announcements.php<?php echo '?id='.$get_id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Announcements</a></li>
				<li class=""><a href="class_calendar.php<?php echo '?id='.$get_id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class Calendar</a></li>

			</ul>
			<?php include('search_other_class.php'); ?>		
</div>


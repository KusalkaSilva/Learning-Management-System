<div class="span3" id="sidebar">
	<?php include('teacher_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dasboard_teacher.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Class</a></li>
		<li class=""><a href="notification_teacher.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
			<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
		</a></li>
		<li class=""><a href="teacher_message.php"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Message</a></li> 
		<li class=""><a href="teacher_backack.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Backpack</a></li> 
		<!-- <li class=""><a href="teacher_quiz.php"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Quiz</a></li>  -->
		<li class=""><a href="add_downloadable.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Downloadables</a></li> 
		<li class=""><a href="add_announcement.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Announcement</a></li> 
	</ul>
	<?php include('search_other_class.php'); ?>	
</div>


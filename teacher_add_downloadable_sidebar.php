<div class="span3" id="sidebar">
	<?php include('teacher_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dasboard_teacher.php">&nbsp;My Class</a></li>
		<li class=""><a href="notification_teacher.php">&nbsp;Notification
			<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
		</a></li>
		<li class="active"><a href="add_downloadable.php">&nbsp;Add Downloadables</a></li> 
		<li class=""><a href="add_announcement.php">&nbsp;Add Announcement</a></li> 

	</ul>
	<?php include('search_other_class.php'); ?>	
</div>


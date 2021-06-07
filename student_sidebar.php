<div class="span3" id="sidebar">
					<?php include('count.php'); ?>
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
			<li class="active"><a href="dashboard_student.php"> My Class</a></li>
			<li class="">
				<a href="student_notification.php"> Notification
				<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
				</a>
			</li>
		</ul>	
</div>


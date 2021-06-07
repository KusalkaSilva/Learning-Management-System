	<div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
               <div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
                   <a class="brand" href="#">Learning Management System</a>
							<div class="nav-collapse collapse">
								<ul class="nav pull-right">
												<?php $query= mysql_query("select * from teacher where teacher_id = '$session_id'")or die(mysql_error());
														$row = mysql_fetch_array($query);
												?>
												<li class="dropdown">
													<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> </a><li><a href="change_password_teacher.php"><i class="icon-circle"></i> Change Password</a></li>
													<li><a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a></li>
																						</ul>
							</div>
                   <!--/.nav-collapse -->
               </div>
           </div>
</div>	
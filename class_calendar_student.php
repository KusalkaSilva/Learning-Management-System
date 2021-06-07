<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_student_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
						
                        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span12">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Calendar</div>
										</div>
										<div id='calendar'></div>		
							<!-- block -->
									</div>
										
							
							
						
										</div>
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
		<?php include('class_calendar_script.php'); ?>
    </body>
</html>
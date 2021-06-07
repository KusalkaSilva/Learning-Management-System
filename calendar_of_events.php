<?php include('header_dashboard.php'); ?>
    <body id="class_div">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">

										<?php
											$mission_query = mysql_query("select * from content")or die(mysql_error());
											$mission_row = mysql_fetch_array($mission_query);
											echo $mission_row['title'];
                                            echo $mission_row['content'];
										?>
								<hr>

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
						<!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add Batch</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_class">
										<div class="control-group">
											<label>Batch:</label>
                                          <div class="controls">
											<input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                                            <select name="class_id"  class="" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from class order by class_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label>Subject:</label>
                                          <div class="controls">
                                            <select name="subject_id"  class="" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from subject order by subject_code");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_code']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label>Academic Year:</label>
                                          <div class="controls">
											<?php
											$query = mysql_query("select * from school_year order by school_year DESC");
											$row = mysql_fetch_array($query);
											?>
											<input id="" class="span5" type="text" class="" name="school_year" value="<?php  echo $row['school_year']; ?>" >
                                          </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-success"><i class="icon-save"></i> Save</button>
                                          </div>
                                        </div>
                                </form>
								
            <script>
			jQuery(document).ready(function($){
				$("#add_class").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "add_class_action.php",
						data: formData,
						success: function(html){
						if(html=="true")
						{
						$.jGrowl("Class Already Exist", { header: 'Add Class Failed' });
						}else{
							$.jGrowl("Classs Successfully  Added", { header: 'Class Added' });
							var delay = 500;
							setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
						}
						}
					});
				});
			});
			</script>		

								</div>
                            </div>
                        </div>
                        <!-- /block -->
						

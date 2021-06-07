<form id="signin_student" class="form-signin" method="post">
    <h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as Student</h3>
    <input type="text" class="input-block-level" id="username" name="username" placeholder="ID Number" required>
    <input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Firstname" required>
    <input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Lastname" required>
    <label>Batch</label>
    <select name="class_id" class="input-block-level span5">
        <option></option>
        <?php
        $query = mysql_query("select * from class order by class_name ")or die(mysql_error());
        while($row = mysql_fetch_array($query)){
        ?>
        <option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" minlength="8" required>
    <input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" minlength="8" required>
    <button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign in</button>
</form>



<script>
    jQuery(document).ready(function () {
        jQuery("#signin_student").submit(function (e) {
            e.preventDefault();

            var password = jQuery('#password').val();
            var cpassword = jQuery('#cpassword').val();


            if (password == cpassword) {
                var formData = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "student_signup.php",
                    data: formData,
                    success: function (html) {
                        if (html == 'true')
                        {
                            $.jGrowl("Welcome to CHMSC Learning Management System", {header: 'Sign up Success'});
                            var delay = 2000;
                            setTimeout(function () {
                                window.location = 'dashboard_student.php'
                            }, delay);
                        } else if (html == 'false') {
                            $.jGrowl("student does not found in the database Please Sure to Check Your ID Number or Firstname, Lastname and the Section You Belong. ", {header: 'Sign Up Failed'});
                        }
                    }


                });

            } else
            {
                $.jGrowl("student does not found in the database", {header: 'Sign Up Failed'});
            }
        });
    });
</script>



<a onclick="window.location = 'index.php'" id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Click here to Login</a>






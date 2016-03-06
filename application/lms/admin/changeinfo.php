<?php

session_start();

require_once('../../class/class.db.php');
$database = new DB();
$username = $_SESSION['username'];

$result = $database->query("SELECT * FROM `login` WHERE `Email` = '$username'");

?>
<div class="admin-page-load">
    <div class="row">
        <h1 class="page-header" style="margin:5px 10px 20px">
            Change Info
        </h1>

        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="../../website/loginAndSignup/edit.php">
                    <label>First Name:</label>
                    <input type="text" class="form-control" name="fname" value = "<?php echo $result[0]['F_Name'] ?>" placeholder="Enter first name" required="true">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="lname" value = "<?php echo $result[0]['L_Name'] ?>"placeholder="Enter last name" required="true">
                    <input type="hidden" class="form-control" name="uname" value = "admin" placeholder="Enter user name" required="true">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" name="email" value = "<?php echo $result[0]['Email'] ?>" placeholder="Enter email" required="true">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="pass" value = "<?php echo $result[0]['Password'] ?>" placeholder="Enter password" required="true">
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
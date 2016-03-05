<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();
$year= filter_var($_GET["year"], FILTER_SANITIZE_STRING);
?>

<body>

<div class="container">
    <div class="col-lg-8 bg-success" style="min-height: 200px"> <h1>Banner</h1> </div>
    <div class="col-lg-4">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
</div>
<div>
</div>
<div class="container">
    <div>
        <div class="col-lg-12 bg-info" style="height:100%; ">
            <div class="col-xs-6 col-xs-offset-3 text-center">
            <div><h4><i class="glyphicon glyphicon-book"></i> Modules</h4></div>
                <div>

                    <div class="list-group">

                      <?php
                        $course = $database->query("SELECT * FROM `course` WHERE `year` = '$year' AND `cate` ='SCHOOL OF COMPUTING'");


                        foreach ($course as $row) {
                            $courseName                 = $row['title'];
                            $courseID               = $row['courseID'];
                            //echo '<option value='."$courseID".'>'.$course.'</option>';
                            echo '<a href="course.php?id='.$courseID.'"  class="list-group-item" >'.$courseName.'</a>';
                        }

                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


<?php
include "../lmsFooter.php";

?>

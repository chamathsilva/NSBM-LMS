<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();
$year= filter_var($_GET["year"], FILTER_SANITIZE_STRING);
?>

<body>

<div class="container">
    <div class="col-lg-12 banner" style="min-height: 275px"> </div>
</div>
<div>
</div>
<div class="container bdcolor">
    <div>
        <div class="col-lg-12" style="height:100%; ">
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

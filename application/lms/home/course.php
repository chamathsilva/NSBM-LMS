<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();
$id= filter_var($_GET["id"], FILTER_SANITIZE_STRING);
?>

<body>

<div class="container">
    <div class="row banner" style="min-height: 275px"></div>
</div>
<div>
</div>
<div class="container bdcolor">
    <div class="row">
        <div class="col-lg-12" style="height:100%; ">
            <div class="col-xs-3 text-center" style="height: 100%;">
                <div><h1>Main Menu</h1></div>
                <div style="font-size:18px;color:#fff">

                    <div class="list-group">
                        <a href="abountUs.php" class="list-group-item">About Us</a>
                        <a href="contactus.php" class="list-group-item">Contacts Us</a>
                    </div>
                </div>
                <hr>
                <div style="font-size:15px;color:#fff">
                    <div class="list-group">
                        <a href="../../website/loginAndSignup/logout.php" class="list-group-item">Log Out</a>
                        <a href="../../website/editUser.php" class="list-group-item">Change Info</a>
                    </div>
                </div>


            </div>
            <div class="col-xs-6  text-center">
                <div><h4><i class="glyphicon glyphicon-book"></i> Lessons</h4></div>
                <div>
                    <ul>

                        <div class="list-group">

                            <?php
                            $lesson = $database->query("SELECT * FROM `lesson` WHERE `course` = $id");
                            //var_dump($lesson);


                            foreach ($lesson as $row) {
                                $lessonTitle                = $row['lessonTitle'];
                                $extension                  = $row['extension'];
                                $id                         = $row['Id'];
                                $dataname                   = $row['fileName'];

                                $src_path           = '../../../data/uploads/'.$dataname;
                                //echo '<option value='."$courseID".'>'.$course.'</option>';
                                if($extension =='pdf'){
                                    echo '<a href="pdfView.php?path='.$src_path.'"  class="list-group-item" >'.$lessonTitle.'</a>';
                                }
                                elseif($extension =='pptx' ||$extension =='ppt' ){
                                    echo '<a  class="list-group-item download="'.$src_path.'" href="'.$src_path.'" title="ImageName"> '.$lessonTitle.'</a>';
                                }

                                elseif($extension = 'mp4'){
                                    echo '<a href="videoView.php?path='.$src_path.'"  class="list-group-item" >'.$lessonTitle.'</a>';

                                }


                            }

                            ?>

                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include "../lmsFooter.php";

?>

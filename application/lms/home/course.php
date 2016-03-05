<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();
$id= filter_var($_GET["id"], FILTER_SANITIZE_STRING);
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
                                    echo '<a download="'.$src_path.'" href="'.$src_path.'" title="ImageName">'.$lessonTitle.'</a>';
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

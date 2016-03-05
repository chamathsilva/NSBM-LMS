<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();


$src_path= filter_var($_GET["path"], FILTER_SANITIZE_STRING);
?>

<body>

<div class="container">
    <div class="col-lg-12 banner" style="min-height: 275px"></div>
</div>
<div>
</div>
<div class="container bdcolor">
    <div>
        <div class="col-lg-12" style="height:100%; ">
                <div><h4><i class="glyphicon glyphicon-book"></i> Modules</h4></div>
                <div>

                        <div class="embed-responsive embed-responsive-16by9">
                            <video id="myVideo" class="embed-responsive-item"  height ="px" autoplay controls>
                                <source src="<?php echo $src_path; ?>">
                            </video>
                        </div>

                    </div>

        </div>
    </div>

</div>


<?php
include "../lmsFooter.php";

?>

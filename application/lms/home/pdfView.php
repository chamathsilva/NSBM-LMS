<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();
$src_path= filter_var($_GET["path"], FILTER_SANITIZE_STRING);
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: ../../website/login.php');
}
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
            <div class="col-xs-8 col-xs-offset-2 text-center">
                <div>
                    <div class="list-group">

                        <div class="list-group">

                            <embed width="100%" height="80%" src="<?php echo $src_path; ?>" type="application/pdf"></embed>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include "../lmsFooter.php";

?>


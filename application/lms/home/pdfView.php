<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();
$src_path= filter_var($_GET["path"], FILTER_SANITIZE_STRING);
?>

<body>

<div class="container">
    <div class="row banner" style="min-height: 275px"></div>
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
    <div class="row">
        <div class="col-lg-12" style="height:100%; ">
                <div><h4><i class="glyphicon glyphicon-book"></i> Modules</h4></div>
                <div>
                    <ul>

                        <div class="list-group">

                            <embed width="100%" height="80%" src="<?php echo $src_path; ?>" type="application/pdf"></embed>

                        </div>
                    </ul>
                </div>
            </div>

    </div>

</div>


<?php
include "../lmsFooter.php";

?>

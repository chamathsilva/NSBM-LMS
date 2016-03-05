<?php
include "../lmsHeader.php";
require_once("../../class/class.db.php");
$database=new DB();


$src_path= filter_var($_GET["path"], FILTER_SANITIZE_STRING);
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

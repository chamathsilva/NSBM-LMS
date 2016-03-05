<?php
include "../lmsHeader.php";

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
        <div class="col-lg-3 bg-success" style="height: 100%">
            <div><p>Main Menu</p></div>
        </div>
        <div class="col-lg-6 bg-info" style="height:100%; ">
            <div><h4><i class="glyphicon glyphicon-book"></i>COURSE CATEGORIES</h4></div>
            <div>
                <ul>
                    <div class="list-group">
                        <a href="schoolOfComputing.php"  class="list-group-item" >SCHOOL OF COMPUTING</a>
                        <a href="schoolOfManagement.php" class="list-group-item">SCHOOL OF MANAGEMENT</a>
                        <a href="schoolOfEng.php" class="list-group-item">SCHOOL OF ENGINEERING</a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 bg-warning" style="height: 100%">
            <div><p>CALENDAR</p></div>
        </div>
    </div>

</div>


<?php
include "../lmsFooter.php";

?>

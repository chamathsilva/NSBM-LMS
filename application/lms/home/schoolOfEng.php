<?php
include "../lmsHeader.php";
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
                <div><h4><i class="glyphicon glyphicon-book"></i>Sub-categories</h4></div>
                <div>
                    <ul>
                        <div class="list-group">
                            <a href="schoolOfEngSub.php?year=Year1"  class="list-group-item" >Year 1</a>
                            <a href="schoolOfEngSub.php?year=Year2" class="list-group-item">Year 2</a>
                            <a href="schoolOfEngSub.php?year=Year3"class="list-group-item">Year 3</a>
                            <a href="schoolOfEngSub.php?year=Year4" class="list-group-item">Year 4</a>
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

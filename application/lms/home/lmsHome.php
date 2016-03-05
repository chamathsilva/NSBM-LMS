<?php
include "../lmsHeader.php";

?>
<body>

<div class="container">
    <div class=" banner" style="min-height: 275px"></div>
</div>
<div>
</div>
<div class="container bdcolor">
    <div>
        <div class="col-lg-3" style="height: 100%;">
            <div><h1>Main Menu</h1></div>
            <div style="font-size:18px;color:#fff">
                <ul>
                    <li>Student Handbooks</li>
                    <li>Awards Handbooks</li>
                    <li>Regulations</li>
                    <li>Contacts</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6" style="height:100%; ">
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
        <div class="col-lg-3" style="height: 100%">
            <div><p>CALENDAR</p></div>
        </div>
    </div>

</div>


<?php
include "../lmsFooter.php";

?>

<script type="text/javascript">
        $('#mydates').glDatePicker();
</script>


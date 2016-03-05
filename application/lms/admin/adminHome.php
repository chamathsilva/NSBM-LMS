<?php
include "../lmsHeader.php";

?>
<body>

<div class="container">
    <div class="col-lg-12 banner" style="min-height: 275px"></div>
</div>
<div>
    <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="adminHome.php">LMS</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="adminHomeManage.php">Manage</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
</div>
<div class="container bdcolor">
    <div>
        <div class="col-lg-3 bg-success" style="height: 100%">
            <div><p>Menu</p></div>

            <div class="list-group">

                <a href="addNewCourse.php" class="list-group-item admin-pg">Add New Course</a>
                <a href="addNewLesson.php" class="list-group-item admin-pg">Add New Lesson</a>
                <a href="addNewNewsUpdate.php" class="list-group-item admin-pg">Add New Update </a>
                <a href="addNewAdmin.php" class="list-group-item admin-pg">Add New Admin</a>

            </div>
        </div>


        <div class="col-lg-9 bg-info" style="height:100%;">
            <div id ="pageLoad"></div>
        </div>

    </div>
</div>



<?php
include "../lmsFooter.php";

?>

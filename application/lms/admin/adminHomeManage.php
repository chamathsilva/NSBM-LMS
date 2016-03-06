<?php
include "../lmsHeader.php";

?>
<body>

<div class="container">
    <div class="row banner" style="min-height: 275px"></div>
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
    <div class="row">
        <div class="col-lg-3" style="height: 100%;border: outset">

            <div><h1>Main Menu</h1></div>
            <div class="list-group">

                <a href="manageCourse.php" class="list-group-item admin-pg">Manage Course</a>
                <a href="manageLesson.php" class="list-group-item admin-pg">Manage Lesson</a>
                <a href="manageNewsUpdate.php" class="list-group-item admin-pg">Manage News Update </a>
                <a href="manageAdmin.php" class="list-group-item admin-pg">Manage Admin</a>
                <a href="manageStudent.php" class="list-group-item admin-pg">Manage Student</a>

            </div>

        </div>

        <div class="col-lg-9 text-center" style="height:100%;border: outset ">
            <div>
                <div id ="pageLoad"></div>
            </div>
        </div>

    </div>

</div>


<?php
include "../lmsFooter.php";

?>


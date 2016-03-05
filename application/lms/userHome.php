
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selikno Holdings</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--custom admin style -->
    <link rel="stylesheet" href="../../assets/css/custom/adminstyle.css">
    <link rel="stylesheet" href="../../assets/css/selikno.css">

    <!--use for animate notification -->
    <link rel="stylesheet" href="../../assets/css/animate.css">  <!-- meke wadak nathi ewa makala danna -->

    <!--data table CSS -->
    <link rel="stylesheet" href="../../assets/dataTable/css/jquery.dataTables.css">

    <!--circle load -->

    <link rel="stylesheet" href="../../assets/css/percircle.css">

    <link rel="stylesheet" href="../../assets/css/sb-admin-2.css">
    <link rel="stylesheet" href="../../assets/css/metisMenu.min.css">

    <!--date time -->
    <link rel="stylesheet" href="../../assets/DateTime/css/bootstrap-datetimepicker.min.css">

    <!-- select -->
    <link rel="stylesheet" href="../../assets/Bselect/css/bootstrap-select.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Jquery -->
    <script src="../../assets/JS/jquery.min.js"></script>
    <script>
        var branchId;
        var userId;

        $(document).ready(function() {


            var pageWrapper = $("#page-wrapper");
            $("a.admin-pg").on("click", function(e) {
                e.preventDefault();
                pageWrapper.empty();
                pageWrapper.prepend('<img style="margin-left:50%;" src="../../assets/images/ajax-loader.gif" /> Loading...</div>');
                pageWrapper.load(this.href);
            });
            window.onload = pageWrapper.load('stockBranchSheet.php');
        });
    </script>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="userHome.php">Selikno Holdings</a>
        </div>
        <!-- /.navbar-header -->w

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="../includes/profile.php" class="admin-pg"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../../controllers/userLoginRegistration/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="lessons.php" class="admin-pg"><i class="fa fa-table fa-fw"></i>Lessons</a>
                    </li>

                    <li>
                        <a href="admin/uploadFileInterface.php" class="admin-pg"><i class="fa fa-table fa-fw"></i>FILE UPLOAD</a>
                    </li>

                    <li>
                        <a href="latestUpdateInterface.php" class="admin-pg"><i class="fa fa-table fa-fw"></i> LATEST UPDATES</a>
                    </li>

                    <li>
                        <a href="../admin/registerRepair.php" class="admin-pg"><i class="fa fa-table fa-fw"></i>Register Repair</a>
                    </li>


                    <li>
                        <a href="repairStock.php" class="admin-pg"><i class="fa fa-table fa-fw"></i>Repair Stock</a>
                    </li>




                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">



    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


<!-- circle load -->
<script type="text/javascript" src="../../assets/JS/percircle.js"></script>



<script src="../../assets/JS/bootstrap.min.js"></script>
<script src="../../assets/JS/bootstrap-notify.min.js"></script>
<script src="../../assets/dataTable/js/jquery.dataTables.js"></script>
<script src="../../assets/JS/jquery.validate.min.js"></script>
<script src="../../assets/JS/additional-methods.min.js"></script>

<script src="../../assets/JS/jquery.form.min.js"></script>



<!--Date time -->
<script src="../../assets/DateTime/js/bootstrap-datetimepicker.min.js"></script>

<!--Date format -->
<script src="../../assets/dataformat/jquery-dateFormat.min.js"></script>


<!--Select -->
<script src="../../assets/Bselect/js/bootstrap-select.js"></script>


<script src="../../assets/JS/validation.js"></script>
<script src="../../assets/JS/selecterList.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../../assets/JS/sb-admin-2.js"></script>
<script src="../../assets/JS/metisMenu.min.js"></script>


</body>

</html>


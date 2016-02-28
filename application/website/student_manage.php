<html>
<head>
    <title>Student Manage</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>

<!--Adminbar-->
<?php
include_once'includes\adminbar.php';
?>

<div class="container"><!--Student Infomation-->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">Home</a></li>
    </ul>
    <div class="col-md-10 col-md-offset-1"><br>
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>Student Id</th>
                <th>Student Name</th>
                <th>Index Number</th>
                <th>Email</th>
                <th>Faculty</th>
                <th>Course</th>
                <th>Batch</th>
                <th>Date</th>
                <th>Remove</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

        <script src="../../assets/js/jquery-1.11.3.min.js"></script>
        <script src="../../assets/js/bootstrap.js"></script>
</body>
</html>
<html>
<head>
    <title>Session Manage</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>

<!--Adminbar-->
<?php
include_once'includes\adminbar.php';
?>

<div class="container"><!--Session Infomation-->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">Home</a></li>
    </ul>
    <div class="col-md-10 col-md-offset-1"><br>
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>Session ID</th>
                <th>User</th>
                <th>date</th>
                <th>Login Time</th>
                <th>Logout Time</th>
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
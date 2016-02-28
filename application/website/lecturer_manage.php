<html>
<head>
    <title>Lecturer Manage</title>
    <link rel="stylesheet"
          type="text/css"
          href="css/custom.css">

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<!--Adminbar-->
<?php
include_once'includes\adminbar.php';
?>

<div class="container">
    <ul class="nav nav-tabs">

        <li class="active"><a data-toggle="tab" href="#admins" >Add New Lecturer</a></li>
        <li><a data-toggle="tab" href="#add" >Lecturers</a> </li>
    </ul>

    <div class="tab-content"><!--Add new Lecturer-->
        <div id="admins" class="tab-pane active" >
            <div class="col-md-8 col-md-offset-2"><br>
                <form class="form-horizontal"method="post" role="form" action="">
                    <label>Full Name:</label>
                    <input type="name" class="form-control" name="name" placeholder="Enter Name">
                    <label>User Name:</label>
                    <input type="name" class="form-control" name="username" placeholder="Enter user name">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    <label>Confirm Email Address:</label>
                    <input type="email" class="form-control" name="remail" placeholder="Re enter email">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <label>Comfirm Password:</label>
                    <input type="password" class="form-control" name="repassword" placeholder="Re enter password">
                    <label>ID Number:</label>
                    <input type="id" class="form-control" name="number" placeholder="Enter ID">
                    <label>Faculty:</label>
                    <select class="form-control"  name="school">
                        <option disabled selected> Choose The Faculty </option>
                        <option>Faculty of Computing</option>
                        <option>Faculty of Management</option>
                        <option>Faculty of Engineering</option>
                    </select>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" col-sm-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <br> <br> <br>
                    </div>
                </form>
            </div>
        </div>

        <div id="add" class="tab-pane fade" >
            <div class="tab-content">
                <div class="tab-pane active" id="Lecturer"><!--Lecturer Information-->
                    <div class="col-md-10 col-md-offset-1"><br>
                        <table class="table table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Lecturer Id</th>
                                <th>Lecturer Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Profile Picture</th>
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


            </div>
        </div>

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
</body>
</html>
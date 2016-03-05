<html>
<head>
    <title>Slider Manage</title>
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

        <li class="active"><a data-toggle="tab" href="#admins" >Add New Slider Image</a></li>
        <li><a data-toggle="tab" href="#add" >Slider Images</a> </li>
        </li>
    </ul>

    <div class="tab-content">
        <div id="admins" class="tab-pane active" >
            <div class="col-md-8 col-md-offset-2"><br>
                <form class="form-horizontal"method="post" role="form" action="">
                    <label>Picture:</label>
                    <input type="file" class="form-control" name="pic">
                    <br>
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
                <div class="tab-pane active" id="admins"><!--Slider Information-->
                    <div class="col-md-10 col-md-offset-1"><br>
                        <table class="table table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Picture</th>
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
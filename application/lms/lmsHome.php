<?php
include "lmsHeader.php";

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
                    <a class="navbar-brand" href="#">LMS</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
</div>
<div class="container">
    <div>
        <div class="col-lg-3 bg-success" style="min-height: 100px">
            <div><p>Menu</p></div>
        </div>
        <div class="col-lg-6 bg-info" style="min-height: 100px">
            <div><h4><i class="glyphicon glyphicon-book"></i>Course List</h4></div>
            <div>
                <ul>
                    <li>Course 1</li>
                    <li>Course 2</li>
                    <li>Course 3</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 bg-warning" style="min-height: 100px">
            <div><p>calender</p></div>
        </div>
    </div>

</div>

</body>
</html>
<html>
<head>

    <title>Home Page</title>
 <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">

 <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <style type="text/css">
        .navbar-custom{
            background-color: #4c1a1a;
            border: none;
          }
          body{
            background-color:#f9ecec;
        }

  </style>
</head>
<body>

<!--Navbar-->
<?php
include_once'includes/navbar.php';
?>

<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- slider -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="../../assets/images/Slider/1.jpg" width="1200" height="368">
            </div>

            <div class="item">
                <img src="../../assets/images/Slider/2.jpg" width="1200" height="368">
            </div>

            <div class="item">
                <img src="../../assets/images/Slider/3.jpg" width="1200" height="368">
            </div>

            <div class="item">
                <img src="../../assets/images/Slider/4.jpg" width="1200" height="368">
            </div>
            <div class="item">
                <img src="../../assets/images/Slider/5.jpg" width="1200" height="368">
            </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


  <br><br>
   
   <hr>
     <p class="h2 header section-title text-center">------------ Latest Updates ------------</p>
   <hr>
   <div class="container-fluid">
       <div class="row">
   <div class="col-md-4">
   <h4 align="center" class="text-warning">Global Graduate NSBM Open Day 2015</h4>
   <center><img src="../../assets/images/open_day.jpg" class="Thumbnail" width="100%" height="40%"></center>
   <p align="justify" font-family="Arial">?Global Graduate ? NSBM Open Day? the annual higher education exhibition organized by the National School of Business Management (NSBM) and its partner universities across the globe will be held on 18th......</p>
   <button type="button" class="btn btn-primary btn-block"style=" background-color: #4c1a1a; border:none;"><a href="open_day.php" style="text-decoration:none; color:white;">Read More>></a></button>
</div>
   <div class="col-md-4">
   <h4 align="center" class="text-warning">Inauguration Ceremony of Degree Programmes</h4> 
   <center><img src="../../assets/images/inaguration.jpg" class="Thumbnail" width="100%" height="40%"></center>
   <p align="justify" font-family="Arial">National School of Business Management (NSBM) held its inauguration of the Degree programmes for the September batch of students for the year 2015 at BMICH main hall on 13th October 2015......</p>
  <button type="button" class="btn btn-primary btn-block" style=" background-color: #4c1a1a; border:none;"><a href="degree.php" style="text-decoration:none; color:White;">Read More>></a></button>

</div>
   <div class="col-md-4">
   <h4 align="center" class="text-warning">Plymouth University - Graduation Ceremony 2015</h4>
   <center><img src="../../assets/images/graduation.jpg" class="Thumbnail" width="100%" height="40%"></center>
   <p align="justify" font-family="Arial">The inception Graduation Ceremony of the Plymouth University, United Kingdom for the degree programmes offered in collaboration with National School of Business Management (NSBM) was held on 27 November 2015......</p>
  <button type="button" class="btn btn-primary btn-block" style=" background-color: #4c1a1a; border:none;"><a href="graduation_ceremony.php" style="text-decoration:none; color:white;">Read More>></a></button>
</div>
</div>
</div>
<br>



<!--Footer-->
<?php
include_once'includes/footer.php';
?>

  <script src="../../assets/js/jquery-1.11.3.min.js"></script>
  <script src="../../assets/js/bootstrap.js"></script>

</body> 
</html>



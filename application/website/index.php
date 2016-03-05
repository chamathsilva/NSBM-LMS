<?php

//FUNCTION HADANNA DB EKEN MEWA GANNA PULUWAN VENNA

$item_per_page = 4; //need to put this configuration file
require_once('../class/class.db.php');
$database = new DB();

$get_total_rows = 0;

$lessons = $database->query("SELECT COUNT(*) FROM latest_update");

$get_total_rows = $lessons[0]["COUNT(*)"];
//break total records into pages
$total_pages = ceil($get_total_rows/$item_per_page);



?>
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



    <div class="container-fluid text-center">
        <div class="row row-centered">
            <div class="col-md-12 text2">
                <div id="results">
                    <img src="../../assets/images/ajax-loader.gif">  Loading...
                </div> <!--end of result div -->

                <div class="col-sm-12 text " id="loadmore" style="margin-bottom: 20px;color:#000000"></div>
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




<script type="text/javascript">
    $(document).ready(function() {

        var track_click = 0; //track user click on "load more" button, righ now it is 0 click

        var total_pages = <?php echo $total_pages; ?>;
        $('#results').load("latestUpdates.php", {'page':track_click}, function() {track_click++;}); //initial data to load

        //show load more button
        $("#loadmore").html('<div align="center"><button class="load_more" id="load_more_button">load More</button> <div class="animation_image" style="display:none;"><img src="../../assets/images/ajax-loader.gif"> Loading...</div> </div>');


        $(".load_more").click(function (e) { //user clicks on button

            $(this).hide(); //hide load more button on click
            $('.animation_image').show(); //show loading image

            if(track_click <= total_pages) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post('latestUpdates.php',{'page': track_click}, function(data) {

                    $(".load_more").show(); //bring back load more button

                    $("#results").append(data); //append data received from server

                    //scroll page to button element
                    $("html, body").animate({scrollTop: $("#load_more_button").offset().top},1000);

                    //hide loading image
                    $('.animation_image').hide(); //hide loading image once data is received

                    track_click++; //user click increment on load button

                }).fail(function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError); //alert any HTTP error
                    $(".load_more").show(); //bring back load more button
                    $('.animation_image').hide(); //hide loading image once data is received
                });


                if(track_click >= total_pages-1)
                {
                    //reached end of the page yet? disable load button
                    $(".load_more").attr("disabled", "disabled");
                    $(".load_more").html("<div class='all_loaded'>No More Content to Load</div>");

                }

            }

        });
    });
</script>
</html>



<?php
require_once('../class/class.db.php');
$database = new DB();
$updateId = $_GET['id'];
$result = $database->query('SELECT * FROM `latest_update` WHERE `updateID` = '."$updateId");
$result = $result[0];

$id                 = $result['updateID'];
$heading            = $result['heading'];
$long_description   = $result['long_description'];
$image_src          = $result['image_src'];
$src_path           = '../../data/updates/'.$image_src;

?>

<html>
<head>

    <title>Global Graduate NSBM Open Day 2015</title>
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

<div class="container-fluid">
    <ul class="breadcrumb" style="background-color: #f9ecec;">
        <li><span class="glypicon glypicon-home">Home</span></li>
        <li>Global Graduate NSBM Open Day 2015</li>
    </ul>
</div>

<center><img src="<?php echo $src_path; ?>" width="80%" height="80%"></center>

<div class="container-fluid">
    <h1 style="color:#80002a"><?php echo $heading;?></h1>
    <blockquote>
        <p align="justify"> <?php echo $long_description; ?> </blockquote>

</div>
<hr>

<!--Footer-->
<?php
include_once'includes/footer.php';
?>

<script src="../../assets/js/jquery-1.11.3.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>

</body>


</html>
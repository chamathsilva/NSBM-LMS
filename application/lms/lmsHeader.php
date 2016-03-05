<?php
?>
<html>
<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../assets/CSS/boostrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/CSS/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/CSS/lms.css">
    <link rel="stylesheet" href="../assets/dataTable/css/jquery.dataTables.css">

    <script src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/CSS/boostrap/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {

            var pageWrapper = $("#pageLoad");
            $("a.admin-pg").on("click", function(e) {
                e.preventDefault();
                pageWrapper.empty();
                pageWrapper.prepend('<img style="margin-left:50%;" src="../assets/images/ajax-loader.gif" /> Loading...</div>');
                pageWrapper.load(this.href);
            });
            window.onload = pageWrapper.load('stockBranchSheet.php');
        });
    </script>

    <script src="../assets/dataTable/js/jquery.dataTables.js"></script>




</head>


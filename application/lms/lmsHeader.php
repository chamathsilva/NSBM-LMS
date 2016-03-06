<?php
?>
<html>
<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/lms.css">
    <link rel="stylesheet" href="../../../assets/dataTable/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../../../assets/calander/styles/glDatePicker.default.css">

    <script src="../../../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {

            var pageWrapper = $("#pageLoad");
            $("a.admin-pg").on("click", function(e) {
                e.preventDefault();
                pageWrapper.empty();
                pageWrapper.prepend('<img style="margin-left:50%;" src="../../../assets/images/ajax-loader.gif" /> Loading...</div>');
                pageWrapper.load(this.href);
            });
            window.onload = pageWrapper.load('stockBranchSheet.php');
        });
    </script>

    <script src="../../../assets/dataTable/js/jquery.dataTables.js"></script>

    <script src="../../../assets/js/jquery.validate.min.js"></script>
    <script src="../../../assets/js/additional-methods.min.js"></script>
    <script src="../../../assets/js/jquery.form.min.js"></script>
    <script src="../../../assets/js/validation.js"></script>
    <script src="../../../assets/calander/glDatePicker.js"></script>
    <script src="../../../assets/js/highcharts.js"></script>
    <script src="../../../assets/js/highcharts-more.js"></script>



</head>


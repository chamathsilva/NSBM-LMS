<?php
include "../lmsHeader.php";

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
</div>
<div class="container">
    <div>
        <div class="col-lg-12 bg-info" style="height:100%; ">
            <div class="col-xs-6 col-xs-offset-3 text-center">
            <div><h4><i class="glyphicon glyphicon-book"></i>Sub-categories</h4></div>
                <div>
                    <ul>
                        <div class="list-group">
                            <a href="schoolOfComputingSub.php?year=Year1"  class="list-group-item" >Year 1</a>
                            <a href="schoolOfComputingSub.php?year=Year2" class="list-group-item">Year 2</a>
                            <a href="schoolOfComputingSub.php?year=Year3"class="list-group-item">Year 3</a>
                            <a href="schoolOfComputingSub.php?year=Year4" class="list-group-item">Year 4</a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include "../lmsFooter.php";

?>

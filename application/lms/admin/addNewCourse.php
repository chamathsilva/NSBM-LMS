<div class="admin-page-load">
    <div class="row">
        <h1 class="page-header" style="margin:5px 10px 20px">
            Add New Course
        </h1>


        <form class="form-horizontal" id="MyUploadForm" method = "POST" action="../addNewCourse.php" enctype="multipart/form-data">

            <div class="form-group" >
                <label class="control-label col-sm-2" for="lessonTitle">Course Name <span class="required"></span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Course Name">
                </div>
            </div>


            <div class="form-group" >
                <label class="control-label col-sm-2" for="year">Year </label>
                <div class="col-sm-9">
                    <select class="form-control"  id="year" name="year">
                        <option value="">Select Year</option>
                        <option value="Year1">Year 1</option>
                        <option value="Year2">Year 2</option>
                        <option value="Year3">Year 3</option>
                        <option value="Year4">Year 4</option>
                    </select>
                </div>
            </div>


            <div class="form-group" >
                <label class="control-label col-sm-2" for="cate">Course Categories</label>
                <div class="col-sm-9">
                    <select class="form-control"  id="cate" name="cate">
                        <option value="">Select Category</option>
                        <option value="SCHOOL OF COMPUTING">SCHOOL OF COMPUTING</option>
                        <option value="SCHOOL OF MANAGEMENT">SCHOOL OF MANAGEMENT</option>
                        <option value="SCHOOL OF ENGINEERING">SCHOOL OF ENGINEERING</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="button" onclick="upload_form()" id = "submit_btn" name="submit_btn" class="btn btn-info" value="Submit">Submit</button>
                </div>
            </div>


        </form>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div id="progressbox" ><div id="progressbar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%; max-height:15px; "><div id="statustxt">0%</div ></div></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div id="output"></div>
            </div>
        </div>



    </div>


</div>

<script type="text/javascript">
    //check which field is required and validate them

    $("#MyUploadForm").validate({
        rules: {
            name: {
                required: true

            },
            year: {
                required: true
            }

        }
    });

    var options = {
        target:   '#output',   // target element(s) to be updated with server response
        beforeSubmit:  beforeSubmit,  // pre-submit callback
        success:       afterSuccess,  // post-submit callback
        uploadProgress: OnProgress, //upload progress callback
        resetForm: true        // reset the form after successful submit


    };

    function upload_form(){
        $('#MyUploadForm').ajaxSubmit(options);
        // always return false to prevent standard browser submit and page navigation
        return false;
    }


    //function after succesful file upload (when server response)
    function afterSuccess()
    {
        $('#submit_btn').show(); //hide submit button
        $('#loading-img').hide(); //hide submit button
        $('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar

    }

    //function to check file size before uploading.


    function beforeSubmit(){
        //Check form is valid or not in the front end
        if (!$('#MyUploadForm').valid()) {
            alert("form is invalid");
            return false;
        }
        alert("form is valid");
    }


    //progress bar function
    function OnProgress(event, position, total, percentComplete)
    {
        //Progress bar
        $('#progressbox').show();
        $('#progressbar').width(percentComplete + '%'); //update progressbar percent complete
        $('#statustxt').html(percentComplete + '%'); //update status text
        if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
    }




</script>
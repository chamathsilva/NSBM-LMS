<div class="admin-page-load">
    <div class="row">
        <h1 class="page-header" style="margin:5px 10px 20px">
            Add News Update
        </h1>


        <form class="form-horizontal" id="MyUploadForm" method = "POST" action="../newsUploadFiles.php" enctype="multipart/form-data">

            <div class="form-group" >
                <label class="control-label col-sm-2" for="lessonTitle">Heading <span class="required"></span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter The Heading" required="true">
                </div>
            </div>

            <div class="form-group" >
                <label for="field5" class="control-label col-sm-2">Long Description <span class="required"></span></label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="4" name="longdescription" id="longdescription"  placeholder="Enter Long Description" required="true"></textarea>
                </div>
            </div>

            <div class="form-group" >
                <label class="control-label col-sm-2" for="Year">Short Description <span class="required"></span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="shortdescription" id="shortdescription" placeholder="Enter The Short Description" required="true">
                </div>
            </div>



            <div class="form-group">
                <label class="control-label col-sm-2" for="uploadfiles">upload images <span class="required"></span></label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="FileInput1" id="FileInput1" required="true">
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
            heading: {
                required: true

            },
            longdescription: {
                required: true
            },
            shortdescription: {
                required: true
            },
            FileInput1: {
                required: true
            }

        },
        //if there are errors show messages
        messages:{

            "FileInput1":{
                required: "Please select jpeg file",
                extension:"Invalis extension Please select jpeg file "
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

    //    //function to format bites bit.ly/19yoIPO
    //    function bytesToSize(bytes) {
    //        var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    //        if (bytes == 0) return '0 Bytes';
    //        var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    //        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    //    }
    //


</script>


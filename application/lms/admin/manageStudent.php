<div class="admin-page-load">
    <div class="row">
        <h1 class="page-header" style="margin:5px 10px 20px">
            Manage Student
        </h1>

        <div class="col-md-10 col-md-offset-1">
            <div id = "results"></div>
            </br>


            <div>

                <table id="courseTabel" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Faculty </th>
                        <th>Batch</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>

            </div>

        </div>

        <!--Update Mode -->
        <div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modeTitle">Update Course Details</h4>
                    </div>
                    <div class="modal-body">
                        <form id="updateForm">


                            <div class="form-group">
                                <label for="courseName" > Course Name </label>
                                <input type="text" class="form-control" id="courseName" name="courseName">
                            </div>

                            <div class="form-group">
                                <label for="academicYear">Academic Year</label>
                                <input type="text" class="form-control" id="academicYear" name="academicYear">
                            </div>

                            <!-- Send product id as hidden -->
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id">
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary ajaxSubmitModel">Update</button>
                    </div>

                </div>
            </div>
        </div>



    </div>





</div>




<script>



    $(document).ready(function() {

        var updateButton =  '<a class="btn btn-warning btn-xs ajaxUpdate"   style = "margin-right:10px;"> Update</a>';
        var removeButton =  '<a class="btn btn-danger btn-xs ajaxRemove" style = "margin-right:10px;"> Remove</a>';


        var updateModel = $('#updateModel');
        var updaeform = $('#updateForm');
        var submitModel = "ajaxSubmitModel";


        var ajaxRemoveButton = "ajaxRemove";

        var ajaxUpdateButton = "ajaxUpdate";

        var table1 = $('#courseTabel').DataTable({
            ajax: {
                url: '../../function/jsonAPI.php',
                dataSrc: '',
                "data"   : function( d ) {
                    d.functionName =  "getStudentList";
                }
            },

            "columns": [
                { "data": "F_Name" },
                { "data": "Faculty" },
                { "data": "Batch" },
                {   "data": null,
                    "defaultContent": removeButton
                }
            ]

        });


        //table remove button
        table1.on("click","." + ajaxRemoveButton,function(){
            var rowData = table1.row( $(this).parents('tr') ).data();
            if(confirm("Do you really want to remove This Student ?" + rowData["Email"])){
                var thisRow = $(this).parents('tr');
                ajaxSend("id="+ rowData["Email"],"deleteStudent",thisRow);
            }
        });



        //table update button
        table1.on("click","." + ajaxUpdateButton,function(){
            var rowData = table1.row( $(this).parents('tr') ).data();



            updateModel.on('show.bs.modal', function (event) {
                var modal = $(this);

                modal.find('#courseName').val(rowData["title"]);
                modal.find('#academicYear').val(rowData["year"]);
                modal.find('#id').val(rowData["courseID"]);
            });


            //rest the form when close the model
            updateModel.on('hidden.bs.modal', function (e) {
                document.getElementById("updateForm").reset();
            });

            updateModel.modal('toggle');

        });

        //model update button
        updateModel.on("click","." + submitModel,function(){

            var formData = updaeform.serialize();
            //alert(formData);
            ajaxSend(formData,"updateCourse");
//            var validationPass = updaeform.valid();
//            if (validationPass){
//                var formData = updaeform.serialize();
//                //alert(formData);
//                ajaxSend(formData,"update");
//            }

        });




        function ajaxSend(params,action,clickRow){
            $.ajax({
                type: "POST",
                url: "../../function/updateDelete.php",
                data : params+"&action="+action,
                dataType: "json",
                success: function(response){
                    switch (action){
                        case "deleteStudent":
                            if(response.success == 1){
                                table1.row(clickRow).remove().draw();
                            }else{
                                alert("Unexpected error #2, Please try again")
                            }
                            break;

                        case "updateCourse":
                            if(response.success == 1){
                                updateModel.modal('toggle');
                                table1.ajax.reload( null, false );
                            }else{
                                alert("Unexpected error #3, Please try again")
                            }
                            break;
                    }


                },
                error: function(xhr, status, error){
                    console.log(xhr);
                    alert("Unexpected error");
                    console.log(status,error);
                }
            });

        }



    } );






</script>






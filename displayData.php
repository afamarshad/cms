<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Display User Data</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

            <?php
            include("includes/headerlinks.php");
            ?>
 
      </head>  
      <body>  
        <?php
            include("includes/sidebar.php");
        ?>
           <div class="container col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2" style="background-color:#cdd0d7;">  
                <span><h3>User Data &nbsp;&nbsp; <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#insertData">Insert data</button></h3></span>
                <br />  
                <div class="table-responsive">  
                     <table id="user_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>id</td>
                                    <td>username</td>  
                                    <td>password</td>  
                                    <td>fname</td>  
                                    <td>lname</td>  
                                    <td>dtcreated</td>  
                                    <td>dtupdated</td>  
                                    <td>dtdeleted</td> 
                                    <td>status</td>
                                    <td></td>
                                    <td></td>
    
                               </tr>  
                          </thead>  
                          
                         
                     </table>  
                </div>  
           </div> 

           <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="insertData" role="dialog">
                    <div class="modal-dialog">
                    
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Insert Data</h4>
                            <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                            </div>
                            <div class="modal-body">
                            <form method="POST" id="form1" action="insert.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class='form-control' type="text" placeholder='User Name' name='uname' id='uname' required="true">
                                    </div>
                                    <div class="form-group">
                                    <span>
                                        <input type="password" class="form-control"  placeholder="Password" name="password" type="password" id="password">
                                        &nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="Checkbox">
                                        <label class="custom-control-label" for="Checkbox">Show Password</label>
                                    </span>
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' type="text" placeholder='First Name' name='fname' id='fname' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' type="text" placeholder='Last Name' name='lname' id='lname' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' placeholder='Date created(yyyy-mm-dd)' name='datecreated' id='datecreated' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' placeholder='Date updated(yyyy-mm-dd)' name='dateupdated' id='dateupdated' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' placeholder='Date Deleted(yyyy-mm-dd)' name='datedeleted' id='datedeleted' required="true">
                                    </div>
                                    <div class="form-group">
                                    <select name="status" id="status" required="true">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                                        <!-- <input class='form-control' placeholder='Status' name='status' id='status'> -->
                                    </div>
                                    
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit" name="Submit" id="Submit">Insert</button></fieldset>
                                    </div>
                            </form>
                            <!-- </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="updateData" role="dialog">
                    <div class="modal-dialog">
                    
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Data</h4>
                            <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                            </div>
                            <div class="modal-body">
                            <form method="POST" id="form2" action="Update.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class='form-control' type="text" placeholder='User Name' name='uname' id='Uname' required="true">
                                    </div>
                                    
                                    <div class="form-group">
                                    <span>
                                        <input type="password" class="form-control"  placeholder="Password" name="password" type="password" id="Password">
                                        &nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="checkbox">
                                        <label class="custom-control-label" for="checkbox">Show Password</label>
                                    </span>
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' type="text" placeholder='First Name' name='fname' id='Fname' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' type="text" placeholder='Last Name' name='lname' id='Lname' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' placeholder='Date created(yyyy-mm-dd)' name='datecreated' id='Datecreated' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' placeholder='Date updated(yyyy-mm-dd)' name='dateupdated' id='Dateupdated' required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class='form-control' placeholder='Date Deleted(yyyy-mm-dd)' name='datedeleted' id='Datedeleted' required="true">
                                    </div>
                                    <div class="form-group">
                                    <select name="status" id="Status" required="true">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                                        <!-- <input class='form-control' placeholder='Status' name='status' id='status'> -->
                                    </div>
                                    
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit" name="submit" id="submit">Update</button></fieldset>
                                    </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        

      </body>
     
 </html>  
 <script type="text/javascript">  
    
     $(document).ready(function () {
        $("#checkbox").on('click',function() {
            var $pwd = $("#Password");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });

        $("#Checkbox").on('click',function() {
            var $pwd = $("#password");
            if (($pwd.attr('type') === 'password')) {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });

        // $.support.cors = true;
        $.ajax({
            url: 'viewData.php',
            type: 'POST',
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (data) {
              var table = $('#user_data').dataTable({
                    data: data,
                    columns: [
                        {"data":"id"},
                        {"data":"username"},
                        {"data":"password"},
                        {"data":"fname"},
                        {"data":"lname"},
                        {"data":"dtcreated"},
                        {"data":"dtupdated"},
                        {"data":"dtdeleted"},
                        {"data":"status"},
                        {
                            'data': null,
                            'render': function (data, type, row) {
                                return '<button class="btn btn-sm btn-primary editButton" data-id="' + row.id + '" id="' + row.id +'">Edit</button>'
                            }
                        },
                        {
                            'data': null,
                            'render': function (data, type, row) {
                                return '<button class="btn btn-sm btn-danger deleteButton" data-id="' + row.id + '" id="' + row.id + '">Delete</button>'
                            }
                        }
                    ]
                });
                
            }
        });

        $('#user_data').on('click', 'button.editButton', function () {
            var id = $(this).parent().siblings(":first").text();
            var data_row = $('#user_data').DataTable().row($(this).closest('tr')).data();
            // alert(data_row['username']);
            
            $.ajax({
                url: "Update.php", 
                type: 'POST',
                data: { id:id },
                success : function(data){
                    $('#updateData').modal("show");
                    $('#updateData').on('shown.bs.modal', function() {
                        $('#Uname').val(data_row['username']);
                        $('#Password').val(data_row['password']);
                        $('#Fname').val(data_row['fname']);
                        $('#Lname').val(data_row['lname']);
                        $('#Datecreated').val(data_row['dtcreated']);
                        $('#Dateupdated').val(data_row['dtupdated']);
                        $('#Datedeleted').val(data_row['dtdeleted']);
                        $('#Status').val(data_row['status']);
                        

                    });
                    console.log(data);
                    // alert("Record Updated Successfully!");
                }
            } );
        });

        $('#user_data').on('click', 'button.deleteButton', function () {
            
            // $(this).parent().parent().remove();
            var id = $(this).parent().siblings(":first").text();
            // alert(id);
            var con=confirm("Are you sure you want to delete id: "+ id+"?")

            if(con){
                $(this).parents("tr").css('background', 'tomato').animate({ opacity: "hide" }, "slow");
                $.ajax({
                url: "delete.php", 
                type: 'POST',
                data: { id:id },
                success : function(data){
                    alert("Record Deleted Successfully!");
                    // console.log(data);
                }
                } );
            }
            else
            {
                alert("Error deleting record!");
            }
            
        });

        
        
    });


</script>   
 
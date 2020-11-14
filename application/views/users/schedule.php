
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#dataTables-schedule tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>

<body>
   

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><center>Schedule Management</center></h3>
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-lg-12">
            <div class="col-lg-0">
            </div>
            <div class="col-lg-12">

            <p>Type something in the input field to search the table for first names, last names or emails:</p>  
            <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
            <input id="myInput" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                aria-label="Search">
            </form>
            </div>
                        <div class="row">
                <div class="col-lg-12">  
                <div class="col-lg-0">      
                </div>
                <div class="col-lg-10">      

                    <table class="table table-striped table-bordered table-hover" id="dataTables-schedule">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Succeed/Count_email</th>
                                <th>Failures</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr>
                            <tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr> <tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr> <tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr>
                            <tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr><tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr><tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr><tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr><tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr><tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr><tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr><tr>
                                <td>Admin</td> 
                                <td><span style="color:blue">22/100</span></td> 
                                <td><span style="color:red">1</span></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('admin@admin.com','1','Admin','admin');" data-toggle="modal" data-target="#editUser">VIEW</a>
                                    <a class="btn btn-warning" id="user-riset" onclick="reset_confirmation('admin@admin.com','1')" data-toggle="modal" data-target="#resetConfirm"> RESET </a>
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('admin@admin.com','1');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr>                       
                        </tbody>
                    </table>

                    <div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;">
                        <img class="add_user" src="http://localhost/assets/images/add.png" data-toggle="modal" data-target="#addUser" />
                    </div>

                </div>
                <div class="col-lg-2">      
                </div>

                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>



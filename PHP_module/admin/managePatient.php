<?php
session_start();
if ($_SESSION['username'] != "admin") {
        echo "<script>alert('Login to continue');</script>";
        header("Location:../index.php");
}
?>

<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../healthcare_red.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Smart_Care </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME ADMIN </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action" id="list-dash-list" data-toggle="list" href="adminpanel.php" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="manageDoctor.php" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">Manage Doctors</a>
      <a class="list-group-item list-group-item-action active" href="managePatient.php" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Manage Patient</a>
      <a class="list-group-item list-group-item-action" href="appointments.php" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="queries.php" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">Queries</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
	      <div class="col-md-8">
		<table class="table table-hover">
                <thead>
                  <tr>
		    <th scope="col">View</th>
		    <th scope="col">Edit</th>
                    <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">BG</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Birthday</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
		    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;
                    $query = "select patientID,	FN, MN, LN, age, gender, bloodgroup, email, phone, dob from patient";
                    $result = mysqli_query($con,$query);
		    while ($row = mysqli_fetch_array($result)){?>
			<tr>
			<td><input type="button" name="view" value="view" id="<?php echo $row["patientID"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                        <td><input type="button" name="edit" value="Edit" id="<?php echo $row["patientID"]; ?>" class="btn btn-warning btn-xs edit_data" /></td>
			<td><?php echo ($row['patientID']); ?></td>
                	<td><?php echo ($row['FN']); ?></td>
			<td><?php echo ($row['MN']); ?></td>
			<td><?php echo ($row['LN']); ?></td>
			<td><?php echo ($row['age']); ?></td>
                	<td><?php echo ($row['gender']); ?></td>
			<td><?php echo ($row['bloodgroup']); ?></td>
			<td><?php echo ($row['email']); ?></td>
                	<td><?php echo ($row['phone']); ?></td>
                	<td><?php echo ($row['dob']); ?></td>
			</tr>

            <?php } ?>
        </tbody>
    </table>
    <!-- //Table -->
                      
        <br>
      </div>
</body>
</html>

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">patient details</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter First Name</label>  
                          <input type="text" name="FN" id="FN" class="form-control" />  
                          <br />  
                          <label>Enter Middle Name</label>  
                          <input type="text" name="MN" id="MN" class="form-control" />  
                          <br />  
                          <label>Enter Last Name</label>  
                          <input type="text" name="LN" id="LN" class="form-control" />  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="M">Male</option>  
                               <option value="F">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Email</label>  
                          <input type="text" name="email" id="email" class="form-control" />  
                          <br />  
                          <label>Enter Phone</label>  
                          <input type="text" name="phone" id="phone" class="form-control" />  
                          <br />  
                          <input type="hidden" name="patientID" id="patientID" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetchPatient.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#patientID').val(data.patientID);  
                     $('#FN').val(data.FN);  
                     $('#MN').val(data.MN);  
                     $('#LN').val(data.LN);  
                     $('#age').val(data.age);  
                     $('#gender').val(data.gender);  
                     $('#email').val(data.email);  
                     $('#phone').val(data.phone);  
                     $('#patientID').val(data.patientID);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#FN').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else if($('#gender').val() == '')  
           {  
                alert("Gender is required");  
           }  
           else if($('#email').val() == '')  
           {  
                alert("Email is required");  
           }  
           else if($('#phone').val() == '')  
           {  
                alert("phone is required");  
	   }else  
           {  
                $.ajax({  
                     url:"insertPatient.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
		     	  alert('Record Update');
		     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"selectPatient.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>

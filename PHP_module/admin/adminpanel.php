<?php
session_start();
if($_SESSION['username'] != "admin") {
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
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="adminpanel.php" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="manageDoctor.php" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">Manage Doctors</a>
      <a class="list-group-item list-group-item-action" href="managePatient.php" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Manage Patient</a>
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
<div class="text-center">
                 <?php
                    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;

                    $query = "select patientID from patient;";
                    $result = mysqli_query($con,$query);
	            $totalPatient = mysqli_num_rows($result);
                  ?>
		<button type="button" class="btn btn-primary">
		Total Patient Registered <span class="badge badge-light"><?php echo $totalPatient;?></span>
		</button>
</div>
</br>
<div class="text-center">
                 <?php
                    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;

                    $query = "select usernameP from patient inner join Smart_Care_loginTB on patient.usernameP = Smart_Care_loginTB.loginID where Smart_Care_loginTB.accountSTATUS=1;";
                    $result = mysqli_query($con,$query);
	            $totalAPatient = mysqli_num_rows($result);
                  ?>
		<button type="button" class="btn btn-primary">
		Total Active Patient <span class="badge badge-light"><?php echo $totalAPatient;?></span>
		</button>


                 <?php
                    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;

                    $query = "select usernameP from patient inner join Smart_Care_loginTB on patient.usernameP = Smart_Care_loginTB.loginID where Smart_Care_loginTB.accountSTATUS=0;";
                    $result = mysqli_query($con,$query);
	            $totalInPatient = mysqli_num_rows($result);
                  ?>
		<button type="button" class="btn btn-primary">
		Total Inactive Patient <span class="badge badge-light"><?php echo $totalInPatient;?></span>
		</button>
</div>
</br>


<div class="text-center">
                 <?php
                    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;

                    $query = "select doctorID from doctor;";
                    $result = mysqli_query($con,$query);
	            $totalDoctor = mysqli_num_rows($result);
                  ?>
		<button type="button" class="btn btn-primary">
		Total Doctor Registered <span class="badge badge-light"><?php echo $totalDoctor;?></span>
		</button>
</div>
</br>

<div class="text-center">

                 <?php
                    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;

                    $query = "select id from query;";
                    $result = mysqli_query($con,$query);
	            $totalQueries = mysqli_num_rows($result);
                  ?>
		<button type="button" class="btn btn-primary">
		Total Queries <span class="badge badge-light"><?php echo $totalQueries;?></span>
		</button>
</div>
</br>

<div class="text-center">

                 <?php
                    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;

                    $query = "select id from query where querySTATUS=0;";
                    $result = mysqli_query($con,$query);
	            $totalAQueries = mysqli_num_rows($result);
                  ?>
		<button type="button" class="btn btn-primary">
		Active Queries <span class="badge badge-light"><?php echo $totalAQueries;?></span>
		</button>



                 <?php
                    $con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");
                    global $con;

                    $query = "select id from query where querySTATUS=1;";
                    $result = mysqli_query($con,$query);
	            $totalRQueries = mysqli_num_rows($result);
                  ?>
		<button type="button" class="btn btn-primary">
		Resolved Queries <span class="badge badge-light"><?php echo $totalRQueries;?></span>
		</button>

</div>


</body>
</html>

<script>  
 $(document).ready(function(){  
 
//for deleting
        $(document).on('click','.markas_done',function(){
     var employee_id = $(this).attr("id");

     var deleteConfirm = confirm("Are you sure?");
     if (deleteConfirm == true) {
        // AJAX request
        $.ajax({
          url: 'completeQuery.php',
          type: "POST",
          data:{employee_id:employee_id},
          success: function(response){
             if(response == 1){
                alert("Query Resolution Complete!");
             }else{
                alert("Something Went Wrong!");
             }
          }
        });
     }
        });
 
 
 });  
 </script>

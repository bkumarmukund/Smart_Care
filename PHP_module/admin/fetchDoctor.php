 <?php  
 //fetch.php  
 $connect = mysqli_connect("13.234.59.129", "balmukund", "passbird", "smart_care");  
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT doctorID,departmentNAME as department,FN,MN,LN,age,gender,bloodgroup,email,phone,dob,room FROM doctor inner join department on doctor.depID = department.departmentID WHERE doctor.doctorID = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>

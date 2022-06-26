 <?php  
 //fetch.php  
 $connect = mysqli_connect("13.234.59.129", "balmukund", "passbird", "smart_care");  
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT patientID,FN,MN,LN,age,gender,email,phone,dob FROM patient WHERE patientID = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>

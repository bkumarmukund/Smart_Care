<?php  
 $connect = mysqli_connect("13.234.59.129", "balmukund", "passbird", "smart_care");  
	var_dump($_POST);
if(!empty($_POST))  
 { 
      $output = '';  
      $message = '';  
      $FN = mysqli_real_escape_string($connect, $_POST["FN"]);  
      $MN = mysqli_real_escape_string($connect, $_POST["MN"]);  
      $LN = mysqli_real_escape_string($connect, $_POST["LN"]);  
      $gender = mysqli_real_escape_string($connect, $_POST["gender"]);  
      $email = mysqli_real_escape_string($connect, $_POST["email"]);
      $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
      
      if($_POST["patientID"] != '')  
      {  
	   $query = 
	   "UPDATE patient   
           SET FN='$FN',
	   MN='$MN',
	   LN='$LN', 
           gender='$gender',   
           email = '$email',   
           phone = '$phone'   
           WHERE patientID='".$_POST["patientID"]."'";  
           $message = 'Data Updated';  
      }  

      else  
      {  
           $query = "  
           INSERT INTO tbl_employee(name, address, gender, designation, age)  
           VALUES('$name', '$address', '$gender', '$designation', '$age');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $message = 'Data Updated';  
	   exit();
      }  
        
      echo $output;  
} 
 ?>

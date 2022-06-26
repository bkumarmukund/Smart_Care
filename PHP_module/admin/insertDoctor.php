<?php  
 $connect = mysqli_connect("13.234.59.129", "balmukund", "passbird", "smart_care");  
if(!empty($_POST))  
 { 
      $output = '';  
      $message = '';  
      $FN = mysqli_real_escape_string($connect, $_POST["FN"]);  
      $MN = mysqli_real_escape_string($connect, $_POST["MN"]);  
      $LN = mysqli_real_escape_string($connect, $_POST["LN"]);  
      $age = mysqli_real_escape_string($connect, $_POST["age"]);  
      $gender = mysqli_real_escape_string($connect, $_POST["gender"]);  
      $bloodgroup = mysqli_real_escape_string($connect, $_POST["bloodgroup"]);  
      $email = mysqli_real_escape_string($connect, $_POST["email"]);
      $department = mysqli_real_escape_string($connect, $_POST["department"]);
      $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
      $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
      $room = mysqli_real_escape_string($connect, $_POST["room"]);
      
      if($_POST["doctorID"] != '')  
      {  
	   $query = 
	   "UPDATE doctor   
           SET FN='$FN',
	   MN='$MN',
	   LN='$LN', 
           gender='$gender',   
           email = '$email',   
           phone = '$phone'   
           WHERE doctorID='".$_POST["doctorID"]."'";  
           $message = 'Data Updated';  
      }  

      else  
      { 
 	   $con=mysqli_connect("13.234.59.129", "balmukund", "passbird", "smart_care");  
           $query = "SELECT MAX(CAST(SUBSTRING(doctorID, 8, length(doctorID)-7)+1 AS UNSIGNED)) AS doctorID FROM doctor;";
           $result = mysqli_query($con,$query);
	   $row = $result->fetch_assoc();
           $newdocIdnumber = $row['doctorID'];
	   $newdocIDraw="smartCD";
	   $newdocID=$newdocIDraw.$newdocIdnumber;
	   $usrraw = "usr";
	   $pwdraw = "pwd";
	   $usernameD = $newdocID.$usrraw;
	   $passwordraw =$newdocID.$pwdraw;
	   $passwordD = md5($passwordraw); 
           $query = "  
           INSERT INTO doctor(doctorID,depID,FN,MN,LN,age,gender,bloodgroup,email,phone,dob,room,usernameD,passwordD)  
           VALUES('$newdocID','$department','$FN','$MN','$LN', '$age', '$gender','$bloodgroup', '$email','$phone','$dob', '$room','$usernameD','$passwordD');  
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

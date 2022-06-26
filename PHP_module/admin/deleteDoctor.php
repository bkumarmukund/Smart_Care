 <?php  
 $connect = mysqli_connect("13.234.59.129", "balmukund", "passbird", "smart_care");  
 if(isset($_POST["employee_id"]))  
 { 
	 $id = mysqli_escape_string($connect,$_POST['employee_id']);      
	$record = mysqli_query($connect,"SELECT COUNT(doctorID)as id FROM doctor WHERE doctorID= '".$id."'");
        if(mysqli_num_rows($record) > 0){
      		mysqli_query($connect,"DELETE FROM doctor WHERE doctorID= '".$id."'");
      		echo 1;
      		exit;
   	}else{
      		echo 0;
      		exit;
   	}
 }  
 ?>

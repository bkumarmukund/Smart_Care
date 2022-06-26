<?php

if(isset($_POST['adminlogin']) || isset($_POST['userlogin'])){

	//recaptcha
	$recaptcha = $_POST['g-recaptcha-response'];
	$secret_key = '6LfDA9ofAAAAAO6FL2xMVHHbWVo70GsvZ1k-Iw0o';	
$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$recaptcha;
	$response = file_get_contents($url);
	$response = json_decode($response);
	if ($response->success == false) {

		session_start();
		$error = "reCAPTCHA failed!";
		$_SESSION["error"] = $error;
		header("Location:index.php");
		exit;
	}
	
	$username=$_POST['username'];
	$passwordraw=$_POST['password'];
	$password = md5($passwordraw);
	$con=mysqli_connect("13.234.59.129","balmukund","passbird","smart_care");

	if($username == "admin"){
		$query="select usernameA,passwordA from admin where usernameA='$username' and passwordA='$password';";	
		$result=mysqli_query($con,$query);
	
		if(mysqli_num_rows($result)==1)
		{
			session_start();	
			$_SESSION['username']=$username;
			header("Location:admin/adminpanel.php");
			exit;
		}
		else{
		session_start();	
		$error = "username/password incorrect";
		$_SESSION["error"] = $error;
		header("Location:index.php");
		exit;
		}
	}
	else{
		$query="select loginID,loginPWD from Smart_Care_loginTB where loginID='$username' and loginPWD='$password' AND accountSTATUS=1;";
        	$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)==1)
		{	session_start();
			$_SESSION['username']=$username;
			$_SESSION['userID'] = substr($username, 0, strlen($username)-3);
			header("Location:patient/patientpanel.php");
			exit;
	
		}else{
		session_start();
                $error = "username/password incorrect";
                $_SESSION["error"] = $error;
                header("Location:index.php");
                exit;
                }

	}
}
?>

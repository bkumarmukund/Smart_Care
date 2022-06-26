<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);


//getting data from notifier table
$connect = mysqli_connect("localhost", "balmukund", "passbird", "Smart_Care");
$query = "SELECT email,concat(FN,' ',LN,' ') as name, duedate,date(notifier.date) as lastvisited FROM notifier INNER JOIN patient on notifier.patNID = patient.patientID WHERE duedate = 1 OR duedate = 5";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
	//$email = $row["email"];
	$email = "kumarankitsharma00@gmail.com";
	$nameofPatient = $row["name"];
	$duedate = $row["duedate"];
	$lastvisited = $row["lastvisited"];
	//$msg = "Dear {$nameofPatient} as per date:{$lastvisited}  your appointment is due in {$duedate} days";
	$msg1 = "Dear ";
	$msg2 =$nameofPatient;	
	$msg3 =" as per date:"; 	
	$msg4 =$lastvisited; 	
	$msg5 =" your appointment is due in"; 	
	$msg6 =$duedate; 	
	$msg7 =" days"; 
	$msg = $msg1.$msg2.$msg3.$msg4.$msg5.$msg6.$msg7;
try {
    // Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 25;

    $mail->Username = 'thismailgoestobalmukund@gmail.com'; // YOUR gmail email
    $mail->Password = 'oycopwgckffhrrxs'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('thismailgoestobalmukund@gmail.com', 'Smart_Care');
    $mail->addAddress($email, $name);
    $mail->addReplyTo('thismailgoestobalmukund@gmail.com', 'admin@smart.care'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Appointment notifier by Smart_Care";
    $mail->Body = $msg;
    //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    exit();
    //echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
?>

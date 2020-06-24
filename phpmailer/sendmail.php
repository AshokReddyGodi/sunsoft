<?php
include "PHPMailerAutoload.php"; // info@sunsoftronicsystems.com include the class name

$name=$_REQUEST["name"];
$to=$_REQUEST["email"];
$admincopy="info@sunsoftronicsystems.com";
$phoneno=$_REQUEST["phoneno"];
$subject="Feedback Form";
$query=$_REQUEST["message"];
$message='<table style="width:100%;border:5px solid brown;padding:10px;">
    <tr>
        <td align="center"><img src="http://sunsoftronicsystems.com/images/logo.png"  alt="Sun Softronic Systems"/><br>
        <i>Sun Softronic Systems</i>
        </td>
    </tr>
    <tr>
        <td>
            
            
            <p>
            <table>
            <tr><td>Name</td><td>:</td><td>'.$name.'</td></tr>
            <tr><td>Phone No</td><td>:</td><td>'.$phoneno.'</td></tr>
            <tr><td>Email</td><td>:</td><td>'.$to.'</td></tr>
            <tr><td>Query</td><td>:</td><td>'.$query.'</td></tr>
           </table>
           </p>
        </td>
    </tr>
   </table>';
   
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "webfeed@sunsoftronicsystems.com";
$mail->Password = "websitesUn";
$mail->SetFrom("webfeed@sunsoftronicsystems.com");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AddAddress($admincopy);
 if($mail->Send()){
    echo "true";
}
else{
    echo "false";
}
?>
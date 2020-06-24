<?php
$to = "prashantbyali@gmail.com";
$subject = "Feedback Form";
$name = $_POST['name'];
$contactno = $_POST['phoneno'];
$emailid = $_POST['email'];
$message = $_POST['message'];

$mess = "<table>\r\n";
$mess .= "<tr><td> Name: </td><td> $name</td></tr>\r\n";
$mess .= "<tr><td> Contact No: </td><td> $contactno</td></tr>\r\n";
$mess .= "<tr><td> Email No: </td><td> $emailid</td></tr>\r\n";
$mess .= "<tr><td> Message: </td><td> $message</td></tr></table>\r\n";
	

$head = "From: admin@sunsoftronicsystems.com \r\n" .
$head = "MIME-Version: 1.0\r\n";
$head .= "Content-Type: text/html; \r\n\r\n";

$m=mail($to, $subject, $mess, $head );


/*$name=$_REQUEST["name"];
$to=$_REQUEST["email"];
$admincopy="info@sunsoftronicsystems.com";
$phoneno=$_REQUEST["phoneno"];
$subject="Query";

$message='<table style="width:100%;border:5px solid brown;padding:10px;">
    <tr>
        <td align="center"><img src="http://sunsoftronicsystems.com/images/logo.png"  alt="Sun Softronic Systems"/><br>
        <i>Ranbhoomi 2015</i>
        </td>
    </tr>
    <tr>
        <td>
            
            
            <p>
            <table>
            <tr><td>Name</td><td>:</td><td>'.$name.'</td></tr>
            
            <tr><td>Email</td><td>:</td><td>'.$_REQUEST["email"].'</td></tr>
            <tr><td>Query</td><td>:</td><td>'.$_REQUEST["message"].'</td></tr>
           </table>
           </p>
        </td>
    </tr>
   </table>';	
    $header = "info@sunsoftronicsystems.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($admincopy,$subject,$message,$header);
   if( $retval == false )
   {
	   echo "hi...";
    $msg= "false";
	}
	else{
		echo "hi121...";
            $message='<table style="width:100%;border:5px solid brown;padding:10px;">
    <tr>
        <td align="center"><img src="http://sunsoftronicsystems.com/images/logo.png" alt="Sun Softronic Systems"/><br>
        <i>Sun Softronic Systems</i>
        </td>
    </tr>
    <tr>
        <td>
            <p>Greeting s,</p>
            <p>'.$name.'</p>
            <p></p>
            <p>Thank you. We have received your message and will contact you back shortly.</p>
            <p></p><p></p><p></p>
            <p align="right"><i>S3 Team</i></p>
        </td>
    </tr>
   </table>';
     $retval = mail ($to,$subject,$message,$header);
   if( $retval == false )
   {
    $msg= "false";
	echo "hi fal...";
	}
	else{
     $msg="true";
  		}
  		}*/
echo "true";
?>
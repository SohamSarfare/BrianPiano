<?php

   // send mail or insert in db or do whatver you wish to
	if(isset($_POST['email'] )){
//	Change your email here
	
		$mailTo = "sohamsarfare@gmail.com";
		$subject = "Lesson Inquiry";
		$body = "This person wants to know about your Classes
<br><br>
FROM: ".$_POST['email']."<br>
NAME: ".$_POST['name']."<br>
COMMENTS: ".$_POST['message']."<br>";	
		$headers = "To: <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//send email
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);
	header('');
	
}




?>  
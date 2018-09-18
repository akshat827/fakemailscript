<?php
session_start();
if ($_POST['Submit'] == 'Send')
{
	{
  } 
$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = '<html><body>';
$message .= $_POST['textarea'];
$message .= "</body></html>";
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
$headers .= "MIME-Version: $fromname\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);
header("Location: admin.php?msg= Great !Your EMail Sent -Click Back Button To Resend Mail Or Write New Mail");
exit();
}
?>
<html>
<div class="container">
<head>

<style type="text/css">
html,body {
  /* Extra Styles */
  background: #fff;
  color: #425363;
  font-family: avenir, 'segoe ui', sans-serif;
}
@keyframes move {
	0% { 
		background-position: 0 60%, 0 50%;
	}
	100% { 
	  background-position: 0 60%, 100% 50%;
	}
}
.container {
  background-color: #263645;
	background-image: url('http://timteeling.com/dev/img/network.svg'), radial-gradient(200px 500px at center, #ff8300 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0));
	background-size: 125%, 50% 100%;
  background-position: 0 60%, 0 100%;
  animation: move 5s linear infinite;
  
  /* Extra Styles */
  height: 100px;
  /*box-shadow: inset 0 0 25px rgba(0,0,0,.5);*/
  border: 2px solid #263645;
  border-right: 0;
  border-left: 0;
}

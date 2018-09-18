<?php
$to_email=$_REQUEST['email'];
$name=$_REQUEST['name'];
$sender_email=$_REQUEST['sender'];
$content=$_REQUEST['content'];
$subject=$_REQUEST['subject'];
$header="From : $name"."<$sender_email> \r\n";
mail($to_email,$subject,$content,$header);
echo "sent sucessfully";


?>
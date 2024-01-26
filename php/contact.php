<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
$messege=$_POST['messege'];
if(!empty($name) && !empty($email) && !empty($subject) && !empty($phone) && !empty($messege))
{
	$to = "yourMail";
	$txt = $messege;
	$headers = "From: ".$email;
	mail($to,$subject,$txt,$headers);
    echo "<script>
	alert('Your message send, We will replay soon!');
	window.location.href='../contact.php';
	</script>";
}else{
	echo "Fields are empty !";
}
?>
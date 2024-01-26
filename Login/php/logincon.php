<?php
session_start();
$email=$_POST['useremail'];
$pass=$_POST['password'];
if(!empty($email) && !empty($pass))
{
	$conn = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT id, Name, Email, Type FROM User WHERE Email = '$email' and Password = '$pass'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			$_SESSION['uid']=$row['id'];
			$_SESSION['uname']=$row['Name'];
			$_SESSION['uemail']=$row['Email'];
			$_SESSION['utype']=$row['Type'];
			header('location:../../index.php');
	    }
	} else {
	    echo "<script>
		alert('Email or Password may wrong please check it!');
		window.location.href='../index.php';
		</script>";
	}
}else{
	echo "Fields are empty !";
}?>
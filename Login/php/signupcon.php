<?php
session_start();
$name=$_POST['username'];
$email=$_POST['useremail'];
$pass=$_POST['pass'];
$cpass=$_POST['confirmpass'];
$type=$_POST['type'];
if(!empty($name) && !empty($email) && !empty($pass) && !empty($cpass) && !empty($type) && $pass == $cpass)
{
	$conn = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO User (Name, Email, Password, Type) VALUES ('$name', '$email', '$pass', '$type')";
	if ($conn->query($sql) === TRUE) {
		$conn2 = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
		$sql2 = "SELECT Name, Email, Type FROM User WHERE Email = '$email'";
		$result2 = $conn2->query($sql2);
		if ($result2->num_rows > 0) {
		    // output data of each row
		    while($row = $result2->fetch_assoc()) {
				$_SESSION['uid']=$row['id'];
				$_SESSION['uname']=$row['Name'];
				$_SESSION['uemail']=$row['Email'];
				$_SESSION['utype']=$row['Type'];
				header('location:../../index.php');
		    }
		}
	} else {
	    echo "<script>
		alert('You email is already taken!');
		window.location.href='../index-02.php';
		</script>";	
	}
}else{
	echo "Fields are empty !";
}?>
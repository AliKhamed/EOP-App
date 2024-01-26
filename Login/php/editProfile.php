<?php
session_start();
$name=$_POST['username'];
$email=$_POST['useremail'];
$pass=$_POST['pass'];
$cpass=$_POST['confirmpass'];
$emailFromSission=$_SESSION['uemail'];
if(!empty($name) && !empty($email) && !empty($pass) && !empty($cpass) && $pass == $cpass)
{

// Create connection
	$conn = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "UPDATE User SET Name='$name', Email='$email', Password='$pass' WHERE Email='$emailFromSission'";

	if ($conn->query($sql) === TRUE) {
			$_SESSION['uname']=$name;
			$_SESSION['uemail']=$email;
			echo "<script>
			alert('Editing done successfully');
			window.location.href='../../profile.php;
			</script>";
		} else {
		    echo "<script>
			alert('You email is already taken!');
			window.location.href='../editProfile.php';
			</script>";
		}
}else{
	echo "Fields are empty !";
}

?>
<?php
session_start();
$name=$_POST['name'];
// connect to the database
$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);

// Delete record
if (isset($_POST['delete'])) { // if save button on the form is clicked
     // move the uploaded (temporary) file to the specified destination
    $sql = "DELETE FROM Teachers WHERE Name = '$name'";
    if (mysqli_query($conn, $sql)) {
    	echo "<script>
			alert('Deleting done successfuly ');
			window.location.href='../deletecontent.php';
			</script>";
    }
}
?>
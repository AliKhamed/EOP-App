<?php
session_start();
$name=$_GET['itemName'];
$type=$_GET['itemType'];
$writer=$_GET['itemWriter'];
$page=$_GET['page'];
$user=$_SESSION['uemail'];
// connect to the database
$connIFFavorite = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
if ($connIFFavorite->connect_error) {
    die("Connection failed: " . $connIFFavorite->connect_error);
}
$sqlIFFavorite = "SELECT ItemName FROM Favorite WHERE Type='$type' AND ItemName='$name' AND User='$user'";
$resIFFavorite = $connIFFavorite->query($sqlIFFavorite);
if ($resIFFavorite->num_rows > 0) {
    // output data of each row
    while($row = $resIFFavorite->fetch_assoc()) {
    		echo "<script>
            alert('Already favorited ');
            window.location.href='../".$page."?scholarshipsityName=".$name."';
            </script>";
    	}
    }else{
    	$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
		$sql = "INSERT INTO Favorite (ItemName, ItemWriter, Type, User) VALUES ('$name', '$writer', '$type', '$user')";
		if (mysqli_query($conn, $sql)) {
		        echo "<script>
		            alert('Adding favorite done successfuly ');
		            window.location.href='../".$page."?scholarshipsityName=".$name."';
		            </script>";
    	}
    }
?>
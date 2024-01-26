<?php
session_start();
$name = $_GET["name"];
$writer = $_GET["writer"];
$connBook = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
if ($connBook->connect_error) {
    die("Connection failed: " . $connBook->connect_error);
}
$sqlBook = "SELECT PDF FROM Books WHERE Name = '$name' AND Writer = '$writer'";
$resultBook = $connBook->query($sqlBook);
if ($resultBook->num_rows > 0) {
    // output data of each row
    while($row = $resultBook->fetch_assoc()) {
    		header('Content-type: application/pdf');
    		echo readfile($row['Data']);
			//header('Content-Disposition: inline; filename="' . basename($row['PDF']) . '"');
			// header('Content-Transfer-Encoding: binary');
			// header('Content-Length: ' . filesize($row['PDF']));
			// header('Accept-Ranges: bytes');

			//@readfile($row['$PDF']);
			//exit();


	 	}
    }
?>
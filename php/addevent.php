<?php
session_start();
$name=$_POST['name'];
$edate=$_POST['edate'];
$description=$_POST['description'];
$address=$_POST['address'];
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

// connect to the database
$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);

// Uploads files
if (isset($_POST['add'])) { // if save button on the form is clicked
     // move the uploaded (temporary) file to the specified destination
    $sql = "INSERT INTO Event (Name, EDate, Description, Address , startTime, EndTime, Image) VALUES ('$name', '$edate', '$description', '$address', '$startTime', '$endTime', '$image')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Adding done successfuly ');
            window.location.href='../addcontent.php';
            </script>";
    }
}
?>
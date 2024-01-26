<?php
session_start();
$name=$_POST['name'];
$link=$_POST['link'];
$description=$_POST['description'];
$requirement=$_POST['requirement'];
$duration=$_POST['duration'];
$StudentNum=$_POST['StudentNum'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

// connect to the database
$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);

// Uploads files
if (isset($_POST['add'])) { // if save button on the form is clicked
     // move the uploaded (temporary) file to the specified destination
    $sql = "INSERT INTO Scholarships (Name, Link, Description, Requirment, Duration, Students, Image) VALUES ('$name', '$link', '$description', '$requirement', '$duration', '$StudentNum', '$image')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Adding done successfuly ');
            window.location.href='../addcontent.php';
            </script>";
    }
}
?>
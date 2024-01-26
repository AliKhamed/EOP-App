<?php
session_start();
$name=$_POST['name'];
$depart=$_POST['depart'];
$about=$_POST['about'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

// connect to the database
$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);

// Uploads files
if (isset($_POST['add'])) { // if save button on the form is clicked
     // move the uploaded (temporary) file to the specified destination
    $sql = "INSERT INTO Teachers (Name, Department, About, Mobile, Email, Image) VALUES ('$name', '$depart', '$about', '$email', '$mobile', '$image')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Adding done successfuly ');
            window.location.href='../addcontent.php';
            </script>";
    }
}
?>
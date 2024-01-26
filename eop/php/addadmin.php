<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

// connect to the database
$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);

// Uploads files
if (isset($_POST['add'])) { // if save button on the form is clicked
     // move the uploaded (temporary) file to the specified destination
    $sql = "INSERT INTO User (Name, Email, Password, Type) VALUES ('$name', '$email', '$password', 'admin')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Adding done successfuly ');
            window.location.href='../administration.php';
            </script>";
    }
}
?>
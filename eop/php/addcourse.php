<?php
session_start();
$name=$_POST['name'];
$category=$_POST['category'];
$teacher=$_POST['teacher'];
$teacherabout=$_POST['teacherabout'];
$summery=$_POST['summery'];
$requirement=$_POST['requirement'];
$duration=$_POST['duration'];
$quizzes=$_POST['quizzes'];
$lectures=$_POST['lectures'];
$students=$_POST['students'];
$link=$_POST['link'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

// connect to the database
$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);

// Uploads files
if (isset($_POST['add'])) { // if save button on the form is clicked
     // move the uploaded (temporary) file to the specified destination
    $sql = "INSERT INTO Courses (Name, Teacher, AboutTeacher, Category, Image, Summery, Requirements, Duration, Quizzes, Lectures, Students, Link) VALUES ('$name', '$teacher', '$teacherabout', '$category', '$image', '$summery', '$requirement', '$duration', '$quizzes', '$lectures', '$students', '$link')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Adding done successfuly ');
            window.location.href='../addcontent.php';
            </script>";
    }
}
?>
<?php
session_start();
$title=$_POST['title'];
$writer=$_POST['writer'];
$description=$_POST['description'];

// connect to the database
$conn = mysqli_connect($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);

// Uploads files
if (isset($_POST['add'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['file']['name'];

    // destination of the file on the server
    $destination = '../uploads/' . $writer . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['file']['tmp_name'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['file']['size'] > 250000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO Books (Title, Writer, Image, Name, Description) VALUES ('$title', '$writer', '$image', '$filename', '$description')";
            if (mysqli_query($conn, $sql)) {
            	echo "<script>
					alert('Adding done successfuly ');
					window.location.href='../addbook.php';
					</script>";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>
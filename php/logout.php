<?php
session_start();
unset($_SESSION['uname']);
unset($_SESSION['uid']) ;
unset($_SESSION['uemail']) ;
unset($_SESSION['utype']) ;
echo "<script>
		alert('LOGOUT DONE');
		window.location.href='../index.php';
		</script>";
?>
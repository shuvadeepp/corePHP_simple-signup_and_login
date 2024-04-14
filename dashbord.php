<?php
session_start();

echo "welcome to dashboard "; 


if (!isset($_SESSION['sess_user'])) {
    header("location:login.php");
}
echo $_SESSION['sess_user']."<br>";
?>
<a href="logout.php"><button>LOGOUT</button></a>
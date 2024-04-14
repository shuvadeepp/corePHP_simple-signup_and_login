<?php

include "conn.php";

if(isset($_POST["user_submit"])) 
{
    $vremail = $_POST["user_email"];
    $vrpassword = $_POST["user_password"];

    $query = "SELECT * FROM t_userlogin WHERE dbemail='$vremail' AND dbpassword='$vrpassword'";
    $query_1 = mysqli_query($conn,$query);
    $no_of_data = mysqli_num_rows($query_1);
    $userData = mysqli_fetch_assoc($query_1); 
    if ($no_of_data > 0){ 
        session_start();
        $_SESSION['sess_user'] = $userData['dbusername'];
        header("location: dashbord.php");
        echo "login sucessfull";
    } else { 
        echo "wrong credential";
    }
}
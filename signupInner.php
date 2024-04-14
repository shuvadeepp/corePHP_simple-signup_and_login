<?php

include "conn.php";
// echo'<pre>';print_r($_POST);exit();
if (isset($_POST["client_submit"])) 
{
    $vrusername = $_POST["client_username"];
    $vremail = $_POST["client_email"];
    $vrpassword = $_POST["client_password"];
    $vrrole = $_POST["client_role"];
    $vrmobile = $_POST["client_mobile"];
    $vrgender = $_POST["client_gender"];
 
    
    
    $inserting = "INSERT INTO t_userlogin (dbusername, dbemail, dbpassword, dbrole, dbmobile, dbgender) 
    VALUES('$vrusername', '$vremail', '$vrpassword', '$vrrole', '$vrmobile', '$vrgender')";
    $result = mysqli_query($conn,$inserting);
   
}
<?php
session_start();
include "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $type=$_POST['type'];
    $avail=$_POST['avail'];
    // $dob=$_POST['dob'];
    // $address=$_POST['address'];
    // $pwd=$_POST['pwd'];
    // $phone=$_POST['phone'];
    // $check_email_query="SELECT EMAIL FROM traveller WHERE email ='$email' LIMIT 1";
    // $check_email_query_run=mysqli_query($conn,$check_email_query);
    // if(mysqli_num_rows($check_email_query_run)){
    //     $_SESSION['status']="Email Id Already Exists!";
    //     header("Location:register.php");
    // }else{
        $query="INSERT INTO availableCabs( NAME,VEHICAL_TYPE,AVAILABILITY)VALUES('$name','$type','$avail')";
        $query_run=mysqli_query($conn,$query);
        if($query_run){
            // sendemail_verify("$email","$name","$verify_token");
            $_SESSION['status']= "UPDATED SUCCESSFUL!";
            header("Location:manageCabs.php");
            

        }else{
            $_SESSION['status']="UPDATION FAILED";
            header("Location:manageCabs.php");
        }
    }


?>
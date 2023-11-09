
<?php
include "conn.php";
session_start();
 $email=$_POST['email'];
 $pwd=$_POST['password'];
 $sql="SELECT * FROM traveller WHERE email='".$email."' and password='".$pwd."' ";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);
 if($row==null){
    // echo"Invalid ";
   
        $_SESSION['status2']="Invalid Email And Password!<br>Please try again";
        header("Location:login_admin.php");

        // header("Location:register.php");
    

 }else{
    // session_start();
    $_SESSION['email']=$row['EMAIL'];
    // header('LOcation:dashboard.php');
    // $_SESSION['status2']= "YOU ARE LOGGED IN!";
    // header("Location:login.php");

    header('Location:admindashboardview.php');
 }
 ?>

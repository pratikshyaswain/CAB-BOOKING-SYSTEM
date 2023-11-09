<?php
session_start();

$conn=mysqli_connect("localhost","root","","booking");
// if($conn){
//     echo "successfull";
// }
if(isset($_POST['submit'])){
    $dest=$_POST['dest'];
    $email=$_POST['email'];
    $source=$_POST['source'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $no=$_POST['no'];
    $style=$_POST['style'];
    // $verify_token=md5(rand());
    // sendemail_verify("$email","$name","$verify_token");
    // echo" sent";

    //email exixts or not

    // $check_email_query="SELECT EMAIL FROM bookdetails WHERE email ='$email' LIMIT 1";
    // $check_email_query_run=mysqli_query($conn,$check_email_query);
    // if(mysqli_num_rows($check_email_query_run)){
    //     $_SESSION['status3']="Booking Already Done!";
    //     header("Location:traveller_form.php");
    // }else{
        $query="INSERT INTO bookdetails( DESTINATION,EMAIL,SOURCE,DATE,START_TIME,NUMBER_OF_TRAVELLER,CAB_STYLE)VALUES('$dest','$email','$source','$date','$time','$no','$style')";
        $query_run=mysqli_query($conn,$query);
        // if($query_run){
            // sendemail_verify("$email","$name","$verify_token");
            $_SESSION['status3']= " Booking Successfull!!";
            header("Location:traveller_form.php");
            

//         }else{
//             $_SESSION['status']="REGISTRATION FAILED";
//             header("Location:register.php");
//         }
   }
//  }

?>
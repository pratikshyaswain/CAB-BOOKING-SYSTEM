<?php

session_start();

$total = $_POST['total'];
$card = $_POST['cardno'];

$con = mysqli_connect("localhost", "root", "", "cab booking website");
$sql = "select Balance from `payment` where CardNumber= '" . $_POST['cardno'] . "' and CVV ='" . $_POST['cvv'] . "' and ExpiryYear='" . $_POST['expyear'] . "' and ExpiryMonth ='" . $_POST['expmonth'] . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if ($row == null) {
   echo "Invalid card details";
} else {
   $cy = date("Y");
   $cm = date("m");

   if ($cy > $_POST['expyear'])
      die("Card is Expired");
   if ($cy == $_POST['expyear'] && $cm > $_POST['expmonth'])
      die("Card is Expired");

   $balance = $row['Balance'];

   if ($balance >= $total) {

      $query = "UPDATE  payment set Balance = Balance - " . $total  . " where CardNumber ='" . $_POST['cardno'] . "'";
      if (mysqli_query($con, $query)) {
         $sql = "UPDATE `booking table` SET `PaymentStatus` = 'Paid' WHERE `TravelCost` = '" . $total . "'";
         $result = mysqli_query($con, $sql);

         echo "<h2><center> Payment Successful! </center></h2>";
         header("refresh:3;url=user_cab_status.php");
      }
   } else {
      echo "<h2><center>Insufficient balance</center></h2>";
   }
}

<?php
include "admindashboard.php";
?>

<html>

<body>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "cab booking website");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to mySQL:" . mysqli_connect_error();
    }
    // $BookedDate = $_GET['bookedDate'];
    // $BookedTime = $_GET['bookTime'];
    $BookingID = $_GET['bookingID'];
    $email = $_GET['Email'];
    $cost = $_GET['cost'];

    $query = "UPDATE `booking table` SET `DriverStatus` = 'Assigned', `AssignedDriver` = '" . $email . "', `TravelCost` = '" . $cost . "' WHERE `BookingID` = '" . $BookingID . "'";
    if (mysqli_query($conn, $query)) {
        // $_SESSION['status2']="Driver and cost assigned successfully!<br>Please try again";
        // echo "successfull!";
        echo "<script>alert('Driver and cost assigned successfully!');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/cab/folder/cab_request_list.php" />
       
  <?php      
    } else {
        echo "ERROR!!" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>

</html>
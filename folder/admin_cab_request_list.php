<?php
$conn = mysqli_connect("localhost", "root", "", "cab booking website");
if (mysqli_connect_errno()) {
    echo "Failed to connect to mySQL:" . mysqli_connect_error();
}
$query = "SELECT * FROM `booking table`";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

</head>

<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> Booking ID </td>
                                <td> Pick Up Location </td>
                                <td> Destination </td>
                                <td> Travel Date </td>
                                <td> Travel Time </td>
                                <td> Status </td>
                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <td><?php echo $row['bookingID']; ?></td>
                                    <td><?php echo $row['PickUpLocation']; ?></td>
                                    <td><?php echo $row['Destination']; ?></td>
                                    <td><?php echo $row['TravelDate']; ?></td>
                                    <td><?php echo $row['TravelTime']; ?></td>
                                    <td>
                                        <?php
                                        if ($row['DriverStatus'] == NULL) {
                                            echo "<a href='available_driver_list.php?bookingID=" . $row['bookingID'] . "&tdate=" . $row['TravelDate'] . "'>Assign Driver</a>";
                                        } else {
                                            echo "Assgined";
                                        }
                                        ?>
                                    </td>
                            </tr>
                        <?php 
                        }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
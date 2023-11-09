<html>
    <head>
        <style>
            td{
                padding:20px;
                font-weight:bold;
            }
            th{
                padding:20px;
            }

            .submit{
                padding:10px;
                background-color:black;
                color:white;
                font-weight:bold;
            }
            table{
                border:2px solid black;
                box-shadow: 0 4px 12px black;
            }
            input{
                border: 1px solid black;
                padding:10px;
            }
            select{
                border: 1px solid black;
                padding:10px;
            }
            </style>

<?php
include "admindashboard.php";
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "cab booking website");
if (mysqli_connect_errno()) {
    echo "Failed to connect to mySQL:" . mysqli_connect_error();
}
$query = "SELECT Email FROM driver WHERE Email not in (SELECT Email from `booking table` WHERE BookedDate = '" . $_GET['tdate'] . "')";
$result = mysqli_query($conn, $query);
echo "<center>";
echo "<form action = 'assign_driver.php' >";
echo "<input type='hidden' value='".$_GET['bookingID']."' name='bookingID'>";
// echo "<input type='hidden' value='".$_GET['BookedDate']."' name='bookDate'>";
// echo "<input type='hidden' value='".$_GET['BookedTime']."' name='bookTime'>";
echo "<br><br><br>";
echo "<table border='1' align ='center' cellpadding='60'>";
echo "<tr>";
echo "<td>Available Drivers</td>";
echo "<td>";
echo "<select name='Email'>";
while ($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['Email']."'>".$row['Email']."</option>";
}
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Cost</th>";
echo "<th><input type='number' name='cost' /required></th>";
echo "</tr>";

echo "<tr>";
echo "<th colspan='2'><input class='submit' type='submit' value ='Assign Driver'></th>";
echo "</tr>";
// if(isset($_SESSION['status2'])){
//     echo "<h4>".$_SESSION['status2']."<h4>";
//     unset($_SESSION['status2']);
//   }

echo "</table>";
echo "</form>";

echo "</center>";

mysqli_close($conn);
?>

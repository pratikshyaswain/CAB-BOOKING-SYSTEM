<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
  
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-weight:bold;
        }

        input[type="submit"]:hover {
            background-color:orangered;

        }

        .container {
            background-color: white;
            padding: 5px 20px 15px 20px;
            border: 2px solid lightblue;
            border-radius: 5px;
            box-shadow: 0 4px 12px black;

        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="passowrd"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php

    $con = mysqli_connect("localhost", "root", "", "cab booking website");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // $result = mysqli_query($con,"SELECT Cost FROM booking  where tr_id ='" . $_GET['tr_id'] . "'" );

    echo "<form action='bank.php' method='post'>";
    //echo "<input type='hidden' value='" . $_GET['TravelDate'] . "' name='tr_id'>";
    echo "<p><h1><center><u>Enter your banking details</u></center></h1></p>";
    echo "<table border='1' align='center' align='center' cellpadding='20' class='container'>";
    echo "<tr>";
    echo "<td>Card Number:</td>";
    echo "<th><input type='number' name='cardno'></th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th><input type='text' name='tname'></th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>CVV</th>";
    echo "<th><input type='number' name='cvv' placeholder='CVV'></th>";
    echo "</tr>";
    echo "<th>PIN</th>";
    echo "<th><input type='password' name='pin' placeholder='****'></th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th  colspan='2'>";
    echo  " <span></span>";
    echo   'Expiration:<select name="expmonth" >
                    <option value="yonth" selected disabled>Month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>

                <span></span>
                <select name="expyear">
                    <option value="Year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
</th>
</tr>';
    echo "<tr>";
    echo "<th>Cost</th>";
    echo "<td><input type='number' name='total' value='" . $_GET['Cost'] . "' readonly></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th colspan='3'><input type='submit' value='Procced'></th>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";
    echo "</div>";

    mysqli_close($con);
    ?>


</body>

</html>
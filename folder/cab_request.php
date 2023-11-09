<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Driver Registration</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
    url(cab2.jpeg);
  background-position: center;
  background-size: cover;

      /* background-color: #f0f7f7; */
      /* Soft blue-green background color */
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px black;
      
    }

    h1 {
      color: black;
      /* Dark blue color */
    }

    label {
      display: block;
      margin-top: 10px;
      color:black;

    }

    input[type="text"],
    input[type="text"],
    input[type="date"],
    input[type="time"],
    input[type="email"]
    
     {
      width: 96%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid black;
      border-radius: 5px;
      font-size: 16px;
    }

    button[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: black;
      /* Dark blue color */
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: black;
      /* Slightly darker blue color */
    }
    h4{
        color:green;
    }
    a{
        font-weight:bold;
    }
  </style>
</head>

<body>
  <div class="container">
  <?php
  session_start();
    if(isset($_SESSION['status'])){
      echo "<h4>".$_SESSION['status']."<h4>";
      unset($_SESSION['status']);
    }
    ?>
    <h1>Book Your Cab</h1>
    <form action="#" method="POST">
    <label for="email">Email:</label>
      <input type="email" name="email" required>

      <label for="pickuplocation">Pick Up Location:</label>
      <input type="text" name="pickuplocation" required>

      <label for="destination">Destination:</label>
      <input type="text" name="destination" required>

      <label for="traveldate">Travel Date:</label>
      <input type="date" name="traveldate" required>

      <label for="traveltime">Travel Time:</label>
      <input type="time" name="traveltime" required>

      <button type="submit" name = "submit">Go</button><br>
      <a href ="userdashboardview.php" >DASHBOARD</a><br><br>
      <a href ="index.php" >HOME</a>
    </form>
  </div>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "cab booking website");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to mySQL:" . mysqli_connect_error();
  }
  if(isset($_POST['submit'])){
  $email = $_POST["email"];
  $pickuplocation = $_POST["pickuplocation"];
  $destination = $_POST["destination"];
  $traveldate = $_POST["traveldate"];
  $traveltime = $_POST["traveltime"];

  $res = "INSERT INTO `booking table`( EMAIL,PickUpLocation,Destination,TravelDate,TravelTime) VALUES ( '$email','$pickuplocation','$destination','$traveldate','$traveltime')";
  if (mysqli_query($conn, $res)) {
    $_SESSION['status']= "Cab order was placed successfully!";
            header("Location:cab_request.php");
    // echo "Cab order was placed successfully!";
  } else {
    echo "ERROR!!" . mysqli_error($conn);
  }
}

  ?>
</body>

</html>
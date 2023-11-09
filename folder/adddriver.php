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
      color: #555;
    }

    input[type="text"],
    input[type="text"],
    input[type="date"],
    input[type="time"] {
      width: 100%;
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
    <h1>Add Driver</h1>
    <form action="#" method="POST">
      <label>FullName:</label>
      <input type="text" name="fullname" required>

      <label>PhoneNo:</label>
      <input type="text" name="phone" required>

      <label>Email:</label>
      <input type="text" name="email" required>

      <!-- <label for="traveltime">Travel Time:</label>
       <input type="time" name="traveltime" required> -->

      <button type="submit" name = "submit">Go</button><br>
      <a href ="admindashboardview.php" >DASHBOARD</a><br><br>
      <a href ="index.php" >HOME</a> 
    </form>
  </div>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "cab booking website");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to mySQL:" . mysqli_connect_error();
  }
  if(isset($_POST['submit'])){
  $fullname = $_POST["fullname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
//   $traveltime = $_POST["traveltime"];

  $res = "INSERT INTO `driver`( FullName,PhoneNo,Email) VALUES ( '$fullname','$phone','$email')";
  if (mysqli_query($conn, $res)) {
    $_SESSION['status']= "Driver has added successfully!";
            header("Location:adddriver.php");
    // echo "Cab order was placed successfully!";
  } else {
    echo "ERROR!!" . mysqli_error($conn);
  }
}

  ?>
</body>

</html>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trip Up Registration</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
    url(cab2.jpeg);
  background-position: center;
  background-size: cover;
  }
  .container {
    max-width: 500px;
    margin: 30px auto;
    padding: 30px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px black;
    
    
   
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }
  label {
    font-weight: bold;
    margin-bottom: 8px;
    display: block;
    color: black; /* Black label color */
  }
  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 95%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid black;
    border-radius: 5px;
  }
  
  button {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: black; /* Pastel sky blue button color */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight:40px;
  }
  button:hover {
    background-color: #f44336; /* Pastel hover color */
   }  
   a{
    font-size:19px;
    font-weight:bold;
  }
  p{
  color:black;
  font-weight:bold;
 }
 h4{
  color:green;
  text-align:center;
  font-weight:bold;
 }
 
</style>
</head>
<body>
<div class="container">
  <div class="alert">
    <?php
    if(isset($_SESSION['status'])){
      echo "<h4>".$_SESSION['status']."<h4>";
      unset($_SESSION['status']);
    }
    ?>
  </div>
  <h2>Register for Trip UP</h2>
  <form id="registrationForm" action="code.php" method="POST">
    <label for="fullname">Full Name</label>
    <input type="text" id="name" name="name" required>
    <label for="fullname">Email</label>
    <input type="text" id="email" name="email" required>

    <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" required>

    

    <!-- <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" required> -->

    <label for="address">Address</label>
    <input type="text" id="address" name="address" required>


    <label for="password">Password</label>
    <input type="password" id="password" name="pwd" required>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" required>

    <button type="submit" name="register">Register</button>
    <p> Already Have An Account ? Please 
    <a href="login.php" >LogIn</a></p>
    <p> Go Back <a href="index.php">Home</a></p>
  </form>
</div>
</body>
</html>
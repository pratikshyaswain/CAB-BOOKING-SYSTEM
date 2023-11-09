
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
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
    max-width: 600px;
    margin: 80px auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px black;
  }
  h2 {
    text-align: center;
    margin-top: 10px;
    color: black /* Pastel sky blue heading color */
  }
  label {
    font-weight: bold;
    margin-bottom: 12px;
    display: block;
    color: black; /* Pastel sky blue label color */
  }
  input[type="text"],
  input[type="password"] {
    width: 95%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid black;
    border-radius: 5px;

  }
 p{
  color:black;
  font-weight:bold;
 }
  button {
    display: block;
    width: 100%;
    padding: 14px;
    background-color: black; /* Pastel peach button color */
    color: #fff;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 18px;
  }
  button:hover {
    background-color: #FF6347; /* Coral hover color */
  }
  .welcome {
    text-align: center;
    font-size: 28px;
    font-weight:bold;
    color:black;
    margin-top:20px;
  }
  h4{
    color:green;
    text-align:center;
  }
  a{
    font-size:19px;
    font-weight:bold;
  }
</style>
</head>
<body>
<div class="container">
<?php
    if(isset($_SESSION['status2'])){
      echo "<h4>".$_SESSION['status2']."<h4>";
      unset($_SESSION['status2']);
    }
    ?>
    <p class="welcome">Welcome to trip up!</p>
  <h2> Traveller's Login</h2>
  
  <form id="loginForm" action="login_code.php" method="POST">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name="submit">Login</button>
    <p> Don't Have An Account ? Please 
    <a href="register.php" >Sign Up</a></p>
    <p> Go Back <a href="index.php">Home</a></p>
  </form>
</div>
</body>
</html>
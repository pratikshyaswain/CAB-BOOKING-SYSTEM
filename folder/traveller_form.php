
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>book cab</title>
<style>
  /* *{
    background: url('taxi.jpeg') no-repeat center center fixed; 
     background-size: cover; 
  } */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    /* background: url('') no-repeat center center fixed; */
    /* background-size: cover; */

  }
  .container {
    max-width: 500px;
    margin: 30px auto;
    padding: 30px;
    /* background-color: #F0EAD6; Pastel yellow background color */
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
    if(isset($_SESSION['status3'])){
      echo "<h4>".$_SESSION['status3']."<h4>";
      unset($_SESSION['status3']);
    }
    ?>
  </div>
  <h2>Book Cab</h2>
  <form id="book cab" action="traveller's_request.php" method="POST">
    <label for="dest">Destination</label>
    <input type="text" id="dest" name="dest" required>
    <label for="Email">Email</label>
    <input type="text" id="email" name="email" required>

    <label for="source">Source</label>
    <input type="text" id="source" name="source" required>

    

    <label for="date">Date</label>
    <input type="text" id="date" name="date" required>

    <label for="time">Start Time</label>
    <input type="text" id="time" name="time" required>


    <label for="number">Number Of Traveller</label>
    <input type="text" id="no" name="no" required>

    <label for="cab">Cab Style</label>
    <input type="text" id="style" name="style" required>

    <button type="submit" name="submit">Confirm</button>
    <!-- <p> Already Have An Account ? Please 
    <a href="login.php" >LogIn</a></p> -->
    <p> Go Back <a href="availableindex.php">Home</a></p>
  </form>
</div>
</body>
</html>
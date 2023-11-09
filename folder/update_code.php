<?php include "conn.php";
// include "display.php"
$email= $_GET['EMAIL'];
$query="SELECT * FROM traveller WHERE EMAIL = '$email' ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
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
  </div>
  <h2>Update Your Profile</h2>
  <form  class="contact-form" action="" method="POST">
    <label for="fullname">Full Name</label>
    <input type="text" id="name" name="name" value="<?php echo $result['NAME'];?>" required>
    <label for="fullname">Email</label>
    <input type="text" id="email" name="email"   value="<?php echo $result['EMAIL'];?>"  required>

    <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" value="<?php echo $result['GENDER'];?>" required>

    

    <!-- <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob"  value="<?php echo $result['DOB'];?>"required> -->

    <label for="address">Address</label>
    <input type="text" id="address" name="address"  value="<?php echo $result['ADDRESS'];?>" required>


    <label for="password">Password</label>
    <input type="password" id="password" name="pwd"  value="<?php echo $result['PASSWORD'];?>" required>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone"  value="<?php echo $result['PHONE'];?>" required>

    <button type="update" name="update">UPDATE</button>
    <!-- <p> Already Have An Account ? Please 
    <a href="login.php" >LogIn</a></p>
    <p> Go Back <a href="index.php">Home</a></p> -->
  </form>
</div>
</body>
</html>
<?php
if(isset ($_POST['submit'])){
  $first_name=$_POST['name'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $pwd=$_POST['pwd'];
  $phone=$_POST['phone'];
  if($first_name !="" && $email !="" && $gender !=""  && $address !=""  && $pwd !=""  && $phone !="" ){
    
  
  
  // $query="INSERT INTO details (NAME,EMAIL,GENDER,PASSWORD)VALUES('$first_name','$email','$gender','$pwd')";
  // $data=mysqli_query($conn,$query);
  $query="UPDATE traveller SET NAME='$first_name', EMAIL='$email',GENDER='$gender',ADDRESS='$address',PASSWORD='$pwd',PHONE='$phone' WHERE EMAIL='$email' ";
  $data=mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('Record updated');</script>";
?>

<meta http-equiv = "refresh" content = "0; url = http://localhost/cab/folder/update_profile.php" />

<?php
}
  else{
    echo"Failed";
  }

  }
}
?>

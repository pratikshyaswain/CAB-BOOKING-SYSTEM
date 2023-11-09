<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
.navbar {
  display: flex;
  align-items: center;
  padding: 20px;
}
nav {
  flex: 1;
  text-align: right;
}
nav ul {
  display: inline-block;
  list-style-type: none;
}
nav ul li {
  display: inline-block;
  margin-right: 20px;
  font-weight: bold;
}
nav ul li::after {
  content: "";
  width: 0%;
  height: 3px;
  background: #f44336;
  display: block;
  margin: auto;
  transition: 0.5s;
}
nav ul li:hover::after {
  width: 100%;
}

.dwn {
  background-color: transparent;
  color: white;
  margin-top: 1px;
  margin-left: 0;
  /* padding: 16px; */
  font-size: 16px;
  border: none;
  font-weight: bold;
  border-radius: 20px;
  /* height: 45px; */
  min-width: 125px;
}
.drp {
  position: relative;
  display: inline-block;
  text-align: left;
}
.dropdwn {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 130px;
  /* color: black; */
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  margin-top: 1px;
  border-radius: 20px;
  /* height: 100px; */
}
.dropdwn a {
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
  font-weight: bold;
}
.dropdwn a:hover {
  background-color: orangered;
  border-radius: 20px;
}
.drp:hover .dropdwn {
  display: block;
}
/* .drp:hover .dwn {
    background-color: orangered;
  } */
.col-1 a,
h1 {
  /* background-color: rgb(220, 220, 206); */
  color: rgb(234, 234, 220);
  font-weight: bold;
  /* border: 1px solid black; */
}
.col-1 .btn {
  background-color: white;
  color: black;
}
.logo h1 {
  font-family: Georgia, "Times New Roman", Times, serif;
}

.logo img {
  border-radius: 50%;
  width: 100px;
  height: 100px;
}
a {
  text-decoration: none;
  color: rgb(230, 212, 212);
}
p {
  color: #dfd7d7;
}
.container {
  max-width: 1300px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
  height: 80px;
}
.row {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
}
/* .col-2 {
    flex-basis: 50%;
    min-width: 300px;
    /* margin-left: 10px; */
/* }  */
/* .col-2 img {
    max-width: 100%;
    padding: 50px 0;
  } */
/* .col-2 h1 {
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
  } */
.btn {
  display: inline-block;
  /* background: #ff523b; */
  color: white;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  /* transform: background 0.5s; */
}
.btn:hover {
  background: orangered;
}
.header {
  background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
    url(taxi.jpeg);
  background-position: center;
  background-size: cover;
  /* position: relative; */

  /* background: radial-gradient(#fff, #e3e30f); */
  /* background: radial-gradient(#fff, white); */
  /* background: radial-gradient(#f6f2f2, #0a0a01); */
}
.header .row {
  margin-top: 100px;
}

    </style>
<body>
<div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <!-- <img src="trip1.jpg"  /> -->
            <h1> Trip Up</h1>
          </div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
               <!-- <div class="drp">
            <button class="dwn">My Profile</button>
            <div class="dropdwn">
              <a href="login_admin.php">View </a>
              <a href="login.php">Update </a>
              <a href="login.php">Delete </a>
            </div>
          </div> -->
              <!-- <li><a href="login.php">Avaliable cabs</a></li> -->
              <!-- <li><a href="">Product</a></li> -->
              <li><a href="about.php">About Us</a></li>
              <!-- <li><a href="">Contacts</a></li> -->
              <li><a href="register.php">Registration</a></li>
              <!-- <li><a href="index.php">Log Out</a></li> -->
            </ul>
          </nav>
          <div class="drp">
            <button class="dwn">Login Panel</button>
            <div class="dropdwn">
              <a href="login_admin.php">Admin's login </a>
              <a href="login.php">User's login </a>
            </div>
          </div>
          <!-- <img src="cart.png" width="30px" /> -->
        </div>
        <!-- <div class="row"> -->
          <!-- <div class="col-1">
            <h1>
              Reliable And Secure Way To Reach Any <br />Point of the City!
            </h1>
            <p>
              We provide affordable and fast way to find a cab<br />
              when you need it.
            </p>
            <a href="register.php" class="btn">Book Now! </a>
          </div> -->
          <!-- <div class="col-2"> -->
            <!-- <img src="car.png" /> -->
          <!-- </div> -->
        <!-- </div> -->
      </div>
    
    </div>
    
</body>
</html>
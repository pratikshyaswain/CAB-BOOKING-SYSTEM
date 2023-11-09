<?php
 include "admindashboard.php";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link
       rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     />
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
 h1{
   color:white;
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
   /* width:20px; */
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
 /* .header .row {
   margin-top: 100px;
 } */
 .categories {
   margin: 80px 0;
 }
 .col-3 {
   flex-basis: 30%;
   min-width: 500px;
 }
 .col-3 img {
   width: 100%;
 }
 .small-container {
   max-width: 1080px;
   margin: auto;
   /* padding-left: 25px; */
   /* padding-left: 25px; */
 }
 .p {
   color: black;
 }
 .col-4 {
   flex-basis: 25%;
   padding: 10px;
   min-width: 500px;
   margin-bottom: 50px;
   transition: transform 0.5s;
 }
 .col-4 img {
   width: 100%;
 }
 .title {
   text-align: center;
   margin: 0 auto 20px;
   position: relative;
   line-height: 60px;
   color: #555;
 }
 .title::after {
   content: "";
   background: #ff523b;
   width: 80px;
   height: 4px;
   border-radius: 5px;
   position: absolute;
   bottom: 0;
   left: 50%;
   transform: translateX(-50%);
 }
 /* h4 {
   color: #555;
   font-weight: normal;
 } */
 /* .col-4 p {
   font-size: 14px;
 } */
 .row{
   box-shadow: 0 4px 12px black;
   /* margin-left:0px; */
 }
 .rating i,h2{
   color:black;
   font-size:30px;
 }
 
 .col-4:hover {
   transform: translate(-5px);
 }
 .offer {
   background: radial-gradient(#fff, #ffd6d6);
   margin-top: 80px;
   padding: 30px 0;
 }
 .col-2 .offer-img {
   padding: 50px;
 }
 small {
   color: #555;
 }
 .testimonial {
   padding-top: 90px;
 }
 .testimonial .col-3 {
   text-align: center;
   padding: 40px 20px;
   box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.456);
   cursor: pointer;
   transition: transform 0.5s;
 }
 .testimonial .col-3 img {
   width: 50px;
   margin-top: 20px;
   border-radius: 50%;
 }
 .testimonial .col-3:hover {
   transform: translateY(-10px);
 }
 .fa-solid.fa-quote-left {
   font-size: 34px;
   color: #ff523b;
 }
 .col-3 p {
   font-size: 12px;
   margin: 12px 0;
   color: #777;
 }
 .testimonial .col-3 {
   font-weight: 600px;
   color: #555;
   font-size: 16px;
 }
 .brands {
   margin: 100px auto;
 }
 .col-5 {
   width: 160px;
 }
 .col-5 img {
   width: 100%;
   cursor: pointer;
   filter: grayscale(100%);
 }
 .col-5 img:hover {
   filter: grayscale(0);
 }
 .footer {
   background: #000;
   color: #8a8a8a;
   font-size: 14px;
   padding: 60px 0 20px;
   /* margin-top: 10px; */
   margin
 }
 .footer p {
   color: #8a8a8a;
 }
 .footer h3 {
   color: #fff;
   margin-bottom: 20px;
 }
 .footer-col-1,
 .footer-col-2,
 .footer-col-3,
 .footer-col-4 {
   min-width: 250px;
   margin-bottom: 20px;
 }
 .footer-col-1 {
   flex-basis: 30%;
 }
 .footer-col-2 {
   flex: 1;
   text-align: center;
 }
 .footer-col-2 img {
   width: 180px;
   margin-bottom: 20px;
 }
 .footer-col-3,
 .footer-col-4 {
   flex-basis: 12%;
   text-align: center;
 }
 ul {
   list-style-type: none;
 }
 .app-logo {
   margin-top: 20px;
 }
 .app-logo img {
   width: 140px;
 }
 .footer hr {
   border: none;
   background: #b5b5b5;
   height: 1px;
   margin: 20px 0;
 }
 .Copyright {
   text-align: center;
 }
 .table{
  box-shadow:1px 0px 10px 0 black;
  margin-left:22%;
 
 }
 .btn2 {
  position:absolute;
  top:235px;
  left:710px;
  padding:15px;
   /* height:50px;
  width:100px; */
  border-radius:9%; 
  background-color:#eb3316 ;
  color:black;
  font-weight:bold;
  border:none;
  text-decoration:none;
  
  
 }
 .btn2:hover{
  background-color:black;
  color:white;
 }
 .b{
  color:black;
  
 }
 .b:hover{
  text-decoration:underline;
 }
 td{
  padding:10px;
  
 }
 th{
  padding:15px;
  background-color:black;
  color:white;
 }
 .driver{
  
  padding:15px;
  border-radius:10px;
  border:none;
  background-color:orangered;
  font-weight:bold;
  font-size:16px;
  color:black;
 }
 </style>
 <body>
 <?php
$conn = mysqli_connect("localhost", "root", "", "cab booking website");

if (mysqli_connect_errno()) {
    echo "Failed to connect to mySQL:" . mysqli_connect_error();
}
$query = "SELECT * FROM `driver`";
$result = mysqli_query($conn, $query);

?>
 <div class="categories">
       <!-- <div class="small-container"> -->
         <h2 class="title">Driver's List</h2><br>
         <center>
         <a href="adddriver.php" class="driver">Add Driver</a>
</center><br><br>
         <!-- <div class="row"> -->
           <!-- <div class="col-3"> -->
           <!-- <div class="rating"> -->
              </center>
              <table border=2 class="table" cellspacing=10 width=55%>
                <tr>
                                <th> DriverID</th>
                                <th>FullName </th>
                                <th> PhoneNo</th>
                               
                                <th> Email</th>
                               
                  <!-- <th rowspan="3">ADD CABS</th> -->
                  <!-- <th>DATE</th>
                  <th>START TIME</th>
                  <th>NUMBER OF TRAVELLER</th>
                  <th>CAB STYLE</th> -->

  </tr>
  </div>
  <?php
 while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <td><?php echo $row['DriverID']; ?></td>
      <td><?php echo $row['FullName']; ?></td>
      <td><?php echo $row['PhoneNo']; ?></td>
      <td><?php echo $row['Email']; ?></td>
     
    
  </tr>
<?php
}
  
?>

     </div>
</center>
</table>
 </body>
 </html>

 

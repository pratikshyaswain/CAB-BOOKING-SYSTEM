<html>
  <head>
    <style>
      .categories{
        text-align :center;
        margin: 50px 0;
      }
      .title {
  text-align: center;
  margin: 0 auto 80px;
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
.table{
  box-shadow:1px 0px 10px 0 black;
  margin-left:13%;
 }
 td{
  padding:10px;
  
 }
 th{
  padding:15px;
  background-color:black;
  color:white;
 }
      </style>
</head>
  </html>

<?php
include "dashboard.php";
?>
<?php
 session_start();
 $email=$_SESSION['email'];
 $con=mysqli_connect("localhost","root","","cab booking website");
 if(mysqli_connect_error()){
    echo "failed!". mysqli_connect_error();
 }
 $query="SELECT * FROM `booking table` where (SELECT EMAIL FROM EMAIL= '" . $email . "'";
 $data =mysqli_query($con,$query);
  $total=mysqli_num_rows($data);
  if($total!=0){
    ?>
 <body>
 <div class="categories">
       <!-- <div class="small-container"> -->
         <h2 class="title">My Booking</h2>
         <!-- <div class="row"> -->
           <!-- <div class="col-3"> -->
           <!-- <div class="rating"> -->
              </center>
              <table border=1 class="table" cellspacing=5 width=75%>
                <tr>
                  <th>BookingID</th>
                  <th>PickUpLocation</th>
                  <th>Destination</th>
                  <th>TravelDate</th>
                  <th>TravelTime</th>
                  <th>Status</th>
                  <th>AssignedDriver</th>
                  <th>TravelCost</th>
  </tr>
                  </div>
  <?php
  while($result=mysqli_fetch_assoc($data)){
    echo "<tr>
               <td>".$result['BookingID']."</td>
               <td>".$result['PickUpLocation']."</td>
               <td>".$result['Destination']."</td>
               <td>".$result['TravelDate']."</td>
               <td>".$result['TravelTime']."</td>
               <td>".$result['Status']."</td>
               <td>".$result['AssignedDriver']."</td>
               <td>".$result['TravelCost']."</td>
               ";
  }     
}else{

}
  ?>

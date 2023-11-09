<?php
    $conn = mysqli_connect("localhost", "root", "", "cab booking website");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to mySQL:" . mysqli_connect_error();
    }
    
    ?>
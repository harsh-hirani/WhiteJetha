<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.  
    $con = mysqli_connect("sql100.epizy.com","epiz_34082014","G6A4uRl736j0zN","epiz_34082014_loginsystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<?php 
    session_start();
    echo "Welcome ". $_SESSION['email'];
    echo "<br><a href='logout.php'>logout</a>"
?>
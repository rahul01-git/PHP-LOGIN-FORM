<?php
    session_start();
    session_destroy();
    if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
        setcookie('email',$email,time() - 1);
        setcookie('pass',$pass,time() - 1);
    }
    echo "Succesfully logout <br><a href='index.php'>Click here to login again</a>";
?>
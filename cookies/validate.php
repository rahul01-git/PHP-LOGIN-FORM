<?php 
    if(isset($_POST['login']))
    {
        $myemail = 'rahul@gmail.com';
        $mypass = '1234';
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        if($email == $myemail && $pass == $mypass){
            if(isset($_POST['remember'])){
                setcookie('email',$email,time() + 60*60*7);
                setcookie('pass',$pass,time() + 60*60*7);
            } 
            session_start();
            $_SESSION['email'] = $email;
            header('Location:welcome.php');
        }else{
            echo "invalid email or password <br><a href='index.php'>Click here to try again</a>";
        }

    } else{
        header('Location: index.php');
    }
?>
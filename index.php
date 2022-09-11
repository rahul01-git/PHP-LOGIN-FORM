
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="email" name="email" id="email" placeholder="Enter your email"> <br>
        <input type="password" name="pass" id="pass" placeholder="Enter your password"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $email =  $_POST['email'];
        $pass = $_POST['pass'];
        echo "$email, $pass";
    }

?>

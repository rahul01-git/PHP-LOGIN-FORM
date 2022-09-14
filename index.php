<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
        <input type="email" class="form-control w-25 mt-1" name="email" id="email" placeholder="Enter your email"> <br>
        <input type="password" class="form-control w-25" name="pass" id="pass" placeholder="Enter your password"> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        $email =  $_POST['email'];
        $pass = $_POST['pass'];
        
        
    #NOTE:    //database connect garni yeta batw!!  (MySQLI)
        $conn = new mysqli("localhost","root","","login_auth");  //localhost ,username,password,databaseName

        if($conn->connect_error){ //check if connection success or not
            die("$conn->Connect_error");
        }

        echo "connection success<br>"; //if success

        $sql = "SELECT * FROM user WHERE email='$email' and password='$pass' ";
        $result = $conn ->query($sql);
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";

        if($result -> num_rows>0){
            $row = $result -> fetch_assoc();
            $db_email = $row['email'];
            $db_pass = $row['password'];
            // print_r($row);
            // echo "$db_email,$db_pass";
            if($db_email === $email &&  $db_pass === $pass){
                echo "login success";
            }else{
                echo "invalid email or password";
            }
        }
    }

?>

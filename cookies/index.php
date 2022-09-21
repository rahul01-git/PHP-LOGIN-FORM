

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <form action="validate.php" method="POST" class="p-3">
        <h1>Login using cookies and sessions with remember me</h1>
        <input type="email" class="form-control w-25 mt-1" required id='email' name="email" placeholder="Enter your email"> <br>
        <input type="password" class="form-control w-25" required id='pass' name="pass" placeholder="Enter your password"> <br>
        <label ><input type="checkbox" name="remember" value="1"> Remember me</label><br>
        <button type="submit" name='login' class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
<?php
    if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        echo "
            <script>
            document.getElementById('email').value= '$email';
            document.getElementById('pass').value= '$pass';
            </script>
        ";
    }
?>
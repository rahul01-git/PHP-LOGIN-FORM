<?php
    session_start();
    $isLoggedIn = isset($_SESSION['user']);
    if(!$isLoggedIn){
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <div class="container">
        <h1>LOGIN SUCCESSFUL</h1>
        <h2>Welcome <?php echo $_SESSION['user']?></h2>
        <form method='POST'>    
            <button name="logout">LOG-OUT</button>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header('Location:index.php');
    }
?>
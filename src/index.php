<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth System</title>
</head>

<body>
<?php
    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] == True) {
        header('location: Home.php');
    }
    $error = "";
    if (isset($_POST['username']) && isset($_POST['pwd'])) {
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        if ($username == "admin" && $password == "l0G3In") {
            header(`location: Home.php`);
        } else {
            $error = "Invalid username or password!";
        }
    }
    ?>
    <h1>Auth System</h1>
    <div class="container">
        <form class="login-form" action="" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login">
        </form>
    </div>

    <?php require_once __DIR__ . "../pages/Pages.php" ?>
</body>

</html>
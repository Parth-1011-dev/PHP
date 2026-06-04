<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
    <h1>Student Login</h1><br>
    <form action="home.php" method="POST">

        USERNAME : <input type="text" name="username" placeholder="Enter your name"><br>

        PASSWORD : <input type="password" name="Password" id="" placeholder="Enter your password"><br><br>

        <input type="submit" value="Login" id="">

    </form>
    </center>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"]="POST")
    {
        $username = $_POST['username'];
        $password = $_POST['Password'];

        if($username == "parth" && $password == "1011")
        {
            header("Location: home.php");
        }
        else{
            echo("Sorry");
        }
    }

?>
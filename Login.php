<?php
    if (isset($_POST) && $_POST){
        include_once("db_connect.php");
        
        $sql = "SELECT `id`, `email` FROM `user` WHERE `email` = '" . $_POST['email']. "' and `password` = '" . $_POST['password'] . "';";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) == 0){
            echo "User not found: Check your credentail";
        }else{
            $user = mysqli_fetch_assoc($result);

            session_start();
            // Set session variables
            $_SESSION["id"] = $user['id'];
            $_SESSION["email"] = $user['email'];
            
            header('Location: ./index.php');
            die;
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap</title>
</head>
<body>
    <h1>Page Login</h1>
    <?php include("nav.php") ?>

    <form method="post">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
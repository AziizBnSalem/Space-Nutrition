<?php
    if (isset($_POST) && $_POST){
        include_once("Lib\dbconnect.php");
        
        $sql = "SELECT `id-signup`, `name` , `email` FROM `signup` WHERE `email` = '" . $_POST['email']. "' and `password` = '" . $_POST['password'] . "';";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) == 0){
            echo "User not found: Check your credentail";
        }else{
            $signup = mysqli_fetch_assoc($result);

            session_start();
            // Set session variables
            $_SESSION["id-signup"] = $signup['id-signup'];
            $_SESSION["email"] = $signup['email'];
            $_SESSION["name"] = $signup['name'];

            
            header('Location: /Loco-Nutrition/Home.php');
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
    <title>Login</title>
</head>
<style>
    header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #B6BBC4;
  
}

#logo {
  height: 80px;
  width: 60px;
}

img {
  height: 540px;
}

nav ul li {
  display: inline;
  margin-right: 30px;
}

nav ul li a {
  text-decoration: none;
  color: black;
}

 
form {
  width: 350px;
  position: relative;
}


form input {
  font-family: inherit;
  width: 100%;
  outline: none;
  background-color: #D3D6DB;
  border-radius: 4px;
  display: block;
  padding: 0.8rem 0.10rem;
  box-shadow: 0px 3px 6px rgba(01, 1, 0, 0.16);
  font-size: 19px;
  color: black;
  
}

hr.center-ball {
    background: grey;
}
hr {
    border: 0;
    height: 9px;
    width: 80%;
    position: relative;
    margin: 30px auto;
}

hr {
    display: block;
    unicode-bidi: isolate;
    margin-block-start: 01.5em;
    margin-block-end: 0.5em;
    margin-inline-start: auto;
    margin-inline-end: auto;
    overflow: hidden;
    border-style: inset;
    border-width: 1 px;
     }
    </style>
<body>
<header>
<a href="Home.php">
    <img src="assets\img\20231108_110143_0001.png" id="logo">
</a>
    <nav>
      <ul>
      <?php include("./lib/nav.php");   ?>

      </ul>
    </nav>
  </header>
<center><br><br><br><br><br>
    <h1>Login</h1>
   
    <form method="post">
        <label for="email">Email: </label>
        <input type="email" name="email" id="Email">
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="Password">
        <br>
        <input type="submit" value="Login">
    </form>
    </center>
    <br><br><br><br><br>
  <center>
  <hr class="center-ball">
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved
    </p>
  </section>
  </center>
</body>
</html>
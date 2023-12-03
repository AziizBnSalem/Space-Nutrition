<?php
    if (isset($_POST) && $_POST){
        include("./lib/dbconnect.php");

        $sql = "INSERT INTO `contact` (`full_name`, `email`, `message`) 
        VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['message'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loco Nutrition</title>
</head>
<style>


html{
  font-size: 85.5%;
  scroll-behavior:smooth;
  scroll-padding-top: 10rem;
  overflow-x: hidden;
}
header{
  background-image:linear-gradient(rgba(0, 0, 0, 0.950), rgba(0, 0, 0, 0.300)),url(./img/Background.jpg);
  height: 100vh;
  background-size: cover;
  background-position: center;
}
ul{
  list-style: none;
  float: right;
  display: flex;
  position: absolute;
  left: 500px;
}
ul li a{
  text-decoration: none;
  color: #ffffff;
  padding: 6px 20px ;
  text-transform: uppercase;
  border: 1px solid transparent;
  margin: 10px;
  transition: 0.10s ease;
}
ul li a:hover{
  background: #ffffff94;
  color: #000000;
}
label{

  font-size: 1.3rem;
  color: #ffffff;
}
body {
    font-family: muli-regular;
    color: black;
    font-size: 13px;
    margin: 0
}
input,textarea,select,button {
    font-family: muli-regular;
    color: black;
    font-size: 13px
}
h1 {
    margin: 0
}
</style>

<body>
    <header>
    <center>
    <?php include("./lib/nav.php") ?>

    <br><br><br><br>
    <br><br><br><br>
    <form action="./contact.php" method="post">
        <label for="name">Full Name</label>
        <input id="name" name="name" type="text"/>
        <br/>

        <label for="email">Email</label>
        <input id="email" type="email" name="email">
        <br/>

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br/>

        <input type="submit" value="submit">
    </form>
    </center>
</header>

</body>
</html>
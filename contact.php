<?php
    if (isset($_POST) && $_POST){
        include("./lib/dbconnect.php");

        $sql = "INSERT INTO `contact` (`full_name`, `email`, `message`) 
        VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['message'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "Thank you for your Feedback";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loco Nutrition</title>
</head>
<style>
header {
  display: flex;
  align-items: right;
  justify-content: space-between;
  background-color: #B6BBC4;
  }

  img {
  height: 150px;
  }

  li {
  display: flex;
  align-items:right;
 /* Use flexbox to align the images */
  }
  
  nav ul li {
  display: inline;
  margin-right: 30px;
  }

  nav ul li a {
  text-decoration: none;
  color: black;

  }

  #Formulaire{
    text-align:center;
  }

</style>

<body>
    <header>
    <?php include("./lib/nav.php") ?>

    <br><br><br><br>
<a href="Home.php">
    <img src="assets\img\20231108_110143_0001.png" id="logo">
</a>
 
  </header>


    <br><br><br><br>
    <form action="./contact.php" method="post" id="Formulaire">
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

</body>
</html>
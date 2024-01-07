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

  #Formulaire{
    text-align:center;
  }

  form {
  width: 350px;
  position: relative;
}


form input {
  font-family: inherit;
  width: 100%;
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
  <center>

    <H1>Contact</H1>
    <form action="./contact.php" method="post" id="Formulaire">
        <label for="name">Full Name</label>
        <input id="name" name="name" type="text"/>
        <br/>

        <label for="email">Email</label>
        <input id="email" type="email" name="email">
        <br/>

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="40" rows="10"></textarea>
        <br/>

        <input type="submit" value="Submit">
    </form>
    </center>
    <br><br>
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
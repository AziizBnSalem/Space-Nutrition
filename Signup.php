<?php

include_once("Lib\dbconnect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

    // Hash the password for security
    
    // Insert user information into the database
    $sql = "INSERT INTO signup (name, email, password) VALUES ('$name' , '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
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
<center><br><br><br>
    <h1>Signup</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Signup">
    </form>
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

<?php
// Close the database connection
$conn->close();
?>

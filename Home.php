<?php
  $products =  array(
 
    array("image"=>"./img/Posing1.jpg", "title"=>"mon titre"),
    array("image"=>"./img/Posing2.jpg", "title"=>"mon titre"),
    array("image"=>"./img/Posing3.jpg", "title"=>"mon titre"),
   
  );
?>
<?php 
    include_once('./lib/auth-required.php');
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

.custom_heading {
  text-align: center;
  font-weight: bold;
}

.custom_heading-text {
  text-align: center;
}

p{
  text-align:center;
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

     .previous {
  background-color: grey;
  color: black;
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
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
  <br>
  <center>
    
    <?php 
        if ($logedin == TRUE) {
            echo "Hello, " . $_SESSION["name"];
        }
    ?>
</center>
<br>

      <h3 class="custom_heading-text">
      Ready For Your Next Lesson ?  </h3>
    
              
      <p>Your dedication and hard work will not only make a difference in the lives of individuals,
         but also contribute to the advancement of technology and innovation.
         </p>
         
          <br>
        

        <center>
  <?php foreach ($products as $product) { ?>
  
      <img style="height: 400px; width: 380px;" src="<?= $product['image'] ?>" alt="Workplace">
    
  <?php } ?>
  <hr class="center-ball">
  <section class="container-fluid footer_section">
  <p>
          Keep pushing forward and remember the impact your project can have on the world 
          and don’t forget to Improve your overall health and well-being Regular exercise can help improve
           your physical and mental health,
         reduce the risk of chronic diseases, and increase your energy levels.</p>
        <br>
        <h2>Contact us now !</h2>
        <a href="contact.php" class="previous">Contact Us</a>
  </center>
  <br>
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


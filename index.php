<?php
  $products =  array(
    array("image"=>"./assets/img/Gain Weight.png", "title"=>"mon titre"),
    array("image"=>"./assets/img/lose Weight.png", "title"=>"mon titre"),
    array("image"=>"./assets/img/Accessories.png", "title"=>"mon titre"),
    array("image"=>"./assets/img/amino acids.png", "title"=>"mon titre"),
   
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loco Nutrition</title>

  <style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: black;
  color: white;
}

.round {
  border-radius: 50%;
}
footer {
  text-align: left;
  padding: 10px 0;
  background-color: #6b6868;
  color: black;
}
</style>
</head>
<body>
<a href="login.php" class="previous">&laquo; Previous</a>


    <center>
      <img src="./assets/img/20231108_110143_0000.PNG" alt="HTML5 Icon" style="width:270px;height:350px;">
    </center>
    <center>
      <H1 style="background-color:white;">Our Service</H1>
    </center>


  <center>
  <?php foreach ($products as $product) { ?>
    <a  href="single.php">
      <img style="height: 300px; width: 280px;" src="<?= $product['image'] ?>" alt="Workplace">
    </a>
    
  <?php } ?>
  <br>  <br>  <br>  <br>  <br>
  
  
<footer>
<center>
    <p>&copy; 2023 Product Site</p>
    </center>
  </footer>
  

  </center>
</body>
</html>
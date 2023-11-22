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
        body {font-family: Arial, Helvetica, sans-serif;}
        color {
          white
        }
        
  </style>
</head>
<body>

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

  </center>
</body>
</html>
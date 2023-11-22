<?php
  $products =  array(
    array("image"=>"./assets/img/C4M8NNB5ft4HFI9JA5C9.webp", "title"=>"mon titre"),
    array("image"=>"./assets/img/jKz7a4e1fmghTS3AmHIO.webp", "title"=>"mon titre"),
    array("image"=>"./assets/img/ytOPULLQq7o5ABlAyIvd.webp", "title"=>"mon titre"),
    array("image"=>"./assets/img/zLAcbrjq2gMM3bCNhIYC.webp", "title"=>"mon titre"),
   
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loco Nutrition</title>
</head>
<body>
    
</body>
</html>
<center>

<img src="./assets/img/20231108_110143_0001.PNG" alt="HTML5 Icon" style="width:270px;height:350px;">
</center>

<center>
<H1 style="background-color:rgb(255, 255, 255);">Our Products</H1>
</center>
<center>
  <?php foreach ($products as $product) { ?>
    <a  href="#">
      <img style="height: 300px; width: 280px;" src="<?= $product['image'] ?>" alt="Workplace">
    </a>
  <?php } ?>

  </center>

</body>
</html>
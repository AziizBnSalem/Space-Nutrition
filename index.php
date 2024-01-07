<?php 

    include("./lib/dbconnect.php");

    $search = '';
    if (isset($_GET) && $_GET && $_GET['search']){
        $search = $_GET['search'];
        $sql = "SELECT * FROM `product` WHERE `title` LIKE '%" . $_GET['search'] . "%' or `description` LIKE '%" . $_GET['search'] . "%';";
    }else {
        $sql = "SELECT * FROM `product`";
    }

      $result = $conn->query($sql);
      $conn->close();
?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loco Nutrition</title>
<style>


  header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #B6BBC4;
  }

  img {
  

  height: 80px;
  width: 60px;

  }


  nav ul li {
  display: inline;
  margin-right: 30px;
  }

  nav ul li a {
  text-decoration: none;
  color: black;
  }

  label{
  text-align: right;
  }

  li {
  display: flex; /* Use flexbox to align the images */
  }
  #Formm{
  border-style:solid ;
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
    <img  src="assets\img\20231108_110143_0001.png" alt="Logo">
</a>
    <form>
        <label for="search">Search</label>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>
    <nav>
      <ul>
      <?php include("./lib/nav.php") ?></body>

      </ul>
    </nav>
   
</header>
    <br><br><br>
    <center>
    <li id="Formm">
      
        <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                    <li>
                        <h2><?= $row["Title"] ?></h2>
                        <img src="<?= $row["Image_url"] ?>" alt="test">
                        <p><?= $row["Description"] ?></p>
                    </li>
                <?php }
            } else {
                echo "0 results";
            }
        ?>
    </li>
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
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
  background-image:linear-gradient(rgba(0, 0, 0, 0.100), rgba(0, 0, 0, 0.300)),url(./img/Background.jpg);
  height: 100vh;
  background-size: cover;
  background-position: center;
}
ul{
  list-style: none;
  float: right;
  display: flex;
  position: absolute;
  left: 350px;

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
    font-size: 15px
}
h1 {
    margin: 0;
}
form {
  position: absolute;
  left: 1%
}
img {
  margin-right: 20px;
  display: block;

}




</style>

<body>
  <header>
    <?php include("./lib/nav.php") ?>
<br>
    <form>
        <label for="search">Search</label>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>
    <br><br><br>
    <ceNter>
    <ul name="for">
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
    </ul>
    </ceNter> 
          </header>
</body>
</html>
<?php include_once('auth-required.php');?>
<ul>
    <li><a href="./index.php">Products</a></li>
    <li><a href="./Home.php">Coaching</a></li>
    <li><a href="./contact.php">Contact</a></li>
    <?php if ($logedin == TRUE) { ?>
    <li><a href="./Logout.php">Logout</a></li>
    <?php }else{ ?>
    <li><a href="./login.php">Login</a></li>
    <li><a href="./Signup.php">Signup</a></li>
    <?php } ?> 
</ul>
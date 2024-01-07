<?php 
    session_start();
    $logedin = FALSE;
    if (isset($_SESSION['id-signup'])){
        $logedin = TRUE;
    }else{
        $logedin = FALSE;
    }
?>
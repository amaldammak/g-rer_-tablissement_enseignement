<?php
include_once 'configDB.php';
if(isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $error = "";
    $res = mysqli_query($comm,"SELECT * FROM users;");
    $fetch = mysqli_fetch_array($res);
    if( $login == $fetch['login']){
        if( $password == $fetch['password']){
            header('Location: menu.php'); 
            
        }else{
            $error = "Invalid password";
            header('Location: login.php?error='.$error); 
        }
    }else{
        $error = "Invalid username";
        header('Location: login.php?error='.$error); 
    }}

?>
<?php
include_once 'configDB.php';

if(isset($_POST['submit'])){
    
    $nommatiére = $_POST['nommatiére'];
   
    
  mysqli_query($comm,"INSERT INTO `matiere` (`id_matier`, `nom matiére`) VALUES (NULL, ' $nommatiére');");
header('Location: tablematiére.php');}?>
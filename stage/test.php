<?php
include_once 'configDB.php';

if(isset($_POST['mettreajour'])){
    $id_classe =  $_POST['id_classe'];
    $nomc = $_POST['nomc'];
    $nombrele = $_POST['nombrele'];
    $niveauc = $_POST['niveauc'];
    
    mysqli_query($comm,"UPDATE `classe` SET `nomclasse` = ' $nomc',
     `id_niveau` = '$niveauc', `nombreE` = ' $nombrele' WHERE `classe`.`id_classe` = $id_classe ;");}?>
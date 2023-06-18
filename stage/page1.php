<?php
include_once 'configDB.php';

if(isset($_POST['submit'])){
    $nomc = $_POST['nomc'];
    $nombrele = $_POST['nombrele'];
    $niveauc = $_POST['niveauc'];
    
mysqli_query($comm,"INSERT INTO `classe` ( `nomclasse`, `id_niveau`, `nombreE`)
 VALUES (' $nomc ','$niveauc','$nombrele' )") ;
 header('Location: tableclass.php');}

if(isset($_GET['delete'])){
    $id = $_GET['idmatr'];
    mysqli_query($comm,"DELETE FROM `classe` WHERE id_classe = '$id';");
    header('Location: tableclass.php');}
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $res = mysqli_query($comm,"SELECT * FROM classe WHERE id_classe = '$id';" ) ;
        $fetch = mysqli_fetch_array($res);//te5o tableau 
        $id =  $fetch['id_classe'];
        $nomc = $fetch['nomclasse'];
        $nombrele = $fetch['nombreE'];
        $nv = mysqli_query($comm,"select * from niveau where id_niveau=".$fetch['id_niveau'] ) ;
      $fetchnv = mysqli_fetch_array($nv);
        $niveauc = $fetchnv['niveau']; }

        
        if(isset($_POST['mettreajour'])){
            $id =  $_POST['id'];
            $nomc = $_POST['nomc'];
            $nombrele = $_POST['nombrele'];
            $niveauc = $_POST['niveauc'];
           
            mysqli_query($comm,"UPDATE `classe` SET `nomclasse` = ' $nomc',
     `id_niveau` = '$niveauc', `nombreE` = ' $nombrele' WHERE `classe`.`id_classe` = $id ;") or die("UPDATE `classe` SET `nomclasse` = ' $nomc',
     `id_niveau` = '$niveauc', `nombreE` = ' $nombrele' WHERE `classe`.`id_classe` = $id ;");
         header('Location: tableclass.php');    
        }
?>
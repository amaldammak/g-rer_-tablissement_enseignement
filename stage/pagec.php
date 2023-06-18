<?php
include_once 'configDB.php';

if(isset($_POST['submit'])){
    $nivc = $_POST['nivc'];
    $prixm = $_POST['prixm'];
    $fraisinsc = $_POST['fraisinsc'];
   
    
  mysqli_query($comm,"INSERT INTO `niveau` ( `niveau`, `prix_mensuel`, `frais_inscri`) VALUES ( '$nivc ', '$prixm', '$fraisinsc')");
  header('Location: tableniveau.php');}
if(isset($_GET['delete'])){
  $id = $_GET['idmatr'];
  mysqli_query($comm,"DELETE FROM `niveau` WHERE id_niveau = '$id';");
  header('Location: tableniveau.php');}


  
  if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $res = mysqli_query($comm,"SELECT * FROM niveau WHERE id_niveau = '$id';" ) ;
      $fetch = mysqli_fetch_array($res);
      $nivc = $fetch['niveau'];
      $prixm = $fetch['prix_mensuel'];
      $fraisinsc = $fetch['frais_inscri'];}

      
      if(isset($_POST['mettreajour'])){
        $id = $_POST['id'];
        $nivc = $_POST['nivc'];
        $prixm = $_POST['prixm'];
       $fraisinsc = $_POST['fraisinsc'];
   
         
          mysqli_query($comm," UPDATE `niveau` SET `niveau` = ' $nivc', `prix_mensuel` = '$prixm', `frais_inscri` = '$fraisinsc' 
          WHERE `niveau`.`id_niveau` = $id;");
       header('Location: tableniveau.php');  
      }

?>
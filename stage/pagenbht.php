<?php
include_once 'configDB.php';

if(isset($_POST['submit'])){
    $cmait = $_POST['cmait'];
    $jsomaine = $_POST['jsomaine'];
    $nht = $_POST['nht'];
   
    
  mysqli_query($comm,"INSERT INTO `nb_heur_travail` ( `id_maitresse`, `jourdelasemaine`, `nb_heurs_jour`) 
    VALUES ( '$cmait', '$jsomaine', '$nht')");
header('Location: tablenbheure.php');}
if(isset($_GET['delete'])){
  $id = $_GET['idmatr'];
  mysqli_query($comm,"DELETE FROM `nb_heur_travail` WHERE id_nbheur = '$id';");
  header('Location: tablenbheure.php');}
  if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $res = mysqli_query($comm,"SELECT * FROM nb_heur_travail WHERE id_nbheur = '$id';" ) ;
      $fetch = mysqli_fetch_array($res);
      $id =  $fetch['id_nbheur'];
      $cmait = $fetch['id_maitresse'];
    $jsomaine = $fetch['jourdelasemaine'];
    $nht = $fetch['nb_heurs_jour'];
     }

      
      if(isset($_POST['mettreajour'])){
          $id =  $_POST['id'];
          $cmait = $_POST['cmait'];
          $jsomaine = $_POST['jsomaine'];
          $nht = $_POST['nht'];
         
         
          mysqli_query($comm,"UPDATE `nb_heur_travail` SET `id_maitresse` = ' $cmait',
           `jourdelasemaine` = ' $jsomaine', `nb_heurs_jour` = '$nht' WHERE `nb_heur_travail`.`id_nbheur` = $id ;") ;
       header('Location: tablenbheure.php');   
      }

?>
<?php
include_once 'configDB.php';

if(isset($_POST['submit'])){
    $cmait = $_POST['cmait'];
    $nclass = $_POST['nclass'];
    
   
    
  mysqli_query($comm,"INSERT INTO `class_maitresse` ( `id_maitresse`, `id_classe`) VALUES ( '$cmait', ' $nclass')");
  header('Location: tableclsmat.php');}
if(isset($_GET['delete'])){
  $id = $_GET['idmatr'];
  mysqli_query($comm,"DELETE FROM `class_maitresse` WHERE id_clsmat = '$id';");
  header('Location: tableclsmat.php');}


  
  if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $res = mysqli_query($comm,"SELECT * FROM class_maitresse WHERE id_clsmat = '$id';" ) ;
      $fetch = mysqli_fetch_array($res);
      $id = $fetch['id_clsmat'];
      $nvs = mysqli_query($comm,"select * from maitresse where id_maitresse=".$fetch['id_maitresse'] ) ;
    $fetchnvs = mysqli_fetch_array($nvs);
      $cmait = $fetchnvs['Codemaitresse'];
      $nv = mysqli_query($comm,"select * from classe where id_classe=".$fetch['id_classe'] ) ;
      $fetchnv = mysqli_fetch_array($nv);
    $nclass = $fetchnv['nomclasse'];}

      
      if(isset($_POST['mettreajour'])){
          $id = $_POST['id'];
          $cmait = $_POST['cmait'];
          $nclass = $_POST['nclass'];
         
          mysqli_query($comm,"UPDATE `class_maitresse` SET `id_maitresse` = ' $cmait', `id_classe` = ' $nclass ' WHERE `class_maitresse`.`id_clsmat` = $id;");
       header('Location: tableclsmat.php');  
      }
          
<?php
//connection base
include_once 'configDB.php';
// insertion 
if(isset($_POST['submit'])){
    $mat = $_POST['mat'];
    $nom = $_POST['nom'];
    $pre = $_POST['pre'];
    $adresse = $_POST['adresse'];
    $naissance = $_POST['naissance'];
    $nclass = $_POST['nclass'];
    $datinscri = $_POST['datinscri'];
    $annscolaire = $_POST['annscolaire'];
    
    
    mysqli_query($comm,"INSERT INTO `eleve` ( `matricule`, `id_classe`, `noméléve`, `prénoméléve`, `datenaissance`, `adressepostale`, `anneescolaire`)
     VALUES ( ' $mat ', '$nclass', '$nom', '$pre', '$naissance ', '$adresse', '$annscolaire')") ;
header('Location: tableeleve.php');}
// delete ligne
if(isset($_GET['delete'])){
    $id = $_GET['idmatr'];
    mysqli_query($comm,"DELETE FROM `eleve` WHERE id_éléve = '$id';");
    header('Location: tableeleve.php');}

// update ligne
    //afficher li9dim (bech ta3milo modifier)
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $res = mysqli_query($comm,"SELECT * FROM eleve WHERE id_éléve = '$id';" ) ;
        $fetch = mysqli_fetch_array($res);
        $id = $fetch['id_éléve'];
        $mat= $fetch['matricule'];
    $nom = $fetch['noméléve'];
    $pre = $fetch['prénoméléve'];
    $adresse = $fetch['adressepostale'];
    $naissance = $fetch['datenaissance'];
    $idcl=$fetch['id_classe'];
    $nv = mysqli_query($comm,"select * from classe where id_classe=".$fetch['id_classe'] ) ;
      $fetchnv = mysqli_fetch_array($nv);
    $nclass = $fetchnv['nomclasse'];
    $annscolaire = $fetch['anneescolaire'];}

        //la modification des ligne 
        if(isset($_POST['mettreajour'])){
            $id = $_POST['id'];
            $mat = $_POST['mat'];
            $nom = $_POST['nom'];
            $pre = $_POST['pre'];
            $adresse = $_POST['adresse'];
            $naissance = $_POST['naissance'];
            $nclass = $_POST['nclass'];
            $annscolaire = $_POST['annscolaire'];
           // executer requette
            mysqli_query($comm,"UPDATE `eleve` SET `matricule` = '$mat', `id_classe` = '$nclass', `noméléve` = '$nom', `prénoméléve` = ' $pre', `datenaissance` = '$naissance', `adressepostale` = ' $adresse ',
             `anneescolaire` = ' $annscolaire' WHERE `eleve`.`id_éléve` = $id;");
         header('Location: tableeleve.php');  
        }
            
?>
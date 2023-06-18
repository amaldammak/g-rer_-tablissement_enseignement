<?php
include_once 'configDB.php';

if(isset($_POST['submit'])){
    $codmait = $_POST['codmait'];
    $nommait = $_POST['nommait'];
    $premait = $_POST['premait'];
    $nommatiere = $_POST['nommatiere'];
    
    mysqli_query($comm,"INSERT INTO `maitresse` ( `Codemaitresse`, `Nommaitresse`, `Prenommaitresse`, `matiere`) 
VALUES ( ' $codmait', '$nommait', '$premait', '$nommatiere')");
 header('Location: tablemaitresse.php');

}
if(isset($_GET['delete'])){
    $id = $_GET['idmatr'];
    mysqli_query($comm,"DELETE FROM `maitresse` WHERE id_maitresse = '$id';");
    header('Location: tablemaitresse.php');}


    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        
        $res = mysqli_query($comm,"SELECT * FROM maitresse WHERE id_maitresse = '$id';" ) ;
        $fetch = mysqli_fetch_array($res);
        $id = $fetch['id_maitresse'];
        $codmait = $fetch['Codemaitresse'];
        $nommait = $fetch['Nommaitresse'];
        $premait = $fetch['Prenommaitresse'];
        $nommatiere = $fetch['matiere'];}

        
        if(isset($_POST['mettreajour'])){
            $id = $_POST['id'];
            $codmait = $_POST['codmait'];
         echo    $nommait = $_POST['nommait'];
            $premait = $_POST['premait'];
            $nommatiere = $_POST['nommatiere'];
            mysqli_query($comm," UPDATE `maitresse` SET `Codemaitresse` = ' $codmait', `Nommaitresse` = '$nommait', `Prenommaitresse` = '$premait', `matiere` = '$nommatiere' 
            WHERE id_maitresse = '$id' ;") or die(" UPDATE `maitresse` SET `Codemaitresse` = ' $codmait', `Nommaitresse` = '$nommait', `Prenommaitresse` = '$premait', `matiere` = '$nommatiere' 
            WHERE id_maitresse = '$id' ;");
         header('Location: tablemaitresse.php');    
        }
            

        ?>
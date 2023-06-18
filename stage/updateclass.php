<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            if(a[0].value!="" && a[1].value!="" && a[2].value!=""){
                alert("Bravo");
                return true;
               
            }   else{alert("il y a des colones vide ");
                return false;}     }


                
    </script>
</head>

<body>
    

<form method="POST" onsubmit="return Verifier();" action="page1.php">
<div id ="a"><h1>mettre a jour</h1> <?php
include_once 'page1.php'; ?>
               
               <input type="text" size="20" placeholder=" Nom de la classe "  maxlength="50" value="<?php echo $nomc; ?>" name="nomc"/>
               <br><br>
               <input type="hidden" name="id" placeholder="Code maitresse" value="<?php echo $id; ?>" size="20"/>
    <br><br>
                <input type="number" placeholder=" Nombre des éléves dans une classe " size="20" name="nombrele" value="<?php echo $nombrele; ?>"/>
                <br><br>

                <label> niveau de la classe </label> <select name="niveauc">
                    <?php
                include_once 'configDB.php';
                $res = mysqli_query($comm,"select* from niveau ;");
                while($fetch = mysqli_fetch_array($res)){
                    $id_niveau = $fetch['id_niveau'];
                    $niveau = $fetch['niveau'];
                    ?>
                    <option selected ><?php echo $niveauc ; ?></option><?php }?>
                     </select>
                    <br><br><button type="submit" class="b" name="mettreajour">mettre a jour</button></div></form>
                    <p> <a href= "niveau.php" class="b">  niveau </a>
         
                    <a href= "inscriptioneleve.php" class="b" > inscription éléve </a>
                <a href= "maitresse.php" class="b">  maitresse </a>
                <a href= "travail-jour-heurs.php" class="b"> nombre d' heures de travail maitresse </a></p></body></html>
                
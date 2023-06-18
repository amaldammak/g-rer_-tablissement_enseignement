<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" /> 
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            ch = document.getElementById('t1').value;
            if(!(a[0].value!="" && a[1].value!="") ){
                
               alert("il y a des colones vide ");
                return false;}else{
                   
if ( !( Number(ch)<21) ) {
 alert("le champ doit être  inferieur ou egale  à 20");
 return false
}
                }   return true; }


                
    </script>
    
</head>

<body>
    
<?php include_once 'header.php' ;?>
<form method="POST" onsubmit="return Verifier();" action="page1.php">
<div id ="a"><h1>classe</h1>
               <input type="text" size="20" placeholder=" Nom de la classe "  maxlength="50" name="nomc"/>
                <br><br>
                <input type="number" placeholder=" Nombre des éléves dans une classe " id="t1" size="20" name="nombrele"/>
                <br><br>

                <label> niveau de la classe </label> <select name="niveauc">
                    <?php
                include_once 'configDB.php';
                $res = mysqli_query($comm,"select* from niveau ;");
                while($fetch = mysqli_fetch_array($res)){//permet de lire un tableau ligne par ligne
                    $id_niveau = $fetch['id_niveau'];
                    $niveau = $fetch['niveau'];
                    ?>
                    <option value="<?php echo $id_niveau ;?>"><?php echo $niveau ;?></option><?php }?>
                     </select>
                    <br><br><button type="submit" class="b" name="submit">envoyer</button></div></form>
                    <p> <a href= "niveau.php" class="b">  niveau </a>
         
                    <a href= "inscriptioneleve.php" class="b" > inscription éléve </a>
                <a href= "maitresse.php" class="b">  maitresse </a>
                <a href= "travail-jour-heurs.php" class="b"> nombre d' heures de travail maitresse </a></p></body></html>
                
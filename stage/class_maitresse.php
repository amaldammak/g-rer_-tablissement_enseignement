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
    <form method="POST"  onsubmit="return Verifier();" action="pageclsmai.php">
<div id ="a">
Code maitresse<select name = "cmait">
        
        <?php
 include_once 'configDB.php';
$res = mysqli_query($comm,"select* from maitresse;");
while($fetch = mysqli_fetch_array($res)){
    $id_maitresse = $fetch['id_maitresse'];
    $cod = $fetch['Codemaitresse'];
    ?><option value="<?php echo $id_maitresse ;?>"><?php echo  $cod ;?></option>
    <?php }?></select> <br><br> <label> Nom de la classe </label> <select name="nclass">
    <?php
 include_once 'configDB.php';
$res = mysqli_query($comm,"select* from classe ;");
while($fetch = mysqli_fetch_array($res)){
    $id_classe = $fetch['id_classe'];
    $nom = $fetch['nomclasse'];
    ?>
<option value="<?php echo $id_classe;?>"><?php echo $nom;?></option>
<?php }?>
</select><br><br>
                <button type="submit" name ="submit" class="b">envoyer</button></div></form>
                <a href= "maitresse.php" class="b">  maitresse </a> <a href= "classe.php"class="b" >  classe </a>
                <a href= "niveau.php" class="b">  niveau </a>
                <a href= "inscriptioneleve.php" class="b" > inscription éléve </a>
                <a href= "travail-jour-heurs.php" class="b"> nombre d' heures de travail maitresse </a></body></html>
                
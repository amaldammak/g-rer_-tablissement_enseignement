<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            ch = document.getElementById('c').value;
            if(!(a[0].value!="" && a[1].value!="" )){
               alert("il y a des colones vide ");
                return false;}  else{
                    if(!( Number(ch)>0 ) ) {
 alert("le champ doit  supérieur à 0");
 return false
}
                }   }


                
    </script>
</head>

<body><form method="POST" onsubmit="return Verifier();"  action="pagenbht.php" ><div id ="a"><h1>mettre en jour</h1><?php
include_once 'pagenbht.php'; ?>
Code maitresse<select name = "cmait">
        
        <?php
 include_once 'configDB.php';
$res = mysqli_query($comm,"select* from maitresse;");
while($fetch = mysqli_fetch_array($res)){
    $id_maitresse = $fetch['id_maitresse'];
    $cod = $fetch['Codemaitresse'];
    ?><option selected ><?php echo $cmait ; ?> </option>
    <?php }?></select> <br><br>
        <input type="date" name="jsomaine" placeholder="jour de semaine" value="<?php echo  $jsomaine ; ?>" size="20"/>
    <br><br><input type="hidden" name="id" placeholder="Code maitresse" value="<?php echo $id; ?>" size="20"/><br><br>
    <input type="number" name="nht" id="c" placeholder="nombre d'heurs de travail" value="<?php echo $nht; ?>" size="20"/>
    <br><br>
    <button type="submit"  name = "submit" class="b">mettre en jour </button></div></form>
    <a href= "classe.php"class="b" >  classe </a>
                   
                <a href= "niveau.php" class="b">  niveau </a>
                <a href= "inscriptioneleve.php" class="b" > inscription éléve </a><a href= "maitresse.php" class="b">  maitresse </a>
                <a href= "class_maitresse.php" class="b">  classmaitresse </a>
               </body></html>
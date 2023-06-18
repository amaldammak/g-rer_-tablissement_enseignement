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

<body><form method="POST" onsubmit="return Verifier();"  action="pagenbht.php" ><div id ="a"><h1>nombre d' heures de travail de la maitresse </h1>
Code maitresse<select name = "cmait">
        
        <?php
 include_once 'configDB.php';
$res = mysqli_query($comm,"select* from maitresse;");
while($fetch = mysqli_fetch_array($res)){
    $id_maitresse = $fetch['id_maitresse'];
    $cod = $fetch['Codemaitresse'];
    ?><option value="<?php echo $id_maitresse ;?>"><?php echo  $cod ;?></option>
    <?php }?></select> <br><br>
        <input type="date" name="jsomaine" placeholder="jour de semaine" size="20"/>
    <br><br>
    <input type="number" name="nht" id="c" placeholder="nombre d'heurs de travail" size="20"/>
    <br><br>
    <button type="submit"  name = "submit" class="b">envoyer</button></div></form>
    <a href= "classe.php"class="b" >  classe </a>
                   
                <a href= "niveau.php" class="b">  niveau </a>
                <a href= "inscriptioneleve.php" class="b" > inscription éléve </a><a href= "maitresse.php" class="b">  maitresse </a>
                <a href= "class_maitresse.php" class="b">  classmaitresse </a>
               </body></html>
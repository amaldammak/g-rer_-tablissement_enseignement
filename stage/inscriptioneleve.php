
    <!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            ch = document.getElementById('t2').value;
            ch1 = document.getElementById('t3').value;
            // La zone texte « T1 » doit être formée que par des lettres alphabétiques
            if(!(a[0].value!="" && a[1].value!="" && a[2].value!="" && a[3].value!="" && a[4].value!="" && a[5].value!=""&& a[6].value!="")){
                
               alert("il y a des colones vide ");
                return false;}     
                
           else{
 for(i=0; i < ch.length ;i++) {
 if (
 !(
 ch.charAt(i).toUpperCase() >= "A" &&
 ch.charAt(i).toUpperCase() <= "Z" 
 )
 )
 {
 alert("le champ doit être alphabétiques");
 return false
 }}}
    for(i=0; i < ch1.length ;i++) {
 if (
 !(
 ch1.charAt(i).toUpperCase() >= "A" &&
 ch1.charAt(i).toUpperCase() <= "Z" 
 )
 )
 {
 alert("le champ doit être alphabétiques");
 return false
 }
 }
 
return true;}
        </script>
    
</head>

<body><form method="POST" onsubmit="return Verifier(); "   action="page.php"><div id ="a">
    <h1>inscription éléve</h1>
                <input type="number"   placeholder=" Matricule éléve" id="t1"  name ="mat" size="50" />
                <br><br>
                <input type="text" size="20" placeholder=" Nom éléve" id="t2"  name ="nom" maxlength="50"/>
                <br><br>
                <input type="text" size="20" placeholder=" Prénom éléve" id="t3" name ="pre" maxlength="50"/>
                
                <br><br>
                <input type="text" size="20" placeholder=" Adresse postale éléve "name ="adresse"  maxlength="50"/>
                <br><br><label>Date de naissance éléve</label>
                <input type="date" size="20" name="naissance"/>
                <br><br><label>Date d inscription </label>
                <input type="date" size="20" name="datinscri"/>
                <br><br>
                <input type="text" size="20" placeholder=" année scolaire  " name="annscolaire"/>
                <br><br>
                <label> Nom de la classe </label> <select name="nclass">
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
                    <button type="submit" name="submit" class="b">envoyer</button></div></form>
                    <a href= "classe.php"class="b" >  classe </a>
                   
                    <a href= "class_maitresse.php" class="b">  classmaitresse </a>

                <a href= "niveau.php" class="b">  niveau </a>
                <a href= "maitresse.php" class="b">  maitresse </a></body></html>
                
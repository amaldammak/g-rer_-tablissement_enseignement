<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            if(a[0].value!="" && a[1].value!="" && a[2].value!="" && a[3].value!="" && a[4].value!="" && a[5].value!=""&& a[6].value!=""){
                alert("Bravo");
                return true;
               
            }   else{alert("il y a des colones vide ");
                return false;}     }


                
    </script>
    
</head>

<body><form method="POST" onsubmit="return Verifier();" action="page.php"><div id ="a">
    <h1>mettre a jour</h1>
    <?php
include_once 'page.php'; ?>
                <input type="number" placeholder=" Matricule éléve" value="<?php echo $mat; ?>"  name ="mat" size="50" />
                <br><br><input type="hidden" name="id" placeholder="Code maitresse" value="<?php echo $id; ?>" size="20"/>
    <br><br>
                <input type="text" size="20" placeholder=" Nom éléve" value="<?php echo $nom; ?>" name ="nom" maxlength="50"/>
                <br><br>
                <input type="text" size="20" placeholder=" Prénom éléve" value="<?php echo $pre; ?>" name ="pre" maxlength="50"/>
                
                <br><br>
                <input type="text" size="20" placeholder=" Adresse postale éléve " value="<?php echo $adresse; ?>"name ="adresse"  maxlength="50"/>
                <br><br><label>Date de naissance éléve</label>
                <input type="date" size="20" value="<?php echo $naissance; ?>" name="naissance"/>
                <br><br><label>Date d inscription </label>
                <input type="date" size="20" value="<?php echo $datinscri; ?>" name="datinscri"/>
                <br><br>
                <input type="text" size="20" placeholder=" année scolaire  " value="<?php echo $annscolaire ; ?>" name="annscolaire"/>
                <br><br>
                <label> Nom de la classe </label> <select name="nclass" >
<?php
 include_once 'configDB.php';
$res = mysqli_query($comm,"select* from classe ;");
while($fetch = mysqli_fetch_array($res)){
    $id_classe = $fetch['id_classe'];
    $nom = $fetch['nomclasse'];
    ?>
<option  <?php  if($idcl==$id_classe) { ?>selected<?php }  ?> ><?php echo $nom; ?></option>
<?php }?>
</select><br><br>
                    <button type="submit" name="mettreajour" class="b">mettre a jour</button></div></form>
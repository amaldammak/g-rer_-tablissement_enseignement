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

    <form  method="POST" onsubmit="return Verifier();" action="pagem.php">
        <div id ="a"><h1>mettre a jour</h1>
        <?php
include_once 'pagem.php'; ?>
    <input type="number" name="codmait" placeholder="Code maitresse" value="<?php echo $codmait; ?>" size="20"/>
    <input type="hidden" name="id" placeholder="Code maitresse" value="<?php echo $id; ?>" size="20"/>
    <br><br>
    <input type="text" name="nommait" placeholder="Nom maitresse" value="<?php echo $nommait; ?>" maxlength="20" size="20"/>
    <br><br>
    <input type="text" name="premait" placeholder="Prénom maitresse" value="<?php echo $premait; ?>" maxlength="20" size="20"/>
    <br><br>
    Nom matiére <select name="nommatiere" value="<?php echo $nommatiere; ?>">
        <option value ="1" > francais</option>
        <option value ="2" > math</option>
        <option value ="3" >arabic </option>
        <option value ="4" >svt </option>
        <option value ="5" >informatique </option>
       <option value ="6" >anglais</option>
        <option value ="7" > sport</option>
        <option value ="8" >musique </option>
        <option value ="9" >dessin </option>
        
    </select>
        <br><br>
                    <button type="submit"  name="mettreajour" class="b">mettre a jour</button></div></form>
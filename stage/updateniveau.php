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

    <form method="POST" onsubmit="return Verifier();" action="pagec.php">
<div id ="a"><h1>mettre a jour</h1>
<?php
include_once 'pagec.php'; ?>
<input type="text" size="20" placeholder="niveau de la classe  " name ="nivc" value="<?php echo $nivc ; ?>" maxlength="50"/><br><br>
<input type="hidden" name="id" placeholder="Code maitresse" value="<?php echo $id; ?>" size="20"/>
    <br><br>
                <br><br><input type="number" size="20" placeholder="Prix ​​mensuel en dinar" value="<?php echo $prixm ; ?>" name = "prixm" maxlength="50"/>
                 <br><br><input type="number" size="20" placeholder="Prix ​​d'inscription en dinar" value="<?php echo $fraisinsc ; ?>" name = "fraisinsc" maxlength="50"/> <br><br>
                <button type="submit" name ="mettreajour" class="b">mettre a jour</button></div></form>
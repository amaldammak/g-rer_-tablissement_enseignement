<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            ch = document.getElementById('t1').value;
            if(!(a[0].value!="" && a[1].value!="" && a[2].value!="")){
               alert("il y a des colones vide ");
                return false;}  else{
if (isNaN(ch.charAt(0) )==true || ch.charAt(1) != "é" || ch.charAt(2) != "m"  || ch.charAt(3) != "e") {
 alert(" Le premier caractère de la niveau doit être un chiffre suivent la chaine /'éme/' ");
 return false
}}
 return true; }


                
    </script>
</head>

<body>

    <form method="POST" onsubmit="return Verifier();" action="pagec.php">
<div id ="a"><h1>niveau</h1>
<input type="text" size="20" placeholder="niveau de la classe  " id="t1" name ="nivc" maxlength="50"/>
                <br><br><input type="number" size="20" placeholder="Prix ​​mensuel en dinar" name = "prixm" maxlength="50"/>
                 <br><br><input type="number" size="20" placeholder="Prix ​​d'inscription en dinar"  name = "fraisinsc" maxlength="50"/> <br><br>
                <button type="submit" name ="submit" class="b">envoyer</button></div></form>
                
                <a href= "classe.php" class="b" >  classe </a>
                <a href= "class_maitresse.php" class="b">  classmaitresse </a>
                <a href= "inscriptioneleve.php" class="b" > inscription éléve </a><a href= "maitresse.php" class="b">  maitresse </a></body></html>
                
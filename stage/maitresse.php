<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            ch = document.getElementById('t2').value;
            ch1 = document.getElementById('t3').value;
            if(!(a[0].value!="" && a[1].value!="" && a[2].value!="")){
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
 
return true;  }


                
    </script>
    
</head>

<body>
    <form  method="POST" onsubmit="return Verifier();" action="pagem.php">
        <div id ="a"><h1>maitresse</h1>
    <input type="number" name="codmait" placeholder="Code maitresse" size="20"/>
    <br><br>
    <input type="text" name="nommait" placeholder="Nom maitresse" id="t2" maxlength="20" size="20"/>
    <br><br>
    <input type="text" name="premait" placeholder="Prénom maitresse" id="t3" maxlength="20" size="20"/>
    <br><br>
    Nom matiére <select name="nommatiere">
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
                    <button type="submit"  name="submit"  class="b">envoyer</button></div></form>
                    <a href= "classe.php"class="b" >  classe </a>
                <a href= "niveau.php" class="b">  niveau </a>
                <a href= "inscriptioneleve.php" class="b" > inscription éléve </a>
                <a href= "travail-jour-heurs.php" class="b"> nombre d' heures de travail maitresse </a></body></html>
        
        
                

        
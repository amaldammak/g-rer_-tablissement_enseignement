<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <script>
        function Verifier(){
            var a=document.querySelectorAll("input");
            ch = document.getElementById('t2').value;
            
            if(!(a[0].value!="" )){
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
 }
 }}}
</script>
</head>
<body>
    <form  method="POST"  onsubmit="return Verifier();" action="pagemat.php">
        <div id ="a"><h1>matiére</h1>
    <input type="text" name="nommatiére" placeholder="Nom matiére" id ="t2" size="20"/>
    <br><br>
    <button type="submit"  name="submit"  class="b">envoyer</button></div></form></body></html>
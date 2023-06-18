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
<div id ="a"><h1>mettre a jour</h1>
<input type="hidden" name="id" placeholder="Code maitresse" value="<?php echo $id; ?>" size="20"/>
<?php
include_once 'pageclsmai.php'; ?>
        Code maitresse<select name = "cmait" value="">
        <?php
 include_once 'configDB.php';
$res = mysqli_query($comm,"select* from maitresse;");
while($fetch = mysqli_fetch_array($res)){
    $id_maitresse = $fetch['id_maitresse'];
    $cod = $fetch['Codemaitresse'];

?><option selected ><?php echo $cmait ; ?></option>
    <?php }?></select> <br><br> <label> Nom de la classe </label> <select name="nclass" value="">
    <?php
 include_once 'configDB.php';
$res = mysqli_query($comm,"select* from classe ;");
while($fetch = mysqli_fetch_array($res)){
    $id_classe = $fetch['id_classe'];
    $nom = $fetch['nomclasse'];
    ?>
<option selected ><?php echo $nclass; ?></option>
<?php }?>
</select><br><br>
                <button type="submit" name ="mettreajour" class="b">mettre a jour</button></div></form>
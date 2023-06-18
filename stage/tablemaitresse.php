<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
<div class="d"> <a href= "maitresse.php" class="q">  ajouter </a></div>
    <form  method="GET" action="pagem.php"><table border="1px">
        <thead><tr>
            <th>Code maitresse</th>
            <th>Nom maitresse</th>
            <th>Prénom maitresse</th>
            <th>Matiére</th>
            <th colspan="2" style="text-align: center;">Action</th>
           
        </tr></thead>
        <tbody><?php
 include_once 'configDB.php';
 $res = mysqli_query($comm,"select * from maitresse;" ) ;
 while($fetch = mysqli_fetch_array($res)){

 
 ?>
 
        <tr>
        <td><?php echo $fetch['Codemaitresse']; ?></td>
        <td><?php echo $fetch['Nommaitresse']; ?></td>
        <td><?php echo $fetch['Prenommaitresse']; ?></td>
        <td><?php echo $fetch['matiere']; ?></td>
        <td><a href= "updatemaitresse.php?edit=<?php echo $fetch['id_maitresse']; ?>" class="b">  modifier</a></td>
       <td> 
           <a onclick="if(confirm('Etes vous sur de vouloir supprimer ?')) document.location='pagem.php?delete=oui&idmatr=<?php echo $fetch['id_maitresse']; ?>'"  class="b">  supprimer </a></td>
        </tr>

       <?php } ?> </tbody>
    </table></form>
  </body></html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
<div class="d"> <a href= "niveau.php" class="q">  ajouter </a></div>
    <form  method="GET" action="pagem.php"><table border="1px">
        <thead><tr>
            <th>niveau</th>
            <th> prix mensuel</th>
            <th> frais d'inscription </th>
            <th colspan="2" style="text-align: center;">Action</th>
           
           
        </tr></thead>
        <tbody><?php
 include_once 'configDB.php';
 $res = mysqli_query($comm,"select * from niveau ;" ) ;
 while($fetch = mysqli_fetch_array($res)){


    
 
 ?>
 
        <tr>
        <td><?php echo  $fetch['niveau']; ?></td>
        <td><?php echo $fetch['prix_mensuel']; ?></td>
        <td><?php echo $fetch['frais_inscri']; ?></td>
       
       <td><a href= "updateniveau.php?edit=<?php echo $fetch['id_niveau']; ?>" class="b">  modifier</a></td>
       <td> 
           <a onclick="if(confirm('Etes vous sur de vouloir supprimer ?')) document.location='pagec.php?delete=oui&idmatr=<?php echo $fetch['id_niveau']; ?>'"  class="b">  supprimer </a></td>
        </tr>

       <?php } ?> </tbody>
    </table>
    </body></html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
<div class="d"> <a href= "travail-jour-heurs.php" class="q">  ajouter </a></div>
    <form  method="GET" action="pagem.php"><div class = "m"><table border="1px">
        <thead><tr>
            <th>Code maitresse</th>
            <th> jour de la semaine</th>
            <th> Nombre d'heures de travail (j) </th>
            <th colspan="2" style="text-align: center;">Action</th>
           
           
        </tr></thead>
        <tbody><?php
 include_once 'configDB.php';
 $res = mysqli_query($comm,"select * from nb_heur_travail ;" ) ;
 while($fetch = mysqli_fetch_array($res)){
    $nv = mysqli_query($comm,"select * from maitresse where id_maitresse=".$fetch['id_maitresse'] ) ;
    $fetchnv = mysqli_fetch_array($nv);
 
 ?>
 
        <tr>
        <td><?php echo $fetchnv['Codemaitresse']; ?></td>
        <td><?php echo $fetch['jourdelasemaine']; ?></td>
        <td><?php echo $fetch['nb_heurs_jour']; ?></td>
       
       <td><a href= "updatenbheure.php?edit=<?php echo $fetch['id_nbheur']; ?>" class="b">  modifier</a></td>
       <td> 
           <a onclick="if(confirm('Etes vous sur de vouloir supprimer ?')) document.location='pagenbht.php?delete=oui&idmatr=<?php echo $fetch['id_nbheur']; ?>'"  class="b">  supprimer </a></td>
        </tr>

       <?php } ?> </tbody>
    </table></div>
    </body></html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
<div class="d"> <a href= "classe.php" class="q">  ajouter </a></div>
    <form  method="GET" action="pageclsmai.php"><table border="1px">
        <thead><tr>
            <th>Nom de la classe</th>
            <th>Code maitresse </th>
            <th colspan="2" style="text-align: center;">Action</th>
           
           
        </tr></thead>
        <tbody><?php
 include_once 'configDB.php';
 $res = mysqli_query($comm,"select * from class_maitresse ;" ) ;
 while($fetch = mysqli_fetch_array($res)){

    $nv = mysqli_query($comm,"select * from classe where id_classe=".$fetch['id_classe'] ) ;
    $fetchnv = mysqli_fetch_array($nv);
    $nvs = mysqli_query($comm,"select * from maitresse where id_maitresse=".$fetch['id_maitresse'] ) ;
    $fetchnvs = mysqli_fetch_array($nvs);
   
 ?>
 
        <tr>
        <td><?php echo $fetchnv['nomclasse']; ?></td>
        <td><?php echo $fetchnvs['Codemaitresse']; ?></td>
        <td><a href= "updateclass_maitresse.php?edit=<?php echo $fetch['id_clsmat']; ?>" class="b">  modifier</a></td>
       <td> 
           <a onclick="if(confirm('Etes vous sur de vouloir supprimer ?')) document.location='pageclsmai.php?delete=oui&idmatr=<?php echo $fetch['id_clsmat']; ?>'"  class="b">  supprimer </a></td>
        </tr>


       <?php } ?> </tbody>
    </table>
   
    
    
</body></html>
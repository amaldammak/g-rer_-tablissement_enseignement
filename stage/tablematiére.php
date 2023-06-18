<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
<div class="d"> <a href= "matiére.php" class="q">  ajouter </a></div>
    <form  method="GET" action=""><table border="1px">
        <thead><tr>
            <th>Nom de la matiére </th>
            
            <th colspan="2" style="text-align: center;">Action</th>
           
           
        </tr></thead>
        <tbody><?php
 include_once 'configDB.php';
 $res = mysqli_query($comm,"select * from matiére;" ) ;
 while($fetch = mysqli_fetch_array($res)){

    
   
 ?>
 
        <tr>
        <td><?php echo $fetch['nom matiére']; ?></td>
        
        <td><a href= "updatematiére.php?edit=<?php echo $fetch['id_matier']; ?>" class="b">  modifier</a></td>
       <td> 
           <a onclick="if(confirm('Etes vous sur de vouloir supprimer ?')) document.location='pagemat.php?delete=oui&idmatr=<?php echo $fetch['id_matier']; ?>'"  class="b">  supprimer </a></td>
        </tr>


       <?php } ?> </tbody>
    </table>
   
    
    
</body></html>
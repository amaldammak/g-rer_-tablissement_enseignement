<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
<?php include_once 'header.php' ;?>
<div class="d"> <a href= "classe.php" class="q">  ajouter </a></div>
    <form  method="GET" action="page1.php"><table border="1px">
        <thead><tr>
            <th>Nom de la classe</th>
            <th>niveau</th>
            <th>Nombre d' éléve </th>
            <th colspan="2" style="text-align: center;">Action</th>
           
           
        </tr></thead>
        <tbody><?php
 include_once 'configDB.php';
 $res = mysqli_query($comm,"select * from classe;" ) ;
 while($fetch = mysqli_fetch_array($res)){

    $nv = mysqli_query($comm,"select * from niveau where id_niveau=".$fetch['id_niveau'] ) ;
    $fetchnv = mysqli_fetch_array($nv);
   
 ?>
 
        <tr>
        <td><?php echo $fetch['nomclasse']; ?></td>
        <td><?php echo $fetchnv['niveau']; ?></td>
        <td><?php echo $fetch['nombreE']; ?></td>
        <td><a href= "updateclass.php?edit=<?php echo $fetch['id_classe']; ?>" class="b">  modifier</a></td>
       <td> 
           <a onclick="if(confirm('Etes vous sur de vouloir supprimer ?')) document.location='page1.php?delete=oui&idmatr=<?php echo $fetch['id_classe']; ?>'"  class="b">  supprimer </a></td>
        </tr>


       <?php } ?> </tbody>
    </table>
   
    
    
</body></html>
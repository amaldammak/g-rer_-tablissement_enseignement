<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
    
<?php include_once 'header.php' ;?>
<div class="d"> <a href= "inscriptioneleve.php" class="q">  ajouter </a></div>
    <form  method="GET" action="pagem.php"><table border="1px">
        <thead><tr>
            <th>Matricule</th>
            <th>Nom éléve</th>
            <th>Prénom éléve </th>
            <th>Nom classe</th>
            <th>Date naissance</th>
            <th>Adresse postale</th>
            <th>Année scolaire</th>
            <th colspan="2" style="text-align: center;">Action</th>
           
        </tr></thead>
        <tbody><?php
 include_once 'configDB.php';
 $res = mysqli_query($comm,"select * from eleve;" ) ;
 while($fetch = mysqli_fetch_array($res)){
$a = mysqli_query($comm,"select * from classe where id_classe =". $fetch['id_classe'] );
$b = mysqli_fetch_array($a);
 
 ?>
 
        <tr>
        <td><?php echo $fetch['matricule']; ?></td>
        <td><?php echo $fetch['noméléve']; ?></td>
        <td><?php echo $fetch['prénoméléve']; ?></td>
        <td><?php echo $b['nomclasse']; ?></td>
        <td><?php echo $fetch['datenaissance']; ?></td>
        <td><?php echo $fetch['adressepostale']; ?></td>
        <td><?php echo $fetch['anneescolaire']; ?></td>
        <td><a href= "updateeleve.php?edit=<?php echo $fetch['id_éléve']; ?>" class="b">  modifier</a></td>
       <td> 
           <a onclick="if(confirm('Etes vous sur de vouloir supprimer ?')) document.location='page.php?delete=oui&idmatr=<?php echo $fetch['id_éléve']; ?>'"  class="b">  supprimer </a></td>
        </tr>

       <?php } ?> </tbody>
    </table>
    </body></html>
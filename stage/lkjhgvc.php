<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>menu</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header><?php include_once 'header.php' ;?>
 </header>

 <img src="img.jpg"  >
 <nav class="na">

    <a href="#" class="menu">MENU</a>
    <div class="nav-link">
           <ul>
               <li><a href="tableeleve.php" class="b">  <img src="e.jpg">   inscription éléve</a></li>
               <li><a href="tableclass.php" class="b"> <img src="classs.jpg"> classe</a></li>
               <li><a href="tablemaitresse.php" class="b">  <img src="maitresse.png">maitresse</a></li>
               <li><a href="tableniveau.php" class="b">  <img src="images.png">niveau</a></li>
               <li><a href="tablenbheure.php" class="b">  <img src="heure.gif">nombre d' heures de travaile</a></li>
               
           </ul>
           </div>
       <img src="m.png" class="menu-ham">
      
   </nav>
   <script>
        const menuham = document.querySelector(".menu-ham")
        const navLink = document.querySelector(".nav-link")
 
        menuham.addEventListener('click',()=>{
        navLink.classList.toggle('mobile-menu')
        })
</script>
   
   
</body>

</html>
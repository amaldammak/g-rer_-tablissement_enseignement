<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #ff0000;
}
/* {navbar a }yimchi 7asb inti win (telifon pc tablette ) ma3neha yikbir ow yis4ir 7asb apparelle */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>
 
<div class="navbar">
  <a href="tableeleve.php?e=1" <?php if(@$_GET['e']==1) {  ?> class="active" <?php }  ?> >  <img src="e.jpg" height="15px" >   inscription éléve</a>
  <a href="tableclass.php?e=2" <?php if(@$_GET['e']==2) {  ?> class="active" <?php }  ?>> <img src="classs.jpg" height="15px" > classe</a>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
</div>

</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>menu</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body><form method="POST" onsubmit="return Verifier();" action="pageL.php"><div id ="a"><?php
include_once 'pageL.php'; ?> 
    <h1>login</h1><br><br><?php echo $_GET['error'] ;?>
    <input type="text" name="login" placeholder="username" size="50"/>
    <br><br>
    <input type="password" name="password" placeholder="password" size="50"/>
    <br><br><br>
    <button type="submit"  name="submit"  class="b">connection</button></div></form>

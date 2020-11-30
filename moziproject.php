<?php
require_once "config.php";

$strTable="";

$sql="select * from filmek order by cim";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $strTable.="<tr><td>{$row['id']}</td><td>{$row['cim']}</td><td>{$row['rendezo']}</td><td>{$row['gyarto']}</td><td>{$row['ev']}</td><td>{$row['hossz']}</td></tr>";
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="mozics.css">
  
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>  
    <title>Moziproject</title>
</head>
<body>
    
        <h1 class="d-none d-md-block">Mozi</h1>

      
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="moziproject.php">Műsor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="regisztr.html">Regisztráció</a>
          </li>    
        </ul>
      </nav>
    <style>
    th{
        position:sticky;
        top:0;  
    }
</style>
<div>
    <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
</div>
<div class="table" style="height:500px;overflow:scroll;">
    
    <table class="center">
        <thead class="thead-dark">
            <th>Terem</th>
            <th>Cím</th>
            <th>Rendező</th>
            <th>Gyártó</th>
            <th>Év</th>
            <th>Hossz(p)</th>
            
        </thead>
        <tbody>
            <?=$strTable?>
        </tbody>
    </table>

</div>  
</body>
</html>
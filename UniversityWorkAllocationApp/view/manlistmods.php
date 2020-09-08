<?php 
require_once "../controller/admin.php";?>
<!doctype html>
<html>
  <head>
  <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Work Allocation Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../view/main.css" />
  </head>
  <body>
  <!-- <div class= "home"><a href="../view/index.php"><h1>Home</h1></div></a>
  <div class= "editmod"><a href="../view/editmod.php"><h1>Edit</h1></div></a> -->
  <ul>
  <li><a href="../view/managerIndex.php">Home</a></li>
</ul>
<br>
  <form method="post" action="../view/manlistmods.php">
     Filter results by Module ID:
     <input name="modSearch"/>
    <input type="submit" value="Search"/>
    <form action="../view/manlistmods.php">
    <input type="submit" value="Clear">
    </form>
    </form>
    <table>
      <thead>
        <tr>
          <th>Module ID</th>
          <th>Module Name</th>
          <th>Level</th>
          <th>Number Of Students</th>
          <th>Semester</th>
          <th>Module Running</th>          
        </tr>
      </thead>
      <tbody>
      <?php foreach($moduleResults as $module): ?>
        <tr>
          <td><?=$module->MODULE_ID?></td>
          <td><?=$module->MODULE_NAME?></td>
          <td><?=$module->LEVEL?></td>
          <td><?=$module->NUMBER_OF_STUDENTS?></td>
          <td><?=$module->SEMESTER?></td>
          <td><?=$module->MODULE_RUNNING?></td>        
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
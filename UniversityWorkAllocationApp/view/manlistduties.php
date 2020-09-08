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
  <ul>
  <li><a href="../view/managerIndex.php">Home</a></li>
</ul>
<br>
<table>
     <thead><tr>
     <th>Duty ID</th>
     <th>Name</th>
     <th>Number</th>
    
     </tr></thead>
     <tbody>
     <!-- Foreign key - User -->
     <?php foreach ($dutyResults as $duty): ?>
      <td><?= $duty->ADMIN_DUTY_ID?></td>
     <td><?= $duty->NAME?></td>
     <td><?= $duty->NUMBER?></td>
     </tr>
    <?php endforeach ?>
     </tbody>
  </table>
  <br>
    <form method="post" action="../view/manlistduties.php">
     Filter results by Name:
     <input name="adSearch"/>
    <input type="submit" value="Search"/>
    <form action="../view/manlistduties.php">
    <input type="submit" value="Clear">
    </form>
    </form>
    <br>
  </body>
  </html>
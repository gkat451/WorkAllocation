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
  </head>
  <body>
  <ul>
  <li><a href="../view/staffindex.php">Home</a></li>
</ul>
<br>
    <table>
      <thead>
        <tr>
          <th>Admin Duty ID</th>
          <th>Name</th>
          <th>Number</th>        
        </tr>
      </thead>
      <tbody>
      <?php foreach($dutyResults as $duty): ?>
        <tr>
          <td><?=$duty->ADMIN_DUTY_ID?></td>
          <td><?=$duty->NAME?></td>
          <td><?=$duty->NUMBER?></td>
          <td>     
        </tr>
        <?php endforeach ?>
      </tbody>
  </table>
     <br>
  </body>
</html>
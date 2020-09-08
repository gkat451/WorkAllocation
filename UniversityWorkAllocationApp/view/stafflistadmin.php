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
 <!-- <div class= "home"><a href="../view/index.php"><h1>Home</h1></div></a> -->
 <ul>
  <li><a href="../view/staffindex.php">Home</a></li>
</ul>
<br>
  <form method="post" action="../view/stafflistadmin.php">
     Filter results by Name:
     <input name="amSearch"/>
    <input type="submit" value="Search"/>
    <form action="../view/stafflistadmin.php">
    <input type="submit" value="Clear">
    </form>
    </form>
    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Department ID</th>         
        </tr>
      </thead>
      <tbody>
      <?php foreach($adminResults as $admin): ?>
        <tr>
          <td><?=$admin->FIRST_NAME?></td>
          <td><?=$admin->LAST_NAME?></td>
          <td><?=$admin->EMAIL?></td>
          <td><?=$admin->PHONE?></td>
          <td><?=$admin->DEPARTMENT_ID_FK?></td>        
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
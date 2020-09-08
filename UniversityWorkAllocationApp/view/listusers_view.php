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
  <!-- <div class= "home"><a href="../view/index.php"><h1>Home</h1></div></a>
  <div class= "editmod"><a href="../view/editmod.php"><h1>Edit</h1></div></a> -->
  <ul>
  <li><a href="../view/index.php">Home</a></li>
  <li><a href="../view/editstaff.php">Edit Staff</a></li>
</ul>
<br>
  <form method="post" action="../view/listusers_view.php">
     Filter results by Last Name:
     <input name="uSearch"/>
    <input type="submit" value="Search"/>
    <form action="../view/listusers_view.php">
    <input type="submit" value="Clear">
    </form>
    </form>
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Department ID</th>         
        </tr>
      </thead>
      <tbody>
      <?php foreach($userResults as $user): ?>
        <tr>
          <td><?=$user->USER_ID?></td>
          <td><?=$user->FIRST_NAME?></td>
          <td><?=$user->LAST_NAME?></td>
          <td><?=$user->EMAIL?></td>
          <td><?=$user->PHONE?></td>
          <td><?=$user->DEPARTMENT_ID_FK?></td>        
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>

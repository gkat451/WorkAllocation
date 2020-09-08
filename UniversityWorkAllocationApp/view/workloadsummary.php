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
</ul>
<br>
  <form method="post" action="../view/workloadsummary.php">
     Filter results by Last Name:
     <input name="uSearch"/>
    <input type="submit" value="Search"/>
    <form action="../view/workloadsummary.php">
    <input type="submit" value="Clear">
    </form>
    </form>
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Department ID</th>
          <th>Teaching</th>
          <th>Admin</th>
          <th>Research</th>
          <th>Other</th>
          <th>Total</th>

        </tr>
      </thead>
      <tbody>
      <?php foreach($userResults as $user): ?>
        <tr>
          <td><?=$user->USER_ID?></td>
          <td><?=$user->FIRST_NAME?></td>
          <td><?=$user->LAST_NAME?></td>
          <td><?=$user->DEPARTMENT_ID_FK?></td>
          <td>774</td>
          <td>20</td>
          <td>80</td>
          <td>250</td>
          <td>1250</td>       
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>

<?php 
require_once "../controller/admin.php";
//require_once "../controller/viewuser.php";?>
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
  <li><a href="../view/managerIndex.php">Home</a></li>
</ul>
<br>
  <!-- <div class= "home"><a href="../view/index.php"><h1>Home</h1></div></a>
  <a href="../view/addstaff.php"><h1>Add Staff</h1></a>
  <div class= "editmod"><a href="../view/editstaff.php"><h1>Edit</h1></div></a> -->
  <br>
  <form method="post" action="../view/manliststaff.php">
     Filter results by Last Name:
     <input name="uSearch"/>
    <input type="submit" value="Search"/>
    <form action="../view/manliststaff.php">
    <input type="submit" value="Clear">
    </form>
    </form>
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th> 
          <th>Phone</th> 
          <th>Email</th> 
          <th>User Type</th>
          <th>Department</th>          
        </tr>
      </thead>
      <tbody>
      <?php foreach($userResults as $user): ?>
        <tr>
          <td><?=$user->USER_ID?></td>
          <td><?=$user->FIRST_NAME?></td>
          <td><?=$user->LAST_NAME?></td>
          <td><?=$user->USERNAME?></td>
          <td><?=$user->PHONE?></td>
          <td><?=$user->EMAIL?></td>
          <td><?=$user->USER_TYPE_ID_FK?></td>
          <td><?=$user->DEPARTMENT_ID_FK?></td> 
        </tr>
        <?php endforeach ?>
      </tbody>
  </body>
</html>
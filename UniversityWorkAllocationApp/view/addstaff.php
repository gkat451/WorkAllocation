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
  <li><a href="../view/index.php">Home</a></li>
</ul>
<br>
  <br>
  <form method="post" action="../controller/addUser.php">
            <input type="number" placeholder="User ID" maxlength="10" name="uid"/>
            <input type="text" placeholder="First Name" name="fname"/>
            <input type="text" placeholder="Last Name" name="lname"/>
            <input type="text" placeholder="Username" maxlength="30" name="uname"/>
            <input type="password" placeholder="Password" maxlength="30" name="password"/>
            <input type="number" placeholder="Phone Number" maxlength="10" name="phone"/>
            <input type="text" placeholder="Email" name="email"/>
            <input type="number" placeholder="User Type" maxlength="10" name="utype"/>
            <input type="number" placeholder="Department ID" maxlength="10" name="did"/>
            <input type="submit" value="Add Staff Member"/>
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
          <td>
            <form method="post" action="../controller/removeUser.php">
             <input type="hidden" value="<?=$user->LAST_NAME?>" name="input"/>
             <input type="submit" value="Delete Staff Member?" onclick="return confirm('Are you sure?')"/>
             </form>
             </td>      
        </tr>
        <?php endforeach ?>
      </tbody>
  </table>
     <br>
   
  </body>
</html>
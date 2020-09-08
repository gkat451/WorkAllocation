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
  <div id ="form">
  <form method="post" action="../controller/editstaff.php">
            <input type="number" placeholder="User ID" maxlength="10" name="uid"/>
            <input type="text" placeholder="First Name" name="fname"/>
            <input type="text" placeholder="Last Name" name="lname"/>
            <input type="text" placeholder="Username" maxlength="30" name="uname"/>
            <input type="password" placeholder="Password" maxlength="30" name="password"/>
            <input type="number" placeholder="Phone Number" maxlength="10" name="phone"/>
            <input type="text" placeholder="Email" name="email"/>
            <input type="number" placeholder="User Type" maxlength="10" name="utype"/>
            <input type="number" placeholder="Department ID" maxlength="10" name="did"/>
            <input type="submit" value="Edit Staff Member"/>
        </form>
        </div>
  </body>
</html>
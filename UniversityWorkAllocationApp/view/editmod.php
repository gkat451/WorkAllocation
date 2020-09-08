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
    <form method="post" action="../controller/editmodule.php">
            <input type="number" placeholder="Module ID" maxlength="5" name="MOD_ID"/>
            <input type="text" placeholder="Name" name="NAME"/>
            <input type="number" placeholder="Level" name="LEVEL"/>
            <input type="number" placeholder="Semester" name="SEMESTER"/>
            <input type="number" placeholder="Number Of Students" name="NUM"/>
            <input type="text" placeholder="Module Running?" name="RUN"/>
            <input type="text" placeholder="Distance Learning" name="DIST"/>
            <input type="text" placeholder="Department ID" maxlength="5" name="DEPT"/>
            <textarea name="INFO" rows="10" cols="30">Enter Module Info.</textarea> 
            <input type="submit" value="Edit Module"/>
        </form>	
</div>
  </body>
</html>
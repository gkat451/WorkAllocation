<?php require_once "../controller/log.php";
require_once "../controller/staffindexcheck.php";?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Work Allocation Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../view/main.css" />
    </head>
    <body>
    <div class="head"><h1>Work Allocation System</h1></div>
      <div class ="container">
        <div class = "box logout">
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="nested"><a href="../controller/logout.php"><h1>Logout</h1></div></a>
        </div>
        <div class = "listusers">
          <div class= "title"><h1>Work Allocation</h1></div>
          <div class="nested"><a href="../view/stafflistview.php"><h1>View My Work Allocation</h1></div></a>
          <div class="nested"><a href="../view/staffliststaff.php"><h1>List All Staff</h1></div></a>
          <div class="nested"><a href="../view/stafflistadmin.php"><h1>List All Administrators</h1></div></a> 
        </div>
        <div class ="modules">
          <div class= "title"><h1>Modules</h1></div>
          <div class="nested"><a href="../view/stafflistmods.php"><h1>List All Modules</h1></div></a>
          <div class="nested"><a href="../view/staffothermods.php"><h1>List All Other Modules</h1></div></a>
        </div>
        <div class ="adminduties">
          <div class= "title"><h1>Duties</h1></div>
          <div class="nested"><a href="../view/staffmyduties.php"><h1>List My Duties</h1></div></a>
          <div class="nested"><a href="../view/staffallduties.php"><h1>List All Duties</h1></div></a>
        </div>
        <div class = "researchduties">
          <div class= "title"><h1>Research Allocation</h1></div>
          <div class="nested"><a href="../view/staffresduties.php"><h1> List My Research Duties</h1></div></a>
          <div class="nested"><a href="../view/staffallres.php"><h1> List All Research Duties</h1></div></a>
        </div>
        <div class ="report">
          <div class= "title"><h1>Report</h1></div>
          <div class="nested"><a href="../view/workloadsummary.php"><h1>Workload Summary</h1></div></a>
          <div class="nested"><a href="../view/teams.php"><h1>Teams</h1></div></a>
        </div>
      </div>
  </body>
</html>
<?php require_once "../controller/log.php";
require_once "../controller/indexcheck.php";?>
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
          <div class="nested"><a href="../view/viewuser.php"><h1>View My Work Allocation</h1></div></a>
          <div class="nested"><a href="../view/liststaff.php"><h1>List All Staff</h1></div></a>
          <div class="nested"><a href="../view/listadmin.php"><h1>List All Administrators</h1></div></a> 
        </div>
        <div class ="modules">
          <div class= "title"><h1>Modules</h1></div>
          <div class="nested"><a href="../view/listmodules_view.php"><h1>List All Modules</h1></div></a>
          <div class="nested"><a href="../view/addmodule.php"><h1>Add Modules</h1></div></a>
          <div class="nested"><a href="../view/othermodules.php"><h1>List All Other Modules</h1></div></a>
        </div>
        <div class ="adminduties">
          <div class= "title"><h1>Admin Duties</h1></div>
          <div class="nested"><a href="../view/listmyduties.php"><h1>List My Duties</h1></div></a>
          <div class="nested"><a href="../view/addduty.php"><h1>Add Duties</h1></div></a>
          <div class="nested"><a href="../view/listallduties.php"><h1>List All Duties</h1></div></a>
        </div>
        <div class = "researchduties">
          <div class= "title"><h1>Research Duties</h1></div>
          <div class="nested"><a href="../view/researchduties.php"><h1> List My Research Duties</h1></div></a>
          <div class="nested"><a href="../view/listallresearch.php"><h1> List All Research Duties</h1></div></a>
          <div class="nested"><a href="../view/addresearch.php"><h1> Add Research Duties</h1></div></a>
        </div>
        <div class ="report">
          <div class= "title"><h1>Report</h1></div>
          <div class="nested"><a href="../view/workloadsummary.php"><h1>Workload Summary</h1></div></a>
          <div class="nested"><a href="../view/teams.php"><h1>Teams</h1></div></a>
        </div>
      </div>
  </body>
</html>
    
      
    
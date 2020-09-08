<?php
require_once "../controller/admin.php";
require_once "../controller/viewuser.php";?>
<!doctype html>
<html>
  <head>
  <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Work Allocation Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../view/viewuser.css" />
    </head>
  </head>
  <body>
  <ul>
  <li><a href="../view/index.php">Home</a></li>
</ul>
<header>
  <h1>My Work Allocation</h1>
</header>

<section>
  <h2>Modules</h2>
  <table>
     <thead><tr>
     <th>Module</th>
     <th>Semester</th>
     <th>Leading</th>
     <th>Teaching</th>
     <th>Assessing</th>
     <th>Workshops</th>
     <th>Hours</th>
    
     </tr></thead>
     <tbody>
     <td>Introduction Maths</td>
     <td>1</td>
     <td>0</td>
     <td>44</td>
     <td>144</td>
     <td>77</td>
     <td>265</td>
     </tbody>
  </table>
</section>

<section>
  <h2>Admin Duties</h2>
  <table>
     <thead><tr>
     <th>Duty ID</th>
     <th>Name</th>
     <th>Hours</th>
    
     </tr></thead>
     <tbody>
     <!-- Foreign key - User -->
     <?php foreach ($dutyResults as $duty): ?>
      <td><?= $duty->ADMIN_DUTY_ID?></td>
     <td><?= $duty->NAME?></td>
     <td>40</td>
     </tr>
    <?php endforeach ?>
     </tbody>
  </table>
</section>

<section>
  <h2>Extra Duties</h2>
  <ol>
    <li>Industrial Visits</li>
    <li>Hours</li>
  </ol>
</section>

<section>
  <h2>Research Duties</h2>
  <ol>
    <li>Research</li>
    <li>Testing</li>
  </ol>
</section>

<section>
  <h2>Report</h2>
  <ol>
    <li>Total Hours</li>
    <li>1200</li>
  </ol>
</section>
  </body>
</html>
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
  <body>
  <ul>
  <li><a href="../view/index.php">Home</a></li>
</ul>
<br>
<table>
     <thead><tr>
     <th>ID</th>
     <th>Name</th>
    
     </tr></thead>
     <tbody>
     <!-- Foreign key - User -->
     <?php foreach ($researchResults as $research): ?>
     <tr>
     <td><?= $research->RESEARCH_DUTIES_ID?></td>
     <td><?= $research->NAME?></td>
     <td>
     <form method="post" action="../controller/removeresearch.php">
             <input type="hidden" value="<?=$research->NAME?>" name="input"/>
             <input type="submit" value="Delete Research Duty?" onclick="return confirm('Are you sure?')"/>
             </form>
             </td> 
     </tr>
    <?php endforeach ?>
     </tbody>
  </table>
  <br>
    <form method="post" action="../view/listallresearch.php">
     Filter results by Name:
     <input name="reSearch"/>
    <input type="submit" value="Search"/>
    <form action="../view/listallresearch.php">
    <input type="submit" value="Clear">
    </form>
    </form>
    <br>
    <form method="post" action="../controller/updateresearch.php">
      <input type="number" placeholder="Research Duty ID" name="researchid"/>
     <input type="text" placeholder="Name" name="name"/>
     <input type="submit" value="Edit Research Duty"/>
    </form>
  </body>
  </html>
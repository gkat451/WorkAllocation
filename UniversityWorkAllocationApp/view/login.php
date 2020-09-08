<?php require_once "../controller/log.php";
require_once "../controller/login.php";
require_once "../controller/stafflogin.php";
require_once "../controller/managerlogin.php";
$returnVal = "";?>
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
    <div class="title"><h1>Work Allocation System</h1></div>
    <div class="padding">
                <div class="content">
                    <h2>Please enter login credentials:</h2>
                    <form method="post" action="login.php">
                        <input name="loginName" placeholder="Username" autofocus required/><br>
                        <input name="loginPass" placeholder="Password" type="password" required/><br><br>
                        <button name="login" type="submit" required>Login</button>
                    </form>
                    <?php if(isset($_SESSION["adminvalidation"]) && !$_SESSION["adminvalidation"]): ?>
                        <br><?=$_SESSION["returnVal"]?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <h2>Staff = staff, work</h2>
        <h2>Admin = admin, work</h2>
        <h2>Manager = manager, work</h2>
        </body>
</html>
<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="employee.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>EMPLOYEE |BTPN SYARIAH</title>

</head>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));?>
<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li class="logo"><img src="img/logo.png"></li>
                <li><a href="<?php echo "?p=home "; ?>"><i></i>home</a></li>
                
                <li><a href="<?php echo "?p=about "; ?>"><i></i>about</a></li>
                <li><?php echo $_SESSION['username']; ?></li>
                

                    <li><a href="<?php echo "?p=logout"; ?>" class="logout-btn"><span>LOGOUT</span></a></li>

                    <li><a href="<?php echo "?p=login"; ?>" class="login-btn"><span>LOGIN or SIGN UP</span></a></li>
                
            </ul>
        </div>
        <?php  
	        if($_GET["p"] == "login"){
		        include "login.php";	
	        }else if($_GET["p"] == "home"){
		        include "home.php";	
	        }else if($_GET["p"] == "logout"){
		        include "logout.php";	
	        }else if($_GET["p"] == "tes"){
		        include "tes.php";	
	        }else if($_GET["p"] == "register"){
		        include "register.php";	
	        }else if($_GET["p"] == "about"){
		        include "about.php";	
	        } 
        ?>
    </div>
</body>

</html>
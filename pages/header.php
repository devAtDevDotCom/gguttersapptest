<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/51439d3a57.js" crossorigin="anonymous"></script>
    <link type="text/css" href="/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../new.style.css">
    <link rel="stylesheet" href="../css/progress.bar.css">
</head>
    <!-- ios support-->
    <link rel="apple-touch-icon" href="/icons/icon-96x96.png">
    <meta name="apple-mobile-web-app-status-bar" content="#ffffff">
    <meta name="theme-color" content="#23386F">

</head>

<!-- 1. Cust accepts est
    2. cust goes to request service form on app
    3. cust creates a username and password on app
    4. cust enters email address in app
    5. form displays cust info: name, service desired, price
    6. cust chooses week for service via button in app
    7. cust request is sent to zoho via api or zappier?
    8. progress bar is updated / increased on week of service 1 or 200 etc.
    9. need to update app database or progress bar on app if service request comes from email or phone call to office
    10. need to update zoho routes with service requests from app-->
<body class="grey lighten-4">

<div class="container">
        <div class="header-container">
                <div class="lion-logo-container">
                        <a href="#"><img class="lion-logo" src="/img/nav-logo.jpg" alt=""></a>
                </div>
                <div>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="/index.php" class="waves-effect">Home</a>
                        <a href="get-a-quote.php" class="waves-effect">Get a Quote</a>
                        <a href="request-service.php" class="waves-effect">Request Service</a>
                        <a href="communities-we-serve.php" class="waves-effect">Communites We Serve</a>
                        <a href="gutterCleanings.php" class="waves-effect">Gutter Cleaning</a>
                        <a href="gutter-guard-installation.php" class="waves-effect">Gutter Guards</a>
                        <a href="gutterRepair.php" class="waves-effect">Gutter Repairs</a>
                        <a href="meet-the-team.php" class="waves-effect">Meet The Team</a>
                        <a href="privacy-policy.php" class="waves-effect">Privacy Policy</a>
                        <a href="terms-and-conditions.php" class="waves-effect">Terms and Conditions</a>
                        <div class="divider"></div>
                        <li>
                            <a href="contact.php" class="waves-effect">
                            <i class="material-icons">mail_outline</i>Contact</a>
                        </li>
                    </div>
                
                    <?php
                        echo '<span id="open-nav-btn" style="font-size:20px;cursor:pointer" onclick="openNav()";>&#9776;</span>';
                    ?>

                    <ul class="signup-login-out-menu-container">
                        <?php
                        if(isset($_SESSION["userid"]))
                        {
                        ?>
                        <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                        <li><a href="../includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                        <?php
                        }
                        else
                        {
                        ?>
                            <li><a href="/login.signup.php">SIGN UP</a></li>
                            <li><a href="/login.signup.php" class="header-login-a">LOGIN</a></li>
                        <?php
                        }
                        ?> 
                    </ul>
                </div>         
            </div>
            <div>
            <br>
            <br>
            
        </div>
    </div>
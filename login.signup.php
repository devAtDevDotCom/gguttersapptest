<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guaranteed Gutters App</title>
  <script src="https://kit.fontawesome.com/51439d3a57.js" crossorigin="anonymous"></script>
  <!--- materialize icons, css & js -->
  <!--<link type="text/css" href="css/materialize.min.css" rel="stylesheet">-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- <link type="text/css" href="css/styles.css" rel="stylesheet">-->
  <link rel="stylesheet" href="css/login.css">
 <!-- <script type="text/javascript" src="js/materialize.min.js"></script>-->
  <link rel="manifest" href="manifest.json">
  <!--<link rel="stylesheet" href="cssPHP/styles.css">-->
  <link rel="stylesheet" href="new.style.css">
  <!-- ios support-->
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#ffffff">
  <meta name="theme-color" content="#23386F">

</head>

<body>


   <!-- <div class="login-menu-container">
        <ul class="login-menu">
          <?php
             if(isset($_SESSION["userid"]))
            {
          ?>
          <li><a href="login.signup.php">
              <?php echo $_SESSION["useruid"]; ?>
            </a></li>
         <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
          <?php
            }
            else
            {
            ?>
          <li><a href="#">Sign Up</a></li>
          <li><a href="#" class="header-login-a">LOGIN</a></li>
          <?php
            }
            ?>
        </ul>-->
        
          <div class="wrapper">
            <div class="index-login-signup">
            <div class="index-login-login">
              <h4>LOGIN HERE</h4>
              <p></p>
              <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
              </form>
            </div>


              <h4>SIGN UP</h4>
              <p>Don't have an account yet? Sign up here!</p>
              <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="Email">
                <br>
                <button type="submit" name="submit">Sign Up</button>
              </form>
            </div>
          </div>
    </div>

  <!-- top nav 
  <nav class="z-depth-0 login-nav">
    <div class="nav-wrapper container">
      <a href="/"><img class="lion-logo" src="img/nav-logo.jpg" alt=""></a>
      <span class="right grey-text text-darken-1">
        <ul id="login-links">
          <li><a href="login.signup.php">Sign Up</a></li>
          <li><a href="login.signup.php" class="header-login-a">LOGIN</a></li>


          <?php
             if(isset($_SESSION["userid"]))
            {
          ?>
          <li><a href="login.signup.php" style="color:black">
              <?php echo $_SESSION["useruid"]; ?>
            </a></li>
          <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
          <?php
            }
            ?>
        </ul>

        <i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
      </span>
    </div>
  </nav>-->

  <!-- side nav 
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">G<sup>2</sup></a></li>
    <li><a href="/" class="waves-effect">Home</a></li>
    <li><a href="pages/get-a-quote.php" class="waves-effect">Get a Quote</a></li>
    <li><a href="/pages/request-service.php" class="waves-effect">Request Service</a></li>
    <li><a href="/pages/communities-we-serve.html" class="waves-effect">Communites We Serve</a></li>
    <li><a href="/pages/gutterCleanings.html" class="waves-effect">Gutter Cleaning</a></li>
    <li><a href="/pages/gutter-guard-installation.html" class="waves-effect">Gutter Guards</a></li>
    <li><a href="/pages/gutterRepair.html" class="waves-effect">Gutter Repairs</a></li>
    <li><a href="/pages/meet-the-team.html" class="waves-effect">Meet The Team</a></li>
    <li><a href="/pages/privacy-policy.html" class="waves-effect">Privacy Policy</a></li>
    <li><a href="/pages/terms-and-conditions.html" class="waves-effect">Terms and Conditions</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a href="/pages/contact.html" class="waves-effect">
        <i class="material-icons">mail_outline</i>Contact</a>
    </li>
  </ul>-->

  <!-- recipes 
  <div class="recipes container grey-text text-darken-1">
    <div class="meet-video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/27C7EC8QukA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>-->
   <!-- <img class="max-width" src="img/header-img.JPG" alt="cleaning gutters">
    <div class="trust-container">
      <h1>Professional Gutter Cleaning, Maintenance, Repairs & Gutter Guard Installation</h1>
      <h3>Free Estimates!</h3>
      <div class="eti-text">
        <span>"Exellence"</span>
        <span>"Trust"</span>
        <span>"Integretiy"</span>
      </div>
    </div>
    <div class="container">
      <div class="buttons-container">
        <a href="/pages/get-a-quote.html" class="online-quote-buttons btn-1">Online Quote</a>
        <a href="tel:+(17736859556)" class="online-quote-buttons btn-2">Call Today</a>
      </div>
      <div class="reviews-icons-container">
        <a href="https://www.yelp.com/biz/guaranteed-gutters-chicago-7?start=40" target="_blank" class="center"><img
            class="reviews-icons" src="img/social-media/yelp.JPG" alt="Yelp"></a>
        <a href="https://www.angi.com/companylist/us/il/chicago/guaranteed-gutters--gutter-cleaning-reviews-2087733.htm"
          class="center"><img class="reviews-icons" src="img/social-media/angiesList.JPG" target="_blank"
            alt="Angie's List"></a>
      </div>
      <div class="reviews-icons-container">
        <a href="https://nextdoor.com/pages/guaranteed-gutters-chicago-il/" target="_blank" class="center"><img
            class="reviews-icons" src="img/social-media/nextDoor.JPG" alt="Next Door"></a>
        <a href="https://threebestrated.com/gutter-cleaners-in-chicago-il" target="_blank" class="center"><img
            class="reviews-icons" src="img/social-media/threeBestRated.JPG" alt="Three Best Rated"></a>
      </div>
      <div class="reviews-icons-container">
        <a href="https://www.facebook.com/GuaranteedGuttersInc/" target="_blank" class="center"><img
            class="reviews-icons" src="img/social-media/facebook.JPG" alt="Facebook"></a>
        <a href="https://www.bbb.org/us/il/chicago/profile/gutter-cleaning/guaranteed-gutters-inc-0654-88258772"
          target="_blank" class="center"><img class="reviews-icons" src="img/social-media/bbb.JPG" alt="BBB"></a>
      </div>
    </div>-->

    <?php
      require 'pages/footer.php';
    ?>
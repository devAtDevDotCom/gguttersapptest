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
  <link rel="stylesheet" href="new.style.css">
  <script src="https://kit.fontawesome.com/51439d3a57.js" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/4de3294e4e.js"></script>
</head>

<body>
  <div class="container">
    <div class="header-container">
      <div class="lion-logo-container">
        <a href="index.php"><img class="lion-logo" src="/img/nav-logo.jpg" alt=""></a>
      </div>
      <div>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="index.php" class="waves-effect">Home</a>
          <a href="pages/get-a-quote.php" class="waves-effect">Get a Quote</a>
          <a href="pages/request-service.php" class="waves-effect">Request Service</a>
          <a href="pages/communities-we-serve.php" class="waves-effect">Communites We Serve</a>
          <a href="pages/gutterCleanings.php" class="waves-effect">Gutter Cleaning</a>
          <a href="pages/gutter-guard-installation.php" class="waves-effect">Gutter Guards</a>
          <a href="pages/gutterRepair.php" class="waves-effect">Gutter Repairs</a>
          <a href="pages/meet-the-team.php" class="waves-effect">Meet The Team</a>
          <a href="pages/privacy-policy.php" class="waves-effect">Privacy Policy</a>
          <a href="pages/terms-and-conditions.php" class="waves-effect">Terms and Conditions</a>
          <div class="divider"></div>
          <li>
            <a href="pages/contact.php" class="waves-effect">
              <i class="material-icons">mail_outline</i>Contact</a>
          </li>
        </div>

        <?php
                        echo '<span id="open-nav-btn" style="font-size:20px;cursor:pointer" onclick="openNav()";>&#9776;</span>';
                    ?>

        <ul class="home-page-signup-login-out-menu-container">
          <?php
                        if(isset($_SESSION["userid"]))
                        {
                        ?>
          <li><a href="#">
              <?php echo $_SESSION["useruid"]; ?>
            </a></li>
          <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
          <?php
                        }
                        else
                        {
                        ?>
          <li><a href="login.signup.php">SIGN UP</a></li>
          <li><a href="login.signup.php" class="header-login-a">LOGIN</a></li>
          <?php
                        }
                        ?>
        </ul>
      </div>
    </div>
    <div>
      <div>
        <img id="header-image" src="header-img.JPG" alt="">
      </div>
    </div>
  </div>

  <!-- Trust Container -->

  <div class="container-two">
    <div>
      <div class="trust-container">
        <span>Professional Gutter Cleaning, Maintenance, Repairs <br> & Gutter Guard Installation</span>
        <h3>Free Estimates!</h3>
      </div>
      <div class="eti-text">
        <span>"Exellence"</span>
        <span>"Trust"</span>
        <span>"Integretiy"</span>
      </div>
    </div>


    <!-- Contact Online Request Buttons & Reviews Icons -->

    <div class="buttons-reviews-icons-container">
      <div class="buttons-container">
        <a href="/pages/get-a-quote.php" class="online-quote-buttons btn-1">Online Quote</a>
        <a href="tel:+(17736859556)" class="online-quote-buttons btn-2">Call Us Today</a>
      </div>
      <div class="reviews-icons-container">
        <a href="https://www.yelp.com/biz/guaranteed-gutters-chicago-7?start=40" target="_blank" class="center"><img
            class="reviews-icons" src="/img/social-media/yelp.JPG" alt="Yelp"></a>
        <a href="https://www.angi.com/companylist/us/il/chicago/guaranteed-gutters--gutter-cleaning-reviews-2087733.htm"
          class="center"><img class="reviews-icons" src="/img/social-media/angiesList.JPG" target="_blank"
            alt="Angie's List"></a>

        <a href="https://nextdoor.com/pages/guaranteed-gutters-chicago-il/" target="_blank" class="center"><img
            class="reviews-icons" src="/img/social-media/nextDoor.JPG" alt="Next Door"></a>
      </div>
      <div class="reviews-icons-container">
        <a href="https://threebestrated.com/gutter-cleaners-in-chicago-il" target="_blank" class="center"><img
            class="reviews-icons" src="/img/social-media/threeBestRated.JPG" alt="Three Best Rated"></a>

        <a href="https://www.facebook.com/GuaranteedGuttersInc/" target="_blank" class="center"><img
            class="reviews-icons" src="/img/social-media/facebook.JPG" alt="Facebook"></a>
        <a href="https://www.bbb.org/us/il/chicago/profile/gutter-cleaning/guaranteed-gutters-inc-0654-88258772"
          target="_blank" class="center"><img class="reviews-icons" src="/img/social-media/bbb.JPG" alt="BBB"></a>
      </div>
    </div>
  </div>

  <!-- Reviews -->

  <div class="flex-container google-reviews-container">
    <div class="content">
      <div class=" images">
        <div class="imgs">
          <div>
            <p class="reviews-text bold-text">"They cleaned our gutters and assessed anything that might need repairs.
              When
              they
              were done they sent me pictures of everything that needed to be fixed and then someone called me to
              discuss the repairs."
            <h6 class="reviews-text bold-text">– Nicole V</h6>
            </p>
          </div>
          <div class="reviews-link bold-text">
            <a href="https://www.yelp.com/biz/guaranteed-gutters-chicago-7?start=40" target="_blank">More Yelp
              Reviews</a>
          </div>
        </div>
        <div class="imgs">
          <div>
            <p class="reviews-text bold-text">"The arrangements for cleaning were made smoothly, the process easy. The
              gutters were cleaned very nicely, the bill was the price agreed upon, and quite reasonable, and the
              payment process was also smooth. What more can anyone ask? Great work. Thank you."
            <h6 class="reviews-text bold-text"> – Erika Nadas</h6>
            </p>
          </div>
          <div class="reviews-link bold-text">
            <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x880fcc084b101655:0xcff1ad02642d4fa8?source=g.page.share"
              target="_blank">More Google Reviews</a>
          </div>
        </div>
        <div class="imgs">
          <div>
            <p class="reviews-text bold-text">"They made sure the downspouts and drain pipes were clear and cleaned all
              the leaves from around the house and our porch. We will definitely be using them again."
            <h6 class="reviews-text bold-text"> – Marcus T.</h6>
            </p>
          </div>
          <div class="reviews-link bold-text">
            <a href="https://www.yelp.com/biz/guaranteed-gutters-chicago-7?start=40" target="_blank">More Yelp
              Reviews</a>
          </div>
        </div>
        <div class="imgs">
          <div class="reviews-link bold-text">
            <p class="reviews-text bold-text">"These guys were awesome. They are very detail oriented and answer all
              questions."
            <h6 class="reviews-text bold-text"> – Junaid Ansari</h6>
            </p>
          </div>
          <div class="reviews-link bold-text">
            <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x880fcc084b101655:0xcff1ad02642d4fa8?source=g.page.share"
              target="_blank">More Google Reviews</a>
          </div>
        </div>
        <div class="imgs">
          <div>
            <p class="reviews-text bold-text">"My new home had plants growing out the gutters. They finished the job in
              less than 20 minutes and thoroughly cleaned the areas below. Very reasonable price considering the
              condition and high pitched roofs."
            <h6 class="reviews-text bold-text"> – Charles Saucedo</h6>
            </p>
          </div>
          <div class="reviews-link bold-text">
            <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x880fcc084b101655:0xcff1ad02642d4fa8?source=g.page.share"
              target="_blank">More Google Reviews</a>
          </div>
        </div>
        <div class="imgs">
          <div>
            <p class="reviews-text bold-text">"I've been using Guaranteed Gutters for almost ten years and have always
              been very happy about their level of professionalism and customer service. "
            <h6 class="reviews-text bold-text">– Lorraine R.</h6>
            </p>
          </div>
          <div class="reviews-link bold-text">
            <a href="https://www.yelp.com/biz/guaranteed-gutters-chicago-7?start=40" target="_blank">More Yelp
              Reviews</a>
          </div>
        </div>
        <div onclick="side_slide(-1)" class="slide left">
        <span class=""><</span>
      </div>
      <div onclick="side_slide(1)" class="slide right">
        <span class="">></span>
      </div>
      <div class="btn-sliders">
        <span class="nav-circle" onclick="btn_slide(1)"></span>
        <span class="nav-circle" onclick="btn_slide(2)"></span>
        <span class="nav-circle" onclick="btn_slide(3)"></span>
        <span class="nav-circle" onclick="btn_slide(4)"></span>
        <span class="nav-circle" onclick="btn_slide(5)"></span>
        <span class="nav-circle" onclick="btn_slide(6)"></span>
      </div>
      </div>

    </div>
  </div>

  <!-- Services -->

  <div class="services-container">
    <div class="cleaning-services container">
      <h2 class="center">Gutter Services</h2>
      <h4 style="color: #fff">Gutter Cleanings</h4>
      <ul>
        <li>Gutter and Downspout Cleaning on Residential Homes and most Commercial Properties.</li>
        <li>Free Gutter and Roof Inspection</li>
        <li>Thorough job site clean up</li>
        <li>100% Customer Satisfaction Guaranteed</li>
        <a class="small-button" href="/pages/gutterCleanings.html">Learn more about Gutter Cleanings</a>
      </ul>
    </div>
    <div class="cleaning-services container">
      <h4 style="color: #fff">Gutter Repairs</h4>
      <ul>
        <li>Preserve existing gutters, downspouts and roof</li>
        <li>Provide high quality products</li>
        <li>Assess and install water channeling solutions</li>
        <li>Prevent gutter, downspout, roof leaks</li>
        <li>Prevent rotting wood, animal openings, etc.</li>
        <li>Gutter and downspout reconfiguration</li>
        <li>Followup with Gutter cleaning service</li>
        <a class="small-button" href="/pages/gutterRepair.html">Learn more about Gutter Repairs</a>
      </ul>
    </div>
    <div class="cleaning-services container">
      <h4 style="color: #fff">Gutter and Roof Inspection</h4>
      <ul>
        <p>Our Team is trained and equipped to:</p>
        <li>Complete a 10 Step Property Protection Inspection</li>
        <li>Take pictures and educate you of any problem areas</li>
        <li>Provide recommended affordable solutions</li>
        <li>Gutter Cleaning service always recommended</li>
      </ul>
    </div>
    <div class="cleaning-services container">
      <h4 style="color: #fff">Gutter Guard Installation</h4>
      <ul>
        <li>Gutter Cleaning Included</li>
        <li>20 Year Transferable Warranty</li>
        <li>Some free repairs with guard purchase</li>
        <li>Complimentary check up afer one winter season</li>
        <a class="small-button" href="/pages/gutter-guard-installation.html">Learn more about Gutter Guard
          Installation</a>
      </ul>
    </div>
  </div>

  <!--Our Process -->

  <div class="flex-container container white-background">
    <div class="content process-container">
      <div class=" images">
        <!--<img class="imgs" src="img/chicago.jpg" alt="">
              <img class="imgs" src="img/dish.png" alt="">
              <img class="imgs" src="img/ggutters-app.JPG" alt="">-->
        <div class="process-imgs">
          <div>
            <h2>STEP ONE</h2>
            <p class="reviews-text bold-text">SUBMIT YOUR REQUEST ONLINE OR BY PHONE</p>
            <div>
              <i class="fa-light fa-desktop"></i>
            </div>
          </div>

        </div>
        <div class="process-imgs">
          <div>
            <h2>STEP TWO</h2>
            <p class="reviews-text bold-text">RECEIVE A FAST ESTIMATE FOR SERVICE BY EMAIL, TEXT OR OVER THE PHONE</p>
            <div>
              <i class="fa-thin fa-mobile-screen"></i>
            </div>
          </div>
        </div>
        <div class="process-imgs">
          <div>
            <h2>STEP THREE</h2>
            <p class="reviews-text bold-text">REVIEW YOUR ESTIMATE, GIVE US THE "GO AHEAD"</p>
            <div>
              <i class="fa-light fa-thumbs-up"></i>
            </div>
          </div>
        </div>
        <div class="process-imgs">
          <div>
            <h2>STEP FOUR</h2>
            <p class="reviews-text bold-text">GET SCHEDULED AND BE SERVICED IN A TIMELY MANNER</p>
            <div>
              <i class="fa-light fa-calendar-check"></i>
            </div>
          </div>
        </div>
        <div class="process-imgs">
          <div>
            <h2>STEP FIVE</h2>
            <p class="reviews-text bold-text">PAY YOUR INVOICE SECURELY ONLINE OR BY MAILING A CHECK</p>
            <div>
              <i class="fa-light fa-credit-card"></i>
            </div>
          </div>
        </div>
        <div class="process-imgs">
          <div>
            <h2>STEP SIX</h2>
            <p class="reviews-text bold-text">WE ARE GLAD TO WEATHER THIS STORM WITH YOU. YOUR HOME IS NOW READY FOR THE
              RAIN</p>
            <div>
              <i class="fa-light fa-face-smile"></i>
            </div>
          </div>
        </div>
        <div onclick="side_process_slide(-1)" class="slide left left-process-arrow process-arrow">
          <span class="">
            <</span>
        </div>
        <div onclick="side_process_slide(1)" class="slide right right-process-arrow process-arrow">
          <span class="">></span>
        </div>       
      </div>
      <div class="btn-process-sliders">
          <span class="nav-circle" onclick="btn_process_slide(1)"></span>
          <span class="nav-circle" onclick="btn_process_slide(2)"></span>
          <span class="nav-circle" onclick="btn_process_slide(3)"></span>
          <span class="nav-circle" onclick="btn_process_slide(4)"></span>
          <span class="nav-circle" onclick="btn_process_slide(5)"></span>
          <span class="nav-circle" onclick="btn_process_slide(6)"></span>
        </div>
    </div>


    <!-- Footer -->

    <!-- <footer>
      <div class="footer-container">
        <div class="footer-h5-divider-container">
          <h5 class="center">Contact Us</h5>
          <div class="divider"></div>
        </div>
        <ul>
          <li>GUARANTEED GUTTERS</li>
          <li>5900 W. EASTWOOD AVE.</li>
          <li>CHICAGO, IL. 60630</li>
          <li><a href="tel:+(17736859556)" class="phone-number" style="color: #fff">773-685-9556</a></li>
          <li><a href="mailto:contact@Guaranteedgutters.net" style="color: #fff">contact@Guaranteedgutters.net</a></li>
        </ul>
        <div>
          <a href="https://www.facebook.com/GuaranteedGuttersInc/" target="_blank"><span style="color: #fff"><i class="fa-regular fa-user"></i></span></a>
          <a href="https://twitter.com/GTDgutters" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.instagram.com/guaranteedgutters/?hl=en" target="_blank"><i
              class="fa-brands fa-instagram"></i></a></span>
        </div>
        <div>
          <ul>
            <li><a href="/pages/privacy-policy.html">PRIVACY POLICY</a></li>
            <li><a href="/pages/terms-and-conditions.html">TERMS AND CONDITIONS</a></li>
          </ul>
        </div>

        <P>Copyright Guranteed Gutters, Inc. 2022</P>
      </div>
    </footer>-->

    <!--<section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
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
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>-->


    <?php
        echo '<script src="/js/carousel.js"></script>';
        require 'pages/footer.php';
    ?>
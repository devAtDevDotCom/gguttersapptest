<?php
    require 'header.php';
?>

    <!-- recipes -->
    <?php

    echo'
    <div class="container header-img quote-page container grey-text text-darken-1">
        <!--<img class="max-width" src="/img/header-img.JPG" alt="cleaning gutters">-->
        <div class="request-service-container">
            <h3>Request Service</h3>
            <h4>Dont delay, spots fill up fast!</h4>
        </div>
        <div class="progress-bar-container">
            <h4>Joe Customer</h4>
            <p>Address where service is to be performed</p>
            <br>

            <br>

            <div id="service-request-container">
                <form name="form" action="">
            <!-- <input id="services-address" type="text" placeholder="Address Where You Would Like Service" value="" required>-->
                <br>
                    <p id="choose-week-text">Choose the week you would prefer your servcie then click the "Submit" button below.</p>
                    
                        <br>
                        <input class="first-week" type="radio" id="october-1st-week" name="october" value="October 16th and 22nd 2022">

                        <label class="first-week-one" for="October-1st-week">October 16th - 22nd</label>

                        <div class="progress-bar-outer first-week-two">
                        <div id = "progress-bar-0" class="progress-bar" data-label="Availability...">Availability...</div>
                        </div>
                        <br>
                        <p id="week-one-text" style="font-weight: bold"></p>
                    
                    <br>
                    <br>
                    

                        <input type="radio" id="October-2nd-week" name="october" value="October 23rd and 29th 2022" class="weekTwo">



                        <label class="weekTwo-1" for="October-2nd-week">October 23rd - 29th</label>

                        <div class="progress-bar-outer weekTwo-2">
                          <div id = "progress-bar-1" class="progress-bar" data-label="Availability...">Availability...</div>
                        </div>
                        <br>
                        <p id="week-two-text" style="font-weight: bold"></p>
                   

                    <br>
                    <br>

                            <input class="weekThree" type="radio" id="October-3rd-week" name="october" value="October 30th and November 5th">



                            <label class="weekThree-1" for="October-3rd-week">October 30th - November 5th</label>


                            <div class="progress-bar-outer weekThree-2">
                            <div id = "progress-bar-2" class="progress-bar" data-label="Availability...">Availability...</div>
                            </div>
                            <br>

                            <p id="week-three-text" style="font-weight: bold"></p>
                        <br>
                        <br>


                            <input class="weekFour" type="radio" id="October-3rd-week" name="october" value="November 6th and 12th">


                            <label class="weekFour-1" for="October-3rd-week">November 6th - November 12th</label>

                            <div class="progress-bar-outer weekFour-2">
                            <div id = "progress-bar-3" class="progress-bar" data-label="Availability...">Availability...</div>
                            </div>
                            <br>
                            <p id="week-four-text" style="font-weight: bold"></p>
                        
                        <input class="submit-request-btn"  class="progress-btn" type="button" value="Submit" id="btn" onclick="advanceProgressBar()">
                </form>
               
            </div>
            <div class="quote-form-container">
                <br>
                <!-- <iframe style="width:100vw; height: 1100px;" src="https://forms.zohopublic.com/business1119/form/WebsiteEstimatecontactform/formperma/CDBC301kCCDjFJfb091mFdbbm" frameborder="0"    ></iframe>-->
            </div>
        </div>
       <!-- <div class="container ">
            <div class="reviews-icons-container">
                <a href="https://www.yelp.com/biz/guaranteed-gutters-chicago-7?start=40" target="_blank"
                    class="center"><img class="reviews-icons" src="/img/social-media/yelp.JPG" alt="Yelp"></a>
                <a href="https://www.angi.com/companylist/us/il/chicago/guaranteed-gutters--gutter-cleaning-reviews-2087733.htm"
                    class="center"><img class="reviews-icons" src="/img/social-media/angiesList.JPG" target="_blank"
                        alt="Angies List"></a>
            </div>
            <div class="reviews-icons-container">
                <a href="https://nextdoor.com/pages/guaranteed-gutters-chicago-il/" target="_blank" class="center"><img
                        class="reviews-icons" src="/img/social-media/nextDoor.JPG" alt="Next Door"></a>
                <a href="https://threebestrated.com/gutter-cleaners-in-chicago-il" target="_blank" class="center"><img
                        class="reviews-icons" src="/img/social-media/threeBestRated.JPG" alt="Three Best Rated"></a>
            </div>
            <div class="reviews-icons-container">
                <a href="https://www.facebook.com/GuaranteedGuttersInc/" target="_blank" class="center"><img
                        class="reviews-icons" src="/img/social-media/facebook.JPG" alt="Facebook"></a>
                <a href="https://www.bbb.org/us/il/chicago/profile/gutter-cleaning/guaranteed-gutters-inc-0654-88258772"
                    target="_blank" class="center"><img class="reviews-icons" src="/img/social-media/bbb.JPG"
                        alt="BBB"></a>
            </div>
        </div>-->

        <!--Footer-->
        <script>
            // Side nav
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>

        <!--<script defer src="/js/db.js"></script>-->
        



            <script type="text/javascript">
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("open-nav-btn").style.display = "none";
            }
            
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("open-nav-btn").style.display = "block";
            }
            </script> 
            <script src="/js/progress.bar.js"></script>
            <script src="/js/app.js"></script>
            <script src="/js/ui.js"></script>';
            ?>
<?php
            require 'footer.php'; 
?>
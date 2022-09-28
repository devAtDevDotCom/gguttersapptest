 <?php
    require 'header.php';
?>

    <!-- recipes -->
    <?php

    echo'
    <div class="container header-img quote-page container grey-text text-darken-1">
        <!--<img class="max-width" src="/img/header-img.JPG" alt="cleaning gutters">-->
        <div class="service-container">
            <h3>Request Service</h3>
            <h4>Dont delay, spots fill up fast!</h4>
        </div>
        <div>
            <h4>Joe Customer</h4>
            <p>Address where service is to be performed</p>
            <input type="text" placeholder="Enter service address" required>

            <div class="service-request-container">
                <form action="">
                    <p>Choose the week you would like your servcie..</p>
                    <div>


                        <input type="radio" id="october-1st-week" name="fav_language" value="October-1st-week" onclick="firstWeekBtn()">





                        <label for="October-1st-week">October 16th - 22nd</label>

                        <div class="progress-bar">
                        <div id = "progress-bar-first-week" data-label="Availability...">Availability...</div>
                        </div>
                        <br>
                        <input class="submit-request-btn"  id="first-Week" type="button" value="Submit" onclick="firstWeekBtn()" >
                    </div>
                    <br>
                    <br>
                    <div>
                        <input type="radio" id="October-2nd-week" name="fav_language" value="October-2nd-week">
                        <label for="October-2nd-week">October 23rd - 29th</label>
                        <div class="progress-bar progress-bar-2" style = "--width: 10" id = "progress-bar-second-week" data-label="Availability..."></div>
                        <br>
                        <input class="submit-request-btn"  id="first-Week" onclick="firstWeekBtn()" type="submit" value="Submit">
                    </div>
                    <br>
                    <br>
                        <div>
                            <input type="radio" id="October-3rd-week" name="fav_language" value="October-3rd-week">
                            <label for="October-3rd-week">October 30th - November 5th</label>
                            <div class="progress-bar" data-label="Availability..."></div>
                            <br>
                            <input class="submit-request-btn"  id="first-Week" onclick="firstWeekBtn()" type="submit" value="Submit">
                        </div>
                        <br>
                        <br>
                        <div>
                            <input type="radio" id="October-3rd-week" name="fav_language" value="October-3rd-week">
                            <label for="October-3rd-week">November 6th - November 12th</label>
                            <div class="progress-bar" data-label="Availability..."></div>
                            <br>
                            
                        </div>
                        <input class="submit-request-btn"  id="first-Week" onclick="firstWeekBtn()" type="submit" value="Submit">
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

        <script>

       /* function firstWeekBtn() {

            firstWeek = document.getElementById("progress-bar-first-week")
                firstWeek.style.width = 100 + "px";
                
        }

            const progressBar = document.getElementsByClassName("progress-bar")[0]
            setInterval(() => {
                const computedStyle = getComputedStyle(progressBar)
                const width = parseFloat(computedStyle.getPropertyValue("--width")) || 0
                progressBar.style.setProperty("--width", width + .5)
            }, )
            const progressBar2 = document.getElementsByClassName("progress-bar-2")[0]
            setInterval(() => {
                const computedStyle = getComputedStyle(progressBar2)
                const width = parseFloat(computedStyle.getPropertyValue("--width")) || 0
                progressBar2.style.setProperty("--width", width + .5)
            }, ) 
           



            let radioBtnFirstWeek = document.getElementById("first-Week");
            let progressBar = document.getElementById("progress-bar-first-week");

            const beginingWidth = 0;



            function firstWeekBtn() {
                radioBtnFirstWeek.addEventListener("clck", e => {

                   progressBar.style.width =  beginingWidth + 20 + px;
                   const newWidth = progressBar;
                })
            }
                */
        </script>

        <script src="https://www.gstatic.com/firebasejs/6.0.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.0.1/firebase-firestore.js"></script>


        <script type="module">
        // Import the functions you need from the SDKs you need
        //import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js";
        //import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-analytics.js";




        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web apps Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
                apiKey: "AIzaSyBVTu5LhrxPOqAEgJTje2mnxwmMUXRUThA",
                authDomain: "guranteedguttersapp.firebaseapp.com",
                projectId: "guranteedguttersapp",
                storageBucket: "guranteedguttersapp.appspot.com",
                messagingSenderId: "627040818460",
                appId: "1:627040818460:web:e335d6accdead3113156d9",
                measurementId: "G-YL7CQEEWDR"
            };

            firebase.initializeApp(firebaseConfig);
            const db = firebase.firestore();

    // Initialize Firebase
    //const app = initializeApp(firebaseConfig);
    //const analytics = getAnalytics(app);


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
            <script src="/js/app.js"></script>
            <script src="/js/ui.js"></script>';
    


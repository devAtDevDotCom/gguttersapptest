// Progress Bar

/*const firstWeek = document.getElementById("progress-bar-first-week");
firstWeek.addEventListener("click", advanceProgressBar);

function advanceProgressBar() {
    firstWeek.style.width = 200 + "px";
}*/

    const btn = document.querySelector('#btn');
    const progressBar = document.getElementById("progress-bar");
    //var found_it


    function advanceProgressBar() {
        for (var i=0; i < document.form.october.length; i++)  {

            // First Week
            if (document.form.october[0].checked)  {
                let progressBar = document.getElementById("progress-bar-0")
                progressBar.style.width = 200 + "px";

                const displayNone = document.querySelector(".weekTwo");
                displayNone.style.display = "none";

                const displayNoneOne = document.querySelector(".weekTwo-1");
                displayNoneOne.style.display = "none";

                const displayNoneTwo = document.querySelector(".weekTwo-2");
                displayNoneTwo.style.display = "none";



                const displayNoneWeekThree = document.querySelector(".weekThree");
                displayNoneWeekThree.style.display = "none";

                const displayNoneWeekThreeOne = document.querySelector(".weekThree-1");
                displayNoneWeekThreeOne.style.display = "none";

                const displayNoneWeekThreeTwo = document.querySelector(".weekThree-2");
                displayNoneWeekThreeTwo.style.display = "none";



                const displayNoneWeekFour = document.querySelector(".weekFour");
                displayNoneWeekFour.style.display = "none";

                const displayNoneWeekFourOne = document.querySelector(".weekFour-1");
                displayNoneWeekFourOne.style.display = "none";

                const displayNoneWeekFourTwo = document.querySelector(".weekFour-2");
                displayNoneWeekFourTwo.style.display = "none";


                let weekOf = document.form.october[0].value;
                document.getElementById("week-one-text").innerHTML = `
                <div>
                   <p> <span style="color:red; font-weight:bold">The services on your invoice are scheduled between:</span><br> ${weekOf}<br><span style="color:red; font-weight:bold"><br>You need not be home for the service and you will be notified when our crew is on their way. </p><p>Thank you for choosing Guaranteed Gutters.</p>
                </div>`

                   // document.getElementById("services-address").style.display = "none";
                   document.getElementById('service-request-container').style.height = 400 + "px";
                    document.getElementById("btn").style.display = "none";
                    document.getElementById("choose-week-text").style.display = "none";
                    document.getElementById("service-request-container").style.marginTop = -50 + "px";
        
                }

                // Second Week
                if (document.form.october[1].checked)  {
                    let progressBar = document.getElementById("progress-bar-1")
                    progressBar.style.width = 200 + "px";


                    const displayNoneFirstWeek = document.querySelector(".first-week");
                    displayNoneFirstWeek.style.display = "none";

                    const displayNoneFirstWeekOne = document.querySelector(".first-week-one");
                        displayNoneFirstWeekOne.style.display = "none";

                    const displayNoneFirstWeekTwo = document.querySelector(".first-week-two");
                    displayNoneFirstWeekTwo.style.display = "none";


                    const displayNone = document.querySelector(".weekThree");
                    displayNone.style.display = "none";
    
                    const displayNoneOne = document.querySelector(".weekThree-1");
                    displayNoneOne.style.display = "none";
    
                    const displayNoneTwo = document.querySelector(".weekThree-2");
                    displayNoneTwo.style.display = "none";


                    const displayNoneWeekFour = document.querySelector(".weekFour");
                    displayNoneWeekFour.style.display = "none";

                    const displayNoneWeekFourOne = document.querySelector(".weekFour-1");
                    displayNoneWeekFourOne.style.display = "none";

                    const displayNoneWeekFourTwo = document.querySelector(".weekFour-2");
                    displayNoneWeekFourTwo.style.display = "none";

    
                    let weekOf = document.form.october[1].value;
                    document.getElementById("week-two-text").innerHTML = `
                    <div>
                    <p> <span style="color:red; font-weight:bold">The services on your invoice are scheduled between:</span><br> ${weekOf}<br><span style="color:red; font-weight:bold"><br>You need not be home for the service and you will be notified when our crew is on their way. </p><p>Thank you for choosing Guaranteed Gutters.</p>
                    </div>`

                        //document.getElementById("services-address").style.display = "none";
                        document.getElementById('service-request-container').style.height = 450 + "px";
                        document.getElementById("btn").style.display = "none";
                        document.getElementById("choose-week-text").style.display = "none";
                        document.getElementById("service-request-container").style.marginTop = -120 + "px";
            }

            // Third Week
            if (document.form.october[2].checked)  {
                let progressBar = document.getElementById("progress-bar-2")
                progressBar.style.width = 200 + "px";


                    const displayNoneFirstWeek = document.querySelector(".first-week");
                    displayNoneFirstWeek.style.display = "none";

                    const displayNoneFirstWeekOne = document.querySelector(".first-week-one");
                        displayNoneFirstWeekOne.style.display = "none";

                    const displayNoneFirstWeekTwo = document.querySelector(".first-week-two");
                    displayNoneFirstWeekTwo.style.display = "none";


                    const displayNone = document.querySelector(".weekTwo");
                    displayNone.style.display = "none";
    
                    const displayNoneOne = document.querySelector(".weekTwo-1");
                    displayNoneOne.style.display = "none";
    
                    const displayNoneTwo = document.querySelector(".weekTwo-2");
                    displayNoneTwo.style.display = "none";


                    const displayNoneWeekFour = document.querySelector(".weekFour");
                    displayNoneWeekFour.style.display = "none";

                    const displayNoneWeekFourOne = document.querySelector(".weekFour-1");
                    displayNoneWeekFourOne.style.display = "none";

                    const displayNoneWeekFourTwo = document.querySelector(".weekFour-2");
                    displayNoneWeekFourTwo.style.display = "none";

    
                    let weekOf = document.form.october[2].value;
                    document.getElementById("week-three-text").innerHTML = `
                    <div>
                    <p> <span style="color:red; font-weight:bold">The services on your invoice are scheduled between:</span><br> ${weekOf}<br><span style="color:red; font-weight:bold"><br>You need not be home for the service and you will be notified when our crew is on their way. </p><p>Thank you for choosing Guaranteed Gutters.</p>
                    </div>`

                       // document.getElementById("services-address").style.display = "none";
                       document.getElementById('service-request-container').style.height = 500 + "px";
                        document.getElementById("btn").style.display = "none";
                        document.getElementById("choose-week-text").style.display = "none";
                        document.getElementById("service-request-container").style.marginTop = -200 + "px";
        }

        // Fourth Week
        if (document.form.october[3].checked)  {
            let progressBar = document.getElementById("progress-bar-3")
            progressBar.style.width = 200 + "px";

                    const displayNoneFirstWeek = document.querySelector(".first-week");
                    displayNoneFirstWeek.style.display = "none";

                    const displayNoneFirstWeekOne = document.querySelector(".first-week-one");
                        displayNoneFirstWeekOne.style.display = "none";

                    const displayNoneFirstWeekTwo = document.querySelector(".first-week-two");
                    displayNoneFirstWeekTwo.style.display = "none";


                    const displayNoneWeekTwo = document.querySelector(".weekTwo");
                    displayNoneWeekTwo.style.display = "none";
    
                    const displayNoneTwoOne = document.querySelector(".weekTwo-1");
                    displayNoneTwoOne.style.display = "none";
    
                    const displayNoneTwoTwo = document.querySelector(".weekTwo-2");
                    displayNoneTwoTwo.style.display = "none";


                    const displayNone = document.querySelector(".weekThree");
                    displayNone.style.display = "none";
    
                    const displayNoneOne = document.querySelector(".weekThree-1");
                    displayNoneOne.style.display = "none";
    
                    const displayNoneTwo = document.querySelector(".weekThree-2");
                    displayNoneTwo.style.display = "none";

                  //  let servicesAddress = document.getElementById("services-address").value;

                   

                    let weekOf = document.form.october[3].value;
                    document.getElementById("week-four-text").innerHTML = `
                    <div>
                    <p> <span style="color:red; font-weight:bold">The services on your invoice are scheduled between:</span><br> ${weekOf}<br><span style="color:red; font-weight:bold"><br>You need not be home for the service and you will be notified when our crew is on their way.</p><p>Thank you for choosing Guaranteed Gutters.</p>
                    </div>`

                        //document.getElementById("services-address").style.display = "none";
                        document.getElementById('service-request-container').style.height = 575 + "px";
                        document.querySelector("form").style.transition = .5 + "s";
                        document.getElementById("btn").style.display = "none";
                        document.getElementById("choose-week-text").style.display = "none";
                        document.getElementById("service-request-container").style.marginTop = -250 + "px";
                        
        }
        
    }
}



        //const btn = document.querySelector('#btn');        
        /*const radioButtons = document.querySelectorAll('input[name="october"]');
        const progressBar = document.getElementById("progress-bar")
        btn.addEventListener("click", () => {
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
            
                     // show the output:
                     progressBar.style.width = 200 + "px";
                }
            }
           
            //output.innerText = selectedSize ? `You selected ${selectedSize}` : `You haven't selected any size`;
        });*/
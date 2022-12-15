console.log("running");
timeDisplay();
countdownTimer();



var isMobileVersion = document.getElementsByClassName('btn-checkout');
if (isMobileVersion.length > 0) {
     document
          .getElementsByClassName("btn-checkout")[0]
          .addEventListener("click", checkoutClicked);
}
else {
     console.log("no");
}



function checkoutClicked(items) {
     let url = window.location.href;

     if (url == 'http://127.0.0.1:8000/cart') {
          displayFormBox();

     }
     else {
          console.log("hi");
     }

}

function timeDisplay() {
     let url = window.location.href;

     if (url == 'http://127.0.0.1:8000/Breakfast#breakfast') {
          setTime();

     }
     else {
          console.log("hi");
     }

}
function countdownTimer() {
     let url = window.location.href;

     if (url == 'http://127.0.0.1:8000/Order') {
          window.onload = function () {
               var fiveMinutes = 60 * 60,
                    display = document.querySelector('#time');
               startTimer(fiveMinutes, display);
          };

     }
     else {
          console.log("hi");
     }

}

function displayFormBox(params) {
     const isEmpty = document.querySelectorAll("#table1 tr").length <= 1;
     if (isEmpty === true) {
          alert("Add items first!");
     }
     else {
          var dialog = document.getElementById("dialog");
          var closeButton = document.getElementById("close");
          var overlay = document.getElementById("overlay");

          // show the overlay and the dialog

          dialog.classList.remove("hidden");
          overlay.classList.remove("hidden");

          // hide the overlay and the dialog
          closeButton.addEventListener("click", function () {
               dialog.classList.add("hidden");
               overlay.classList.add("hidden");
          });
     }
}

function setTime(params) {
     var objDate = new Date();
     var Hours = objDate.getHours() * 100 + objDate.getMinutes();
     var day;
     var sign = document.getElementById("sign");

     switch (new Date().getDay()) {
          case 0: //Sunday
               if (sign) {
                    sign.innerHTML =
                         "Sorry unfortunately we are closed today, we'll be back on Monday at 12:30pm";
                    sign.style.color = "red";
               } else {
                    console.log("no");
               }
               break;
          case 1: //Monday
               if (sign) {
                    if (Hours >= 1230 && Hours <= 2030) {
                         sign.innerHTML = "Yes, we are open between 12:30 - 20:30.";
                         sign.style.color = "green";
                    } else {
                         sign.innerHTML =
                              "We are closed now and will reopen tomorrow";
                         sign.style.color = "red";
                    }
               } else {
                    console.log("no");
               }
               break;
          case 2: //Tuesday
          case 3: //Wednesday
          case 4: //Thursday
               if (sign) {
                    if (Hours >= 830 && Hours <= 1800) {
                         sign.innerHTML = "Yes, we are open between 08:30 - 18:00.";
                         sign.style.color = "green";
                    } else {
                         sign.innerHTML =
                              "We are closed now and will reopen tomorrow";
                         sign.style.color = "red";
                    }
               } else {
                    console.log("no");
               }
               break;
          case 5: //Friday
               if (sign) {
                    if (Hours >= 830 && Hours <= 1930) {
                         sign.innerHTML = "Yes, we are open between 08:30 - 19:30.";
                         sign.style.color = "forestgreen";
                    } else {
                         sign.innerHTML =
                              "We are closed now and will reopen tomorrow";
                         sign.style.color = "red";
                    }
               } else {
                    console.log("no");
               }
               break;
          case 6: //Saturday
               if (sign) {
                    if (Hours >= 900 && Hours <= 1700) {
                         sign.innerHTML = "Yes, we are open between 09:00 - 17:00.";
                         sign.style.color = "green";
                    } else {
                         sign.innerHTML =
                              "We are closed now and will reopen tomorrow";
                         sign.style.color = "red";
                    }
               } else {
                    console.log("no");
               }
               break;
          default:
               alert("Er is iets die mis gaat");
               break;
     }
}

function jobs(event) {
     var button = event.target;

     let title = button.parentElement.parentElement.children[0].innerHTML;

     var title_box = document.getElementById("title-block");
     var title_box1 = document.getElementById("title-block-hidden");

     title_box.value = title;
     title_box1.value = title;


     var dialog = document.getElementById("dialog");
     var closeButton = document.getElementById("close");
     var overlay = document.getElementById("overlay");

     // show the overlay and the dialog

     dialog.classList.remove("hidden");
     overlay.classList.remove("hidden");

     // hide the overlay and the dialog
     closeButton.addEventListener("click", function () {
          dialog.classList.add("hidden");
          overlay.classList.add("hidden");
     });


     // console.log();
}

var job = document.getElementsByClassName("job-title").innerHTML;

var apply_button = document.querySelectorAll(".apply-button");

apply_button.forEach(function (btn) {
     btn.addEventListener("click", jobs);
});


function startTimer(duration, display) {
     var timer = duration, minutes, seconds;
     setInterval(function () {
          minutes = parseInt(timer / 60, 10);
          seconds = parseInt(timer % 60, 10);

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          display.textContent = minutes + ":" + seconds;

          if (--timer < 0) {
               alert("Your meal has been deliverd, please come again!");
               timer = duration;
          }
     }, 1000);
     // if (display == "00:00") {
     //      alert("Your meal has been deliverd, please come again!")
     // }
}




//-------------------------------------------------- all function steps and with what they do{
// settime{
//1) grabs today's date also the time then loop trought the switch case statement checking if it monday---sunday and display the message.
//2) this only happens if the url is on a specific page  avoiding every other page therefor avoiding error.
//}

//countdownTimer{
 // just timer counting down from 60 min when it reaches 0 it display the alert message.
//}


//checkoutClicked{
// checks the url and return the checkout form for customer to fill and finish the order
//}

//jobs{
// checks the url and return the apply form for potentiial applicants to fill and finish applying for a specif position
//}
//}
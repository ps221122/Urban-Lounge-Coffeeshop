console.log("running");
setTime();



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

let url = window.location.href;

if (url == 'http://127.0.0.1:8000/Order') {
     const min = Math.floor(Math.random() * 5) + 60;

     const sec = Math.floor(Math.random() * 1) + 60;


     document.getElementById("demo").innerHTML = "Your waiting time is: " + min + ":" + sec;

}
else {
     console.log("hi");
}


var job = document.getElementsByClassName("job-title").innerHTML;

var apply_button = document.querySelectorAll(".apply-button");

apply_button.forEach(function (btn) {
     btn.addEventListener("click", jobs);
});




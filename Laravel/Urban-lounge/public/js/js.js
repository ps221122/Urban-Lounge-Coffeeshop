console.log("running");

document
     .getElementsByClassName("btn-checkout")[0]
     .addEventListener("click", checkoutClicked);

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
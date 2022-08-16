var addToCartButton = document.getElementsByClassName('add-button');

for (let i = 0; i < addToCartButton.length; i++) {
    addToCartButton[i].addEventListener('click', () => {
        console.log("click");
    })
}
















function myFunction() {
    var x = document.getElementById("purchase-box-model");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    else {
        x.style.display = "none";
    }
}


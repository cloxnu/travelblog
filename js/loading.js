function loaded() {
    document.body.classList.remove("loading");
    document.getElementById("loading-shelter").style.display = "none";
    window.setTimeout(function () {
        document.getElementById("loading-div").style.opacity = "0";
    }, 500);
}

function loading() {
    document.getElementById("loading-div").style.opacity = "1";
    document.body.classList.add("loading");
    window.setTimeout(function () {
        document.getElementById("loading-shelter").style.display = "block";
    }, 500);
}

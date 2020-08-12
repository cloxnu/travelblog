window.onload = function () {
    document.body.classList.remove("loading");
    window.setTimeout(function () {
        document.getElementById("loading-div").style.display = "none";
    }, 500)
}

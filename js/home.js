let all_blog_json;

readall(function (json) {
    all_blog_json = json;
})

function dark_mode_clicked() {
    change_dark_mode(!is_dark_mode);
    application_to_html();
}

function dark_mode_changed() {
    head_logo_display();
}

function head_logo_display() {
    document.getElementById("head-shelter").style.opacity = is_dark_mode ? "0.3" : "0";
    document.getElementById("head-logo-black").style.opacity = is_dark_mode ? "0" : "1";
    document.getElementById("head-logo-white").style.opacity = is_dark_mode ? "1" : "0";
}

let all_blog_json;

readall(function (json) {
    all_blog_json = json;
})

function dark_mode_clicked() {
    console.log(document.getElementById("dark-mode-input").checked);
    change_dark_mode(!is_dark_mode);
    application_to_html();
}

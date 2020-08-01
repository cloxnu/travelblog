let is_dark_mode = false;
let dark_mode_class_name = "dark-mode-off";

change_dark_mode(window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);

window.matchMedia('(prefers-color-scheme: dark)').addListener(e => {
    const isDarkMode = e.matches;
    change_dark_mode(isDarkMode);
    application_to_html();
});

function change_dark_mode(isDarkMode) {
    is_dark_mode = isDarkMode;
    if (isDarkMode) {
        dark_mode_class_name = "dark-mode-on";
    }
    else {
        dark_mode_class_name = "dark-mode-off";
    }
}

function application_to_html() {
    document.body.classList.remove(is_dark_mode ? "dark-mode-off" : "dark-mode-on");
    document.body.classList.add(is_dark_mode ? "dark-mode-on" : "dark-mode-off");
    document.getElementById("dark-mode-input").checked = is_dark_mode;
    dark_mode_img_display();
    dark_mode_label_flip();

}

function dark_mode_label_flip() {
    if (is_dark_mode)
        document.getElementById("dark-mode-label").classList.remove("flip");
    else
        document.getElementById("dark-mode-label").classList.add("flip");
}

function dark_mode_img_display() {
    document.getElementById("dark-mode-sun-img").style.opacity = is_dark_mode ? "0" : "1";
    document.getElementById("dark-mode-moon-img").style.opacity = is_dark_mode ? "1" : "0";
}

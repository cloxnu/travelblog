let is_dark_mode = false;
let dark_mode_class_name = "dark-mode-off";
let dark_mode_img_name = "res/home/sun.png";

change_dark_mode(window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    const isDarkMode = e.matches;
    change_dark_mode(isDarkMode);
    application_to_html(isDarkMode);
});

function change_dark_mode(isDarkMode) {
    is_dark_mode = isDarkMode;
    if (isDarkMode) {
        dark_mode_class_name = "dark-mode-on";
        dark_mode_img_name = "res/home/moon.png";
    }
    else {
        dark_mode_class_name = "dark-mode-off";
        dark_mode_img_name = "res/home/sun.png";
    }
}

function application_to_html() {
    document.body.classList.remove(is_dark_mode ? "dark-mode-off" : "dark-mode-on");
    document.body.classList.add(is_dark_mode ? "dark-mode-on" : "dark-mode-off");
    document.getElementById("dark-mode-img").src = dark_mode_img_name;
    document.getElementById("dark-mode-input").checked = is_dark_mode;
    if (is_dark_mode)
        document.getElementById("dark-mode-label").classList.remove("flip");
    else
        document.getElementById("dark-mode-label").classList.add("flip");

}
